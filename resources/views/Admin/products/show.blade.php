{{-- Added general layout --}}
@extends('layouts.app')
{{-- Added 'content' section to add page content --}}
@section('content')
    <section class="container">
        <h1>Questa è la show del prodotto {{ $product->id }} </h1>
        <button class="btn btn-primary">
            <a class="text-white text-decoration-none" href="{{ route('admin.products.index') }}">Indietro</a>
        </button>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/' . $product->url) }}" alt="immagine-prodotto">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Indietro</a>
            </div>
        </div>
    </section>
@endsection
