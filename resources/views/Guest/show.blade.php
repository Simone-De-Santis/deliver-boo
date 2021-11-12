@extends('layouts.app');
@section('cdns')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
        integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
        crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection

@section('content')
    <div id="app">
        {{-- @dd(products) --}}
        {{-- <div v-for="product in products.products">
            {{ product . name }}
        </div> --}}





        <section class="container">
            <h1>Questa è la show del prodott del ristorante {{ $user->id }} </h1>

            @foreach ($user->products as $product)
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/' . $product->url) }}" alt="immagine-prodotto">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Indietro</a>
                    </div>
                </div>
            @endforeach

        </section>

    </div>

@endsection

@section('script-end')
    <script>
        Vue.config.devtools = true;

        console.log('vue', Vue)
        const app = new Vue({
            el: '#app',
            data: {
                products: {},
            },
            methods: {

            },
        })
    </script>
@endsection
