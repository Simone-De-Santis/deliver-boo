@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
            <h1>questa è la home admin </h1>
        </div>
        <h3 class="mt-5">Prodotti associati all'utente attuale:</h3>
        <ul>
            @foreach ($products as $product)
                <li>Product id: {{ $product->id }}</li>
                <li>Product name: {{ $product->name }}</li>
                <br>
            @endforeach
        </ul>
    </div>
@endsection
