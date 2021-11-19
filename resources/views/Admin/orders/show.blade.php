{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <h1>questa è la show degli ordini </h1>
  <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
  {{-- @dd($details_product_orders) --}}
  @foreach ($details_product_orders as $details)
    <ul>
      <li>nome prodotto :{{ $details->name }}</li>
      <li> descrizione prodotto:{{ $details->description }}</li>
      <li> quantità prodotto {{ $details->quantity }}</li>
      <li> prezzo prodotto singolo {{ $details->price }}</li>
      <li> sconto da applicare sul prezzo {{ $details->discount }}</li>









    </ul>
  @endforeach




  <h3>dettagli spedizione:</h3>
  <ul>
    @foreach ($details_guest_order as $details)

      <li>nome{{ $details->first_name }}</li>
      <li>{{ $details->last_name }}</li>
      <li>{{ $details->address }}</li>
      <li>{{ $details->city }}</li>
      <li>{{ $details->message_to_users }}</li>
      <li>{{ $details->created_at }}</li>
      <li>{{ $details->created_at }}</li>
      <li>{{ $details->id }}</li>
    @endforeach
  </ul>
@endsection
