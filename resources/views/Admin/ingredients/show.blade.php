{{-- Added general layout --}}
@extends('layouts.app')
{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container">
    <h1>Questa è la show dell'ingrediente {{ $ingredient->id }}</h1>
    <button class="btn btn-primary">
      <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.index') }}">Indietro</a>
    </button>
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{ asset('storage/' . $ingredient->url) }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">{{ $ingredient->name }}</h5>
        <a href="{{ route('admin.ingredients.index') }}" class="btn btn-primary">Indietro</a>
      </div>
    </div>
    <button class="btn btn-primary">
      <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.index') }}">Indietro</a>
    </button>

  </section>

@endsection
