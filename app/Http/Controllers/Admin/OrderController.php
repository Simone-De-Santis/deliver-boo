<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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

        $user_orders = DB::select("SELECT `first_name`,`last_name`,`address`,`city`,`message_to_users`,`orders`.`created_at` FROM `orders`
          INNER JOIN order_product
          ON orders.id = order_product.order_id 
          INNER JOIN products 
          ON products.id = order_product.product_id 
          WHERE products.user_id = $id
          GROUP BY orders.id");

        /* $products = Order::with('products')->where('user_id', '=', $id)->get(); */
        /*         $orderIds = [];
        foreach ($products as $product) {
            $orderIds[] = $product->orders->pluck('id')->toArray();
        } */

        return view('admin.orders.index', compact('user_orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // $id_users = auth()->user()->id;

        // $user_orders = DB::select("SELECT `first_name`,`last_name`,`address`,`city`,`message_to_users`,`orders`.`created_at` FROM `orders`
        //   INNER JOIN order_product
        //   ON orders.id = order_product.order_id 
        //   INNER JOIN products 
        //   ON products.id = order_product.product_id 
        //   WHERE products.user_id = $id_users
        //   WHERE products.user_id = $id

        //   GROUP BY orders.id");



        return view('admin.orders.show');
    }
}
