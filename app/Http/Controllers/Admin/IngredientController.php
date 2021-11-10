<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        $ingredients = Ingredient::all();
        return view('admin.ingredients.index', compact('ingredients'));
        /*         $id = auth()->user()->id;
        //^PASSO TUTTI I PRODOTTI ASSOCIATI ALL'UTENTE CON I LORO RELATIVI INGREDIENTI, IN QUESTO MODO L'UTENTE
        //^ VEDRA' SOLO GLI INGREDIENTI UTILIZZATI  DA LUI STESSO NEI SUOI PIATTI, E BASTA.
        $products = Product::with('ingredients')->where('user_id', $id)->get(); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredient = new Ingredient();
        return view('admin.ingredients.create', compact('ingredient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //// Added validation for the fields of the 'ingredients' table for the 'store' function
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'url' => ['nullable', 'image'],
        ]);
        // Recover all data with 'request' and assign them to a new instance
        $data = $request->all();
        $ingredient = new Ingredient();
        $ingredient->fill($data);
        $ingredient->save();
        return redirect()->route('admin.ingredients.show', $ingredient->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ingredient $ingredient)
    {
        //^QUI NON PENSO CI SIANO DA FARE CONTROLLI, PERCHE' TUTTI NELLA PIATTAFORMA POSSONO AVERE
        //^ACCESSO AGLI INGREDIENTI ANCHE, SE MAGARI NON LI USANO LORO MA ALTRI RISTORATORI
        return view('admin.ingredients.show', compact('ingredient'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingredient $ingredient)
    {
        return view('admin.ingredients.edit', compact('ingredient'));
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
        //// Added validation for the fields of the 'ingredients' table for the 'update' function
        $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'url' => ['nullable', 'image'],
        ]);
        // Recover all data with 'request'
        $data = $request->all();
        $ingredient->update($data);
        return redirect()->route('admin.ingredients.show', $ingredient->id);
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
        return redirect()->route('admin.ingredients.index');
    }
}
