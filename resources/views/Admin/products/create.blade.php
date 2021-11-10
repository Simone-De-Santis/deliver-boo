{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
    <h1>questa è la creazione dei prodotti </h1>
    <div>
        @include('admin.includes.products.form')
    </div>
@endsection
