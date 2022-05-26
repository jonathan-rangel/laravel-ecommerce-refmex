<?php

namespace App\Http\Controllers;

use App\Http\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show()
    {
        $categories = Category::all();
        return view('admin_categorias')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        if (isset($request->identificador))
            $categoria = Category::find($request->identificador);
        else
            $categoria = new Category();

        $path = $request->file('image_path')->storeAs(
            "/public",
            $request->file('image_path')->getClientOriginalName()
        );
        $file =  $request->file('image_path')->getClientOriginalName();

        $categoria->name = $request->category;
        $categoria->image_path = $file;
        
        $categoria->save();

        if (isset($request->identificador))
            return redirect('/admin/inventario');

        return redirect()->back();
    }

    public function delete($id)
    {
        $producto = Category::find($id);
        $producto->delete();
        return redirect('/admin/inventario');
    }
}
