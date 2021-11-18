{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
    @dd($user_orders)
    <h1>questa è la index dei ordini </h1>
    <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
    <ul>
        @foreach ($user_orders as $order)
            <li>order id: {{ $order->id }}</li>
            <li>order name: {{ $order->first_name }}
                {{-- <h5 class="mt-4">Ingredienti:</h5> --}}
                {{-- @foreach ($order->ingredients as $ingredient)
        <div>{{ $ingredient->id }}</div>
        <div>{{ $ingredient->name }}</div>
        <br>
    @endforeach --}}
            </li>
            <br>
        @endforeach
    </ul>
@endsection
