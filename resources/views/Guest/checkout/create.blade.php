{{-- Added general layout --}}

@extends('layouts.app')
@section('img-logo')
    <img class="logo " src="/images/Logo-nav.png" alt="logo-black">
@endsection
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
        integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
        crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with order --}}
@section('content')
    <section class="container mt-5">

        <section class="row pt-5">

            <section id="checkout-page" class="col-12 col-md-6">
                <h1>Inserisci i tuoi dati</h1>
                @include('includes.guest.checkout.form')

            </section>
            <section class="col-12 col-md-6 p-5">

                <div id="app" class="info-cart" class="">

                    <div v-for="(item,index) in cart">
                        <h2>Carrello</h2>

                        <ul style="list-style-type: none" class="p-0">
                            <li>
                                @{{ item . name }}

                            </li>
                            <li>Quantità: @{{ item . quantity }}</li>
                            <li>Prezzo: € @{{ item . price }}</li>

                        </ul>
                    </div>
                    <h1>Totale: @{{ totalPrice }}</h1>
                </div>
            </section>
        </section>
    </section>
@endsection

@section('script-end')
    <script>
        Vue.config.devtools = true;
        console.log('vue', Vue)
        const app = new Vue({
            el: '#app',
            data: {
                cart: [],
                totalPrice: 0,
                arrayProductIds: [],
                arrayProductsQuantity: [],
                transactionId: "",
            },
            methods: {
                getStorage() {
                    this.cart = JSON.parse(localStorage.getItem('cart'));
                },
                getArrayStorage() {
                    let reducedCart = [];
                    const cart = JSON.parse(localStorage.getItem('cart'));
                    for (let i = 0; i < cart.length; i++) {
                        num = cart[i].id;
                        this.arrayProductIds.push(num);

                        quant = cart[i].quantity;
                        this.arrayProductsQuantity.push(quant);
                    }
                    /* this.arrayCart = localStorage.getItem('cart'); */

                },
                getTotalPrice() {
                    let total = 0;

                    for (var i = 0; i < this.cart.length; i++) {
                        total += this.cart[i].price * this.cart[i].quantity;
                    }
                    return this.totalPrice = total.toFixed(2);
                },
                removeCart() {
                    localStorage.clear();
                    this.cart = [];
                    this.total = 0;

                    localStorage.setItem('cart', JSON.stringify([]));
                    localStorage.setItem('total', JSON.stringify(this.total));


                },
            },
            created() {
                this.getStorage(),
                    this.getTotalPrice(),
                    this.getArrayStorage()
                /* this.transactionId = $transaction.id; */
            }

        })
    </script>
@endsection
