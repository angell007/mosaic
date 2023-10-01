<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity', 'element_id',  'store_id', 'date', 'user_id', 'read'
    ];

    protected $dates = ['created_at', 'updated_at'];

    public function elements()
    {
        return $this->belongsToMany(Element::class)
            ->as('quantities')
            ->withPivot('quantity', 'missing', 'alert', 'checked');
    }


    public function getCreatedAtAttribute()
    {
        // return Carbon::parse($this->attributes['created_at'])->toDateString();
        return Carbon::parse($this->attributes['created_at'])->format('Y-m-d h:i:s');
    }
    public function getUpdatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('Y-m-d h:i:s');
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
