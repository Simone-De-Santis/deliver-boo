{{-- Added general layout --}}
@extends('layouts.app')
{{-- Added 'content' section to add page content --}}
@section('content')
    <h1>questa è la index dei ordini </h1>

    {{-- @dd($orderIds) --}}
    <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
    <ul>
        @foreach ($orderIds as $order)
            @foreach ($order as $orderId)
                <li>order id: {{ $orderId }}</li>
                <li>order name: {{ $orderId }}
                    <h5 class="mt-4">Ingredienti:</h5>
                    {{-- @foreach ($order->ingredients as $ingredient)
        <div>{{ $ingredient->id }}</div>
        <div>{{ $ingredient->name }}</div>
        <br>
    @endforeach --}}
                </li>
                <br>
            @endforeach
        @endforeach
    </ul>
@endsection
