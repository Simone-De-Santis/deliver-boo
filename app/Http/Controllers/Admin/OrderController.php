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

        $products = Order::with('products')->where('user_id', '=', $id)->get();
        /*         $orderIds = [];
        foreach ($products as $product) {
            $orderIds[] = $product->orders->pluck('id')->toArray();
        } */
        return view('admin.orders.index', compact('products'));
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
