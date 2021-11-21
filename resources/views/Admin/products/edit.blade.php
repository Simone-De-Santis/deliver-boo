{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container products-section" >
    <h1>Modifica il tuo prodotto</h1>
    @include('includes.admin.products.form')
  </section>
@endsection
