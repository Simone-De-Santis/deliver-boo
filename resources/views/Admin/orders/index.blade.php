{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')

  <h1>questa è la index dei ordini </h1>
  <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
  <ul>
    @foreach ($user_orders as $order)
      {{-- <li>order id: {{ $order->id }}</li> --}}
      <li>order name: {{ $order->first_name }}
      <li>order address: {{ $order->address }}
      <li>order city: {{ $order->city }}
      <li>order message to users: {{ $order->message_to_users }}
      <li>order ordine creato il :{{ $order->created_at }}
        <button type="button" class="btn btn-dark"><a class="text-white text-decoration-none"
            href="{{ route('admin.orders.show', $order->id) }}"> Details</a></button>

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
@section('script-end')
  <script>

  </script>
@endsection
