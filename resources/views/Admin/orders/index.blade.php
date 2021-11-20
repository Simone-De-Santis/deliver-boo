{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')

<section class="container">
  
  <h2 class="mt-5 text-white">Ordini effetuati:</h2>

  <div class="card order-card" style="">
    <div class="card-body p-3 container-fluid">
      
      <ul class="orders-info  ">
        @foreach ($user_orders as $order) 
          {{-- <li>order id: {{ $order->id }}</li> --}}
          <li>Nome Cognome: {{ $order->first_name }}  {{ $order->last_name }}</li>
          <hr>
          <li>Indirizzo: {{ $order->address }}</li>
          <hr>
          <li>Città: {{ $order->city }}</li>
          <hr>
          <li>Totale: {{ $order->total_price }}</li>
          <hr>
          <li>Data ordine :{{ $order->created_at }}</li>
          <hr>
          <button type="button" class="btn btn-dark mb-4"><a class="text-white text-decoration-none"
              href="{{ route('admin.orders.show', $order->id) }}"> Dettagli</a></button>
    
         
        @endforeach
      </ul>
<br>
      <br>


    </div>
  </div>


 

</section>
@endsection
@section('script-end')
  <script>

  </script>
@endsection
