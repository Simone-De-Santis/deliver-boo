@extends('layouts.app')
@section('content')
    <h1>questa è la index degli ingredienti </h1>

    {{-- @dd($products) --}}

    <ul>
        @foreach ($products as $product)
            <li>{{ $product->id }}</li>
            <li>{{ $product->name }}</li>
            <br>
        @endforeach
    </ul>


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
