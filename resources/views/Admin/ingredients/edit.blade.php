{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container">
    <h1>Questa è la edit degli ingredienti </h1>
    @include('includes.admin.ingredients.form')
  </section>
@endsection
