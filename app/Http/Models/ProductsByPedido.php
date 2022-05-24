<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ProductsByPedido extends Model
{
    public function Product()
    {
        return $this->belongsTo('App\Http\Models\product');
    }

    public function User()
    {
        return $this->belongsTo('App\Http\Models\User');
    }

    public function Pedido()
    {
        return $this->belongsTo('App\Http\Models\Pedidos');
    }
}
