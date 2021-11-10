@extends('layouts.app')
@section('content')
    <h1>questa è la show dell'ingrediente {{ $ingredient->id }}</h1>

    <ul></ul>
    <li>Ingredient id: {{ $ingredient->id }}</li>
    <li>Ingredient name: {{ $ingredient->name }}</li>
    </ul>
@endsection
