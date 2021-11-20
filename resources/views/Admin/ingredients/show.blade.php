{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container"  id="card-igredients">
    <h1>{{ $ingredient->name }}</h1>
    <div class="card m-0" style="width: 18rem;">
      <img class="card-img-top" src="{{  $ingredient->url }}" alt="Card image cap">
      <div class="card-body card-igredients container-fluid">
        <ul>
          <li>ID: {{ $ingredient->id }}</li>
          <li>Nome ingrediente: {{ $ingredient->name }}</li>
          <li>Classificazione{{ $ingredient->classification }}</li>
        </ul>
      </div>
    </div>
    <button class="btn  mt-4" id="buttom" >
      <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.index') }}">Indietro</a>
    </button>
  </section>
@endsection
