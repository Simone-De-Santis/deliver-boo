{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
<section class="container">
    <h1>Questa è la index degli ingredienti </h1>
    <button type="button" class="btn btn-primary">
        <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.create') }}">Aggiungi un nuovo ingrediente</a>
    </button> 
    <hr> 
    <ul>
        @foreach ($ingredients as $ingredient)
            <li>Ingredient id: {{ $ingredient->id }}</li>
            <li>ingredient name: {{ $ingredient->name }}</li>
            <br>     
            <button type="button" class="btn btn-secondary">
                <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.edit', $ingredient->id) }}">Modifica</a>
            </button>
        @endforeach    
    </ul>
</section>
   


    {{-- Se piu avanti in altre rotte dovesse servire, qui ci sono i prodotti
    del ristoratore attuale, con solo gli ingredienti a loro associati.
    
    Nel controller basta fare:
        $id = auth()->user()->id;
        //^PASSO TUTTI I PRODOTTI ASSOCIATI ALL'UTENTE CON I LORO RELATIVI INGREDIENTI, IN QUESTO MODO L'UTENTE
        //^ VEDRA' SOLO GLI INGREDIENTI UTILIZZATI  DA LUI STESSO NEI SUOI PIATTI, E BASTA.
        $products = Product::with('ingredients')->where('user_id', $id)->get();

        CODICE HTML:
    
        <h3 class="mt-5">Ingredienti associati all'utente attuale:</h3>
    <ul>
        @foreach ($products as $product)
            <li>product id: {{ $product->id }}</li>
            <li>product name: {{ $product->name }}
                <h5 class="mt-4">Ingredienti:</h5>
                @foreach ($product->ingredients as $ingredient)
                    <div>{{ $ingredient->id }}</div>
                    <div>{{ $ingredient->name }}</div>
                    <br>
                @endforeach
            </li>
            <br>
        @endforeach
    </ul> --}}
@endsection
