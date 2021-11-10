<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $types = Type::all();
        $product = new Product();
        return view('admin.products.create', compact('types', 'product'));
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
        $product->user_id = auth()->user()->id;
        $product->fill($data);
        $product->url = Storage::put('uploads', $data['url']);;
        $product->save();
        return redirect()->route('admin.products.show', compact('product'));
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
        $types = Type::all();
        return view('admin.products.edit', compact('product', 'types'));
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
            // 'url' => ['nullable', 'image'],
        ]);
        // Recover all data with 'request'
        $data = $request->all();
        $product->url = Storage::put('uploads', $data['url']);;
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
