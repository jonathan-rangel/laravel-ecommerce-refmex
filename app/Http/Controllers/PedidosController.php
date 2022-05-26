<?php

namespace App\Http\Controllers;

use App\Http\Models\Pedidos;
use App\Http\Models\Product;
use App\Http\Models\ProductsByCar;
use App\Http\Models\ProductsByPedido;
use App\Http\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class PedidosController extends Controller
{
    public function buyCart(Request $request){
        $total = 0; //Venta total a cobrar

        $id = $request->user_id; 

        $cart = ProductsByCar::where('user_id', $id)->get(); //Se obtienen los productos

        foreach ($cart as $c) {
            $quantity = json_encode($c->quantity, JSON_NUMERIC_CHECK);
            $price = json_encode($c->product->price, JSON_NUMERIC_CHECK);
            $mult = ($quantity * $price);
            $total += $mult;
            //Restar quantity al producto->stock
            $product_inventory = product::find($c->product_id); //Encontramos el producto en el inventario mediante su ID
            $stock_actual = json_encode($product_inventory->stock, JSON_NUMERIC_CHECK); //Stock Actual en la  BD

            $product_inventory->stock = ($stock_actual - $quantity);
            $product_inventory->save(); //Se actualiza el producto en la base de datos
        }
        $pedido = new Pedidos();

        $pedido->user_id = $id;
        $pedido->total = $total;
        $pedido->save();

        foreach ($cart as $c) {
            $products_by_pedidos = new ProductsByPedido();

            $products_by_pedidos->user_id = $pedido->user_id;
            $products_by_pedidos->product_id = $c->product->id;
            $products_by_pedidos->pedido_id = $pedido->id;
            $products_by_pedidos->quantity = $c->quantity;

            $products_by_pedidos->save();
        }

        foreach ($cart as $c) {
            $producto = ProductsByCar::find($c->id);
            $producto->delete();
        }

        return redirect()->back()->with('successMsg', 'PEDIDO REALIZADO CON EXITO!');
    }

    public function show()
    {
        $pedidos = Pedidos::all();
        $products_by_pedidos = [];

        foreach ($pedidos as $pedido) {
            echo '<script>';
            echo 'console.log("User ID:",' . json_encode($pedido->user_id) . '
                ,"User:",' . json_encode($pedido->User->name) . ',"# Pedido:",' . json_encode($pedido->id) . ')';
            echo '</script>';

            $id = json_encode($pedido->user_id); //ID de usuario
            $pedido_id = json_encode($pedido->id); //ID de pedido

            $cart = ProductsByPedido::where('user_id', $id)->where('pedido_id', $pedido_id)->get(); //Obtencion de los productos del usuario
            array_push($products_by_pedidos, $cart);
            foreach ($cart as $c) {
                echo '<script>';
                echo 'console.log("Producto:",' . json_encode($c->product->name) . ')';
                echo '</script>';
            }
        }

        foreach ($products_by_pedidos as $pp) {
            echo '<script>';
            echo 'console.log("Product By Pedidos:",' . json_encode($pp) . ')';
            echo '</script>';
        }

        return view('admin_pedidos')->with('pedidos', $pedidos)->with('products_by_pedidos', $products_by_pedidos);
    }

    public function showProductsByUserId($id)
    {
        $cart = ProductsByCar::where('user_id', $id)->get(); //Se obtienen los productos
        return $cart;
    }
    public function showById($id)
    {
        $pedidos = Pedidos::where('user_id', $id)->get();
        $categories = Category::all();
        $products_by_pedidos = [];

        foreach ($pedidos as $pedido) {
            echo '<script>';
            echo 'console.log("User ID:",' . json_encode($pedido->user_id) . '
                ,"User:",' . json_encode($pedido->User->name) . ',"# Pedido:",' . json_encode($pedido->id) . ')';
            echo '</script>';

            $id = json_encode($pedido->user_id); //ID de usuario
            $pedido_id = json_encode($pedido->id); //ID de pedido

            $cart = ProductsByPedido::where('user_id', $id)->where('pedido_id', $pedido_id)->get(); //Obtencion de los productos del usuario
            array_push($products_by_pedidos, $cart);
            foreach ($cart as $c) {
                echo '<script>';
                echo 'console.log("Producto:",' . json_encode($c->product->name) . ')';
                echo '</script>';
            }
        }
        foreach ($pedidos as $pedido) {
            echo '<script>';
            echo 'console.log(' . json_encode($pedido) . ')';
            echo '</script>';
        }
        return view('pedidos')->with('pedidos', $pedidos)->with('products_by_pedidos', $products_by_pedidos)->with('categories', $categories);
    }

    public function createPDF($user_id, $pedido_id)
    {
        $pedido = Pedidos::find($pedido_id);
        $productos = ProductsByPedido::where('user_id', $user_id)->where('pedido_id', $pedido_id)->get();

        $pdf = PDF::loadView('pdf-online', compact('pedido', 'productos'));

        return $pdf->stream('RefMex_Ticket#'.json_encode($pedido_id).'.pdf');
    }

    public function verPDF($user_id, $pedido_id)
    {
        $pedido = Pedidos::find($pedido_id);
        $productos = ProductsByPedido::where('user_id', $user_id)->where('pedido_id', $pedido_id)->get();
        return view('pdf-online')->with('productos',$productos)->with('pedido',$pedido);
    }
}
