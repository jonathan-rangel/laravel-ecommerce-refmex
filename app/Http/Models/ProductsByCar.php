<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsByCar extends Model
{
    public function product()
    {
        return $this->belongsTo('App\Http\Models\product');
    }

    public function User()
    {
        return $this->belongsTo('App\Http\Models\User');
    }
}
