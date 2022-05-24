<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id',
        'cart_id',
        'name',
        'stock',
        'price',
        'description',
        'image_path',
    ];

    //Relacion uno a muchos (inversa)
    public function category()
    {
        return $this->belongsTo('App\Http\Models\category');
    }

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }
}
