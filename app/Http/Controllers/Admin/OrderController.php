<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $id = auth()->user()->id;
        //^PASSO TUTTI I PRODOTTI ASSOCIATI ALL'UTENTE CON I LORO RELATIVI orderI, IN QUESTO MODO L'UTENTE
        //^ VEDRA' SOLO GLI orderI UTILIZZATI  DA LUI STESSO NEI SUOI PIATTI, E BASTA.
        $products = Product::with('orders')->where('user_id', $id)->get();
        $orderIds = [];
        /*      dd($products); */
        foreach ($products as $product) {
            /* dd($product->orders); */
            $orderIds[] = $product->orders->pluck('id')->toArray();
            //!LO FA SOLO DEL SECONDO PRODOTTO
            /* $orderIds = $x; */
        }

        /*         $orders = $products[0]->orders->pluck('id')->toArray(); */
        /* if (!array_key_exists('products', $orders)) */
        return view('admin.orders.index', compact('orderIds'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.orders.show');
    }
}
