{{-- Added general layout --}}
@extends('layouts.app')
{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container">
    <h1>{{ $ingredient->name }}</h1>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{ asset('storage/' . $ingredient->url) }}" alt="Card image cap">
      <div class="card-body">
        <ul>
          <li>ID: {{ $ingredient->id }}</li>
          <li>Nome ingrediente: {{ $ingredient->name }}</li>
          <li>Classificazione{{ $ingredient->classification }}</li>
        </ul>
      </div>
    </div>
    <button class="btn btn-primary mt-4">
      <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.index') }}">Indietro</a>
    </button>
  </section>
@endsection
