{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
<section class="container">
    <h1>Questa è la show dell'ingrediente {{ $ingredient->id }}</h1>

    <ul></ul>
    <li>Ingredient id: {{ $ingredient->id }}</li>
    <li>Ingredient name: {{ $ingredient->name }}</li>
    </ul>
    <button class="btn btn-primary">
        <a class="text-white text-decoration-none" href="{{route( 'admin.ingredients.index' )}}">Indietro</a>
    </button>

</section>
   
@endsection
