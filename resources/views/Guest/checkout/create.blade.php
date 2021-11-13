{{-- Added general layout  --}}
@extends('layouts.app')
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
    integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
    crossorigin='anonymous'></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with order --}}
@section('content')
  <section class="container">
    <div class="row">
      <div id="checkout-page" class="col-6">
        <h1>Pagina carrello/ordine</h1>
        @include('includes.guest.checkout.form')
      </div>
      <div class="col-6">
        Prodotti
        <div id="app">
          <div v-for="(item,index) in cart">
            <ul>
              <li>
                @{{ item . name }}
                @{{ item . quantity }}
                @{{ item . price }}
              </li>
            </ul>
          </div>
          <h1>@{{ totalPrice }}</h1>
        </div>
      </div>
    </div>
  </section>
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
        totalPrice: 0,
        pippo: [
          "saluto", "ciao"
        ],
      },
      methods: {
        getStorage() {
          this.cart = JSON.parse(localStorage.getItem('cart'));
        },
        getTotalPrice() {
          let total = 0;
          for (var i = 0; i < this.cart.length; i++) {
            total += this.cart[i].price * this.cart[i].quantity;
          }
          return this.totalPrice = total.toFixed(2);
        },
      },
      created() {
        this.getStorage(),
          this.getTotalPrice()
      }
    })
  </script>
@endsection
