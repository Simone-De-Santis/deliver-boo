<?php

namespace App\Http\Controllers\Guest;

use App\Models\Order;
use App\Models\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order = new Order();
        return view('guest.checkout.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //// Added validation for the fields of the 'orders' table for the 'store' function
        $request->validate([
            'first_name' => ['required', 'string', 'max:100'],
            'last_name' => ['required', 'string', 'max:100'],
            'address' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:50'],
            'zip' => ['required', 'number', 'min:5', 'max:5'],
            'phone_number' => ['required', 'number', 'min:8', 'max:20'],
            'message_to_users' => ['nullable', 'string'],
            'discount' => ['required', 'number', 'max:100'],
            'price' => ['required', 'number', '10000'],
        ]);
        // Recover all data with 'request' and assign them to a new instance
        $data = $request->all();
        $order = new Order();
        $order->fill($data);
        $order->save();
        return redirect()->route('guest.orders.show', compact('order'));
    }
}