{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
    <h1>questa è la edit dei prodotti</h1>
    @include('admin.includes.products.form')
@endsection
