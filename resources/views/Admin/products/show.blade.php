{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container" class="products-section">
    <h1>Questa è la show del prodotto {{ $product->id }} </h1>
    
    <div class="card mt-4" style="width: 18rem;" >
      <img class="card-img-top" src="{{ asset('storage/' . $product->url) }}" alt="immagine-prodotto">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <a href="{{ route('admin.products.index') }}" class="btn text-white " id="buttom">Indietro</a>
      </div>
    </div>
  </section>
@endsection
