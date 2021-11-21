{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container" class="products-section">
    <h1>Questa è la show del prodotto {{ $product->id }} </h1>

    <div class="card mt-4" style="width: 18rem;">
      <img class="card-img-top" @if ($product->url)
      src="{{ asset('storage/' . $product->url) }}"

    @else
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ9R8JNXHezmElwOman5hc0r6fBmIOgZtDgCw&usqp=CAU" @endif
      alt="
      immagine-prodotto">
      <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <a href="{{ route('admin.products.index') }}" class="btn text-white " id="buttom">Indietro</a>
      </div>
    </div>
  </section>
@endsection
