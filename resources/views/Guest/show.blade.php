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

      <h1>Siamo nella lista dei prodotti del ristorante {{ $user->id }} </h1>
      <section class="row">

        <section class="col-6">

          @foreach ($user->products as $product)
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('storage/' . $product->url) }}" alt="immagine-prodotto">
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <h5 class="card-title">{{ $product->id }}</h5>

                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text">€ {{ $product->price }}</p>
                <a href="/" class="btn btn-primary">Index guest</a>
                <button class="btn btn-warning" v-on:click="addProduct({{ $product }})">add in cart</button>
              </div>
            </div>
          @endforeach
        </section>
        <section class="col-6">
          <h1>carrello</h1>
          <div v-for="(item,index) in cart">
            <ul>
              <li>
                @{{ item . name }}
                <button class="btn btn-warning" v-on:click="decreaseQuantity(item)">add quantity</button>

                @{{ item . quantity }}
                <button class="btn btn-warning" v-on:click="addQuantity(item)">add quantity</button>

                <button class="btn btn-danger" v-on:click="removeProduct(index)">remove</button>



              </li>
            </ul>
          </div>
          <button class="btn btn-success" v-on:click="">vai al pagamento </button>



        </section>

      </section>

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
        cart: [],
      },
      methods: {
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
        addQuantity(x) {
          x.quantity++;
        },
        decreaseQuantity(x) {
          x.quantity--;
          if (x.quantity <= 0) {
            x.quantity = 1
          }

        },
        removeProduct(x) {
          for (var i = 0; i < this.cart.length; i++) {
            if (i === x) {
              this.cart.splice(i, 1)
            }
          }
        }



      }

    })
  </script>
@endsection
