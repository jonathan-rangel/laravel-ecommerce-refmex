<?php

namespace App\Http\Controllers;

use App\Http\Models\Product;
use App\Http\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        if (isset($request->identificador))
            $producto = Product::find($request->identificador);
        else
            $producto = new Product();

        $path = $request->file('image_path')->storeAs(
            'public',
            $request->file('image_path')->getClientOriginalName()
        );

        $file = $request->file('image_path')->getClientOriginalName();

        $producto->category_id = $request->category_id;
        $producto->name = $request->name;
        $producto->state = $request->state;
        $producto->storage = $request->storage;
        $producto->color = $request->color;
        $producto->description = $request->description;
        $producto->stock = $request->stock;
        $producto->price = $request->price;
        $producto->image_path = $file;
        if ($request->popular == "Sí")
            $producto->popular = 1;
        else
            $producto->popular = 0;

        $producto->save();

        if (isset($request->identificador))
            return redirect('/admin/inventario');

        return redirect()->back();
    }

    public function show()
    {
        $inventario = Product::all();
        $categorias = category::all();
        return view('admin_inventario')->with('inventario', $inventario)->with('categorias', $categorias);
    }

    public function showProducts()
    {
        $smartphones = Product::all();
        $categories = category::all();
        return view('all_products')->with('smartphones', $smartphones)->with('categories', $categories);
    }
    public function showOneProduct($category, $id)
    {
        $categories = Category::all();
        $producto = Product::find($id);
        return view('product')->with('producto', $producto)->with('categories', $categories);
    }

    public function showSmartphonesByCategory($category)
    {
        $categories = Category::all();
        $category = Category::where('name', $category)->first();
        $smarpthones = Product::where('category_id', $category->id)->get();
        return view('smartphones_by_category')->with('smartphones', $smarpthones)->with('categories', $categories)->with('category', $category);
    }

    public function edit(Request $request)
    {
        if (isset($request->identificador)) {
            $producto = Product::find($request->identificador);
            $path = $request->file('image_path')->storeAs(
                'public',
                $request->file('image_path')->getClientOriginalName()
            );

            $file = $request->file('image_path')->getClientOriginalName();

            $producto->category_id = $request->category_id;
            $producto->name = $request->name;
            $producto->description = $request->description;
            $producto->stock = $request->stock;
            $producto->price = $request->price;
            $producto->image_path = $file;

            $producto->save();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $producto = Product::find($id);
        $producto->delete();
        return redirect('/admin/inventario');
    }

    public function showProduct($category)
    {
        $producto = Product::find($category);

        return $producto;
    }
}
