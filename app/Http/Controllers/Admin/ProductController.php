<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use App\Models\Ingredient;
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
        $ingredients = Ingredient::all();
        $product = new Product();
        return view('admin.products.create', compact('types', 'ingredients', 'product'));
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
        if ($product->url) $product->url = Storage::put('uploads', $data['url']);
        $product->save();
        if (array_key_exists('ingredients', $data)) $product->ingredients()->attach($data['ingredients']);
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
        $ingredients = Ingredient::all();
        $ingredientIds = $product->ingredients->pluck('id')->toArray();
        return view('admin.products.edit', compact('product', 'types', 'ingredients', 'ingredientIds'));
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
        // Added validation for the fields of the 'products' table for the 'store' function
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
        $product->fill($data);
        if (array_key_exists('url', $data)) {
            if ($product->url) Storage::delete($product->url);
            $product->url = Storage::put('uploads', $data['url']);;
        }
        $data = $request->all();
        if (!array_key_exists('ingredients', $data) && count($product->ingredients)) $product->ingredients()->detach();
        else $product->ingredients()->sync($data['ingredients']);
        $product->save($data);
        return redirect()->route('admin.products.show', compact('product'));
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
