<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Category;
use App\Http\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::user()->tipo == 0)
            return view('admin');
        else
            $products = Product::where('popular', 1)->get();
            return view('welcome')->with('products', $products);
    }

    public function admin()
    {
        if (Auth::user()->tipo == 0)
            return view('admin');
        else
            return redirect('/login');
    }
}
