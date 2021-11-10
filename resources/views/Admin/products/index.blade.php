{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
<section class="container">
    <h1>Questa è la index dei prodotti </h1>
    <h3 class="mt-5">Prodotti associati all'utente attuale:</h3>
    <button type="button" class="btn btn-primary">
        <a class="text-white text-decoration-none" href="{{ route('admin.products.create') }}">Aggiungi un nuovo prodotto</a>
    </button>  
    <hr>
    <ul>
        @foreach ($products as $product)
            <li>Product id: {{ $product->id }}</li>
            <li>Product name: {{ $product->name }}</li>
            <br>     
            <button type="button" class="btn btn-secondary">
                <a class="text-white text-decoration-none" href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
            </button>
        @endforeach    
    </ul>
</section>
   
@endsection
