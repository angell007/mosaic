<?php

use App\Http\Controllers\ExportController;
use App\Http\Controllers\InventoryController;
use Illuminate\Support\Facades\Route;

Route::middleware("auth.jwt")->group(function () {

    Route::post("first", [InventoryController::class, "first"]);
    Route::post("register/{store}", [InventoryController::class, "register"]);
    Route::post("edit/{inventory}", [InventoryController::class, "update"]);
    Route::get("last/{store}", [InventoryController::class, "last"]);
    Route::post("update/{inventory}", [InventoryController::class, "update"]);
    Route::get("lastest", [InventoryController::class, "reportAllStores"]);
    Route::get("stores", [InventoryController::class, "stores"]);
    Route::get("get_element/{element}", [InventoryController::class, "getElement"]);
    Route::get("get_elements", [InventoryController::class, "getElements"]);
    Route::get("unreaded", [InventoryController::class, "unreaded"]);
    Route::get("owners/{id}", [InventoryController::class, "owners"]);
    Route::get("markasread/{id}", [InventoryController::class, "markasread"]);
    Route::get("alls", [InventoryController::class, "alls"]);
    Route::get("check/{id}", [InventoryController::class, "check"]);
    Route::get("pdf/{id}", [InventoryController::class, "downloadPdf"]);
    Route::get('export/', [ExportController::class, 'export']);
});

// Route::get("unreaded",  function () {

//         $phpWord = \PhpOffice\PhpWord\IOFactory::load(public_path('file2.docx'));
//         $section = $phpWord->addSection();

//         $source = public_path() . "/xxx.html";

       
//         $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'HTML');
//         $objWriter->save($source);

//        return response()->json('listo');
      
// });
// Route::get("{element}", [InventoryController::class, "get"]);
// Route::get("saveinventory/{store}", [InventoryController::class, "saveinventory"]);
