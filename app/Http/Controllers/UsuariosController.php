<?php

namespace App\Http\Controllers;

use App\Http\Models\User;
use App\Http\Models\Category;
use App\Http\Models\Product;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function showUsuarios()
    {
        $usuarios = User::all();
        return view('admin_usuarios')->with('usuarios', $usuarios);
    }
    public function showAdmins()
    {
        $usuarios = User::all();
        return view('admin_administradores')->with('usuarios', $usuarios);
    }

    public function usuariosValidation($id)
    {
        $categories = Category::all();
        $products = Product::where('popular', 1)->get();
        $user = User::find($id);
        return view('welcome')->with('user', $user)->with('categories', $categories)->with('products', $products);
    }
}
