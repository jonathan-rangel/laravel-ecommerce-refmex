<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
  public function Create()
  {
      $cart = new Cart();
  }
}
