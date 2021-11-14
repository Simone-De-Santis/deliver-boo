{{-- Added general layout --}}
@extends('layouts.app');
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
        integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
        crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with selected restaurant products --}}
@section('content')
    {{-- Id app to add link with Vue --}}
    <div id="app">
        <section class="container">
            <h1>Prodotti del ristorante {{ $user->activity_name }} </h1>
            <div id="products-section" class="row">
                {{-- Products section --}}
                <div class="col-6">
                    {{-- Cycle foreach to print all the products of the restaurant --}}
                    @foreach ($user->products as $product)
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ asset('storage/' . $product->url) }}"
                                alt="immagine-prodotto">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <h5 class="card-title">{{ $product->id }}</h5>
                                <p class="card-text">{{ $product->description }}</p>
                                <p class="card-text">€ {{ $product->price }}</p>
                                <a href="/" class="btn btn-primary">Indietro</a>
                                <button class="btn btn-warning" v-on:click="addProduct({{ $product }})">Aggiungi al
                                    carrello</button>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
                {{-- Cart section --}}
                <div v-if="cart.length > 0">
                    <div id="cart-section" class="col" v-if="cart[0].user_id == {{ $user->id }}">
                        <h1>Il mio carrello:</h1>
                        <div v-for="(item,index) in cart">
                            <ul>
                                <li>
                                    @{{ item . name }}
                                    <button class="btn btn-secondary" v-on:click="decreaseQuantity(item),setLocalStorage()">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    @{{ item . quantity }}
                                    <button class="btn btn-secondary" v-on:click="addQuantity(item),setLocalStorage()">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button class="btn btn-danger"
                                        v-on:click="removeProduct(index),setLocalStorage()">Rimuovi</button>
                                </li>
                            </ul>
                        </div>
                        <span><strong>Totale:</strong>@{{ totalCart }}</span>
                        <button class="btn btn-success">
                            <a class="text-white text-decoration-none" v-on:click="setLocalStorage()"
                                href="{{ route('checkout.create') }}">Procedi con il pagamento</a>
                        </button>
                    </div>
                </div>

            </div>
        @endsection
        {{-- Added the script section for the Vue logic --}}
        @section('script-end')
            <script>
                Vue.config.devtools = true;
                // Initialized a new instance of 'vue'
                const app = new Vue({
                    el: '#app',
                    data: {
                        cart: [],
                    },
                    computed: {
                        totalCart() {
                            let total = 0;
                            for (let i = 0; i < this.cart.length; i++) {
                                const product = this.cart[i];
                                total += product.price * product.quantity;

                            }
                            return total.toFixed(2);
                        }

                    },
                    methods: {
                        // Function to add a new product to cart
                        addProduct(x) {
                            var isInArray = false;
                            if (this.cart.length > 0) {
                                for (i = 0; i < this.cart.length; i++) {
                                    if (x.id == this.cart[i].id) {
                                        isInArray = true;
                                    }
                                }
                            }
                            if (!isInArray) {
                                x.quantity = 1;
                                this.cart.push(x);
                            }

                        },
                        // Function to increase the quantity of the product
                        addQuantity(x) {
                            x.quantity++;

                        },
                        // Function to decrease the quantity of the product
                        decreaseQuantity(x) {
                            x.quantity--;
                            if (x.quantity <= 0) {
                                x.quantity = 1
                            }

                        },
                        // Function to delete the product
                        removeProduct(x) {
                            for (var i = 0; i < this.cart.length; i++) {
                                if (i === x) {
                                    this.cart.splice(i, 1)
                                }
                            }

                        },
                        setLocalStorage() {
                            localStorage.setItem('cart', JSON.stringify(this.cart))
                        },
                    },





                    created() {
                        const x = JSON.parse(localStorage.getItem('cart'));
                        console.log(x);
                        this.cart = x;
                    },



                })
            </script>
        @endsection
