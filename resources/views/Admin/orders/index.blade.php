{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')

  <h1>questa è la index dei ordini </h1>
  <h3 class="mt-5">Ordini associati all'utente attuale:</h3>
  <ul>
    @foreach ($user_orders as $order)
      {{-- <li>order id: {{ $order->id }}</li> --}}
      <li>order name: {{ $order->first_name }} - as{{ $order->last_name }}</li>
      <li>order address: {{ $order->address }}</li>
      <li>order city: {{ $order->city }}</li>
      <li>price ordfer total: {{ $order->total_price }}</li>
      <li>order ordine creato il :{{ $order->created_at }}</li>
      <button type="button" class="btn btn-dark"><a class="text-white text-decoration-none"
          href="{{ route('admin.orders.show', $order->id) }}"> Details</a></button>

      <br>
    @endforeach
  </ul>
@endsection
@section('script-end')
  <script>

  </script>
@endsection
