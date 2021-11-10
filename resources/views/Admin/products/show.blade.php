@extends('layouts.app')
@section('content')
    <h1>questa è la show del prodotto {{ $product->id }} </h1>

    <h3 class="mt-5">Prodotto singolo dell'utente attuale:</h3>
    <ul></ul>
    <li>Product id: {{ $product->id }}</li>
    <li>Product name: {{ $product->name }}</li>
    </ul>
@endsection
