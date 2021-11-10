{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
    <h1>questa è la show del prodotto {{ $product->id }} </h1>
@endsection
