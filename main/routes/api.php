<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Mail\EmailInventory;
use App\Models\Inventory;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;

Route::prefix("auth")->group(
  function () {
    Route::post("login", [AuthController::class, 'login'])->name('login');
    Route::post("register", [AuthController::class, "register"]);
    Route::middleware("auth.jwt")->group(function () {
      Route::post("logout", [AuthController::class, "logout"]);
      Route::post("refresh", [AuthController::class, "refresh"]);
      Route::post("me", [AuthController::class, "me"]);
      Route::get("renew", [AuthController::class, "renew"]);
      Route::get("change-password", [
        AuthController::class,
        "changePassword",
      ]);
    });
  }
);


Route::get('preview', function () {
  $inventory = Inventory::find(2);
  $user = $inventory->user->name;
  $data = ['email' => 'mdgrisalez@misena.edu.co', 'vendor' => $inventory->user->name, 'code' => $inventory->id];
  Mail::to($data['email'])->send(new EmailInventory($data));

  return response()->json($user);
});


Route::get('/clear-cache', function () {

  $exitCode = Artisan::call('config:clear');

  $exitCode = Artisan::call('cache:clear');

  $exitCode = Artisan::call('config:cache');

  return 'DONE';
});


Route::get('/optimize-files', function () {

  $folder = public_path('imgs/items');

  $carpeta = glob($folder . '/*.png');

  $ids = DB::table('elements')->select('id')->pluck('id')->toArray();

  $files = array();

  foreach ($carpeta as $value) {
    preg_match('/qr(\d+)\.png/', $value, $matches);
    array_push($files, $matches[1]);
  }

  $filesWhitoutId = array_diff($files, $ids);

  foreach ($filesWhitoutId as $file) {
    $rutaCompleta = public_path() . '/imgs/items/qr' . $file . '.png';
    if (File::exists($rutaCompleta)) {
      File::delete($rutaCompleta);
    }
  }

  return 'DONE';
});

Route::get('/optimize-files-img', function () {

  $folder = public_path('imgs/imgproducts');

  $carpeta = glob($folder . '/*.png');

  $names = DB::table('elements')->select('photo')->pluck('photo')->toArray();

  foreach ($carpeta as $value) {

    if (!in_array(basename($value), $names)) {
      dd($value);
      if (File::exists($value)) {
        File::delete($value);
      }
    }
  }

  return 'DONE';
});
