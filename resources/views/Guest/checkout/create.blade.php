@extends('layouts.app')
@section('content')
  <section class="container">

    <section class="row">

      <section id="checkout-page" class="col-6">
        <h1>Pagina carrello/ordine</h1>
        @include('includes.guest.checkout.form')

      </section>
      <section class="col-6">
        Prodotti
      </section>
    </section>
  </section>

@endsection
