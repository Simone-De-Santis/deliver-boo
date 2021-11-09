<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredients= Ingredient::all();
        return view ('admin.products.ingredients.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        return view ('admin.products.ingredients.craete');
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
            'name'=>['required','string', 'max:100'],
            'url'=> ['nullable', 'image'],
        ]);
        $data = $request->all();
        $ingredient = new Ingredient();
        $ingredient->fill($data);
        $ingredient->save;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Ingredient $ingredient)
    {
        return view('admin.products.ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('admin.products.ingredients.edit', compact('ingredient'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingredient $ingredient)
    {
        
        $request->validate([
            'name'=>['required','string', 'max:100'],
            'url'=> ['nullable', 'image'],
        ]);
        $data = $request->all();
        $ingredient ->update($data);
       
        return redirect()->route('admin.products.ingredients.show', $ingredient->id);
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingredient $ingredient)
    {
        $ingredient->delete();
        return redirect()->route('admin.products.ingredients.index');
    }
}
