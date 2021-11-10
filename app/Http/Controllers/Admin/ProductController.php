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
        //A questo punto questa rotta potrebbe anche non servire dato che li vediamo gia in home
        $id = auth()->user()->id;
        $products = Product::where('user_id', $id)->get();
        return view('admin.products.index', compact('products'));
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
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'discount' => ['numeric', 'max:100'],
            'price' => ['required', 'numeric', 'max:10000'],
            'description' => ['string', 'max:10000'],
            'is_available' => ['boolean'],
            'url' => ['nullable', 'image'],
        ]);

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
    public function show(Product $product, Request $request)
    {

        $id = auth()->user()->id;
        if ($product->user_id == $id) return view('admin.products.show', compact('product'));
        //^COSI ALTRI RISTORATORI NON POSSONO VEDERE ALTRI PRODOTTI
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
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'discount' => ['numeric', 'max:100'],
            'price' => ['required', 'numeric', 'max:10000'],
            'description' => ['string', 'max:10000'],
            'is_available' => ['boolean'],
            'url' => ['nullable', 'image'],
        ]);

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
