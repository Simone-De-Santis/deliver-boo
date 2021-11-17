{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <h1>questa è la show degli ordini </h1>
  <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
  {{-- <ul>
        @foreach ($products as $product)
            <li>Product id: {{ $product->id }}</li>
            <li>Product name: {{ $product->name }}</li>
            <br>
        @endforeach
    </ul> --}}
@endsection
