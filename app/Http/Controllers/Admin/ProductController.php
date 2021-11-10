<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::with('user_id')->get();
        //  return view('admin.products.index', compact('products'));
        return view('admin.products.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', ['product' => new Product()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //// Added validation for the fields of the 'products' table for the 'store' function
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'discount' => ['numeric', 'max:100'],
            'price' => ['required', 'numeric', 'max:10000'],
            'description' => ['string', 'max:10000'],
            'is_available' => ['boolean'],
            'url' => ['nullable', 'image'],
        ]);
        // Recover all data with 'request' and assign them to a new instance
        $data = $request->all();
        $product = new Product();
        $product->fill($data);
        $product->save;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //// Added validation for the fields of the 'products' table for the 'store' function
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'discount' => ['numeric', 'max:100'],
            'price' => ['required', 'numeric', 'max:10000'],
            'description' => ['string', 'max:10000'],
            'is_available' => ['boolean'],
            'url' => ['nullable', 'image'],
        ]);
        // Recover all data with 'request'
        $data = $request->all();
        $product->update($data);
        return redirect()->route('admin.products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index');
    }
}
