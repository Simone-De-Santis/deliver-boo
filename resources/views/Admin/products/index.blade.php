@extends('layouts.app')
@section('content')
    <h1>questa è la index dei prodotti </h1>


    <h3 class="mt-5">Prodotti associati all'utente attuale:</h3>
    <ul>
        @foreach ($products as $product)
            <li>Product id: {{ $product->id }}</li>
            <li>Product name: {{ $product->name }}</li>
            <br>
        @endforeach
    </ul>
@endsection
