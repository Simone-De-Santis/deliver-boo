@extends('layouts.app')
@section('img-logo')
  <img class="logo " src="/images/Logo-nav.png" alt="logo-black">
@endsection
{{-- Added cdn of 'vue' --}}
@section('cdns')
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with selected restaurant products --}}
@section('content')
  {{-- Id app to add link with Vue --}}
  <div id="app">
    <section class="container my-5 pt-4" id="restaurant">
      <h1 class="text-center my-md-3"> {{ $user->activity_name }} </h1>
      <div id="products-section" class="row justify-content-center">
        {{-- Products section --}}
        <div class="col-12 col-md-6 d-flex flex-column align-items-center order-5 order-md-0">
          {{-- Cycle foreach to print all the products of the restaurant --}}
          @foreach ($user->products as $product)
            <div class="card mb-3 shadow-lg" style="width: 18rem;">
              @if ($product->url != '#')
                <img class=" card-img-top" src="{{ $product->url }}" alt="immagine-prodotto">
              @endif
              <div class="card-body">
                <h5 class="card-title text-center">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <div class="d-flex align-items-center mb-3">
                  <span>€</span>
                  <p class="card-text product-price">{{ $product->price }}</p>
                </div>
                <div class="d-flex justify-content-between">
                  <a href="/" class="btn btn-secondary">Indietro</a>
                  <button class=" btn btn-dark primary-color-bg"
                    v-on:click=" setModal(), addProduct({{ $product }}),setLocalStorage()">Aggiungi
                    al
                    carrello</button>
                </div>
              </div>
            </div>
          @endforeach
        </div>
        {{-- Cart section --}}
        <div class="col-12 col-md-6 d-flex justify-content-center order-1">
          <div class="w-100 h-100 d-flex justify-content-center" v-if="cart.length > 0">
            <div class="card shadow-lg mb-5" id="cart-section" v-if="cart[0].user_id == {{ $user->id }}">
              <div class="card-header primary-color-bg text-white">
                <h3 class="text-center my-1"><i class="fas fa-shopping-cart text-center"></i></h3>
              </div>
              <div class="cart-content p-3">
                <ul>
                  <div v-for="(item,index) in cart">
                    <li class="mb-2">
                      <div class="row">
                        <div class="col-7"><span class="product-name">@{{ item . name }}</span></div>
                        <div class="col-5 d-flex align-items-center justify-content-end">
                          <button class="btn btn-sm btn-secondary ml-3"
                            v-on:click="decreaseQuantity(item),setLocalStorage()">
                            <i class="fas fa-minus"></i>
                          </button>
                          <span class="mx-1">@{{ item . quantity }}</span>
                          <button class="btn btn-sm btn-secondary" v-on:click="addQuantity(item),setLocalStorage()">
                            <i class="fas fa-plus"></i>
                          </button>
                          <button class="btn btn-sm btn-danger ml-1"
                            v-on:click="removeProduct(index),setLocalStorage()"><i class="fas fa-trash-alt"></i></button>
                        </div>
                        <hr class="w-100">
                      </div>
                    </li>
                  </div>
                </ul>
                <div class="d-flex justify-content-center mb-2">
                  <span class="mx-1">Totale:</span>
                  <span class="mx-1">@{{ totalCart }}€ </span>
                </div>
                <div class="text-center">
                  <button class="btn primary-color-bg rounded-pill">
                    <a class="text-white text-decoration-none" v-on:click="setLocalStorage()"
                      href="{{ route('payment.index') }}">Procedi con il pagamento</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- bottone scroll --}}
        <div id="scroll-button" class="d-none">
          <a href="#" class="text-decoration-none">
            <i class="fas fa-shopping-cart text-center text-white"></i>
          </a>
        </div>
        {{-- modal --}}
        <!-- Button trigger modal -->

        <!-- Modal -->
        <div v-if='cart.length > 0'>
          <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h2> Hai un carrelo aperto nel ristorante "@{{ cart[0] . name }}" <br> Vuoi
                    continuare con il
                    vecchio ordine o vuoi proseguire con il corrente ? </h2>
                </div>
                <div class="modal-footer">
                  <a v-on:click="removeLast" :href="`/user/${cart[0].user_id}`" class="btn btn-secondary">vai al
                    ristorante del
                    carrello</a>
                  <button type="button" class="btn primary-color-bg text-white" v-on:click=" removeCart()"
                    data-dismiss="modal">svuota il
                    carrello </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
{{-- Added the script section for the Vue logic --}}
@section('script-end')
  <script>
    window.addEventListener('scroll', () => {
      const scrollButton = document.getElementById('scroll-button');
      if (window.scrollY > 0) {
        scrollButton.classList.remove('d-none');
      } else {
        scrollButton.classList.add('d-none');
      }
    }, true); //^SHOW THE BOTTOM RIGHT BUTTON ONLY WHEN YOU SCROLL THE PAGE.

    Vue.config.devtools = true;
    // Initialized a new instance of 'vue'
    const app = new Vue({
      el: '#app',
      data: {
        cart: [],
        total: 0,
      },
      computed: {
        totalCart() {
          let total = 0;
          for (let i = 0; i < this.cart.length; i++) {
            const product = this.cart[i];
            total += product.price * product.quantity;

          }
          this.total = total.toFixed(2);
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
            this.total = this.total + x.price.toFixed(2);
          }

        },
        // Function to increase the quantity of the product
        addQuantity(x) {
          x.quantity++;
          this.total = this.total + parseFloat(x.price.toFixed(2));

        },
        // Function to decrease the quantity of the product
        decreaseQuantity(x) {
          x.quantity--;
          if (x.quantity <= 0) {
            x.quantity = 1
          } else {
            this.total -= x.price.toFixed(2);
          }

        },
        // Function to delete the product
        removeProduct(x) {
          for (var i = 0; i < this.cart.length; i++) {
            if (i === x) {
              this.cart.splice(i, 1)
              this.total -= x.price;
            }
            if (!this.total) this.total = 0;
          }

        },
        removeLast() {
          cart = JSON.parse(localStorage.getItem('cart'));
          cart.splice((cart.length - 1), 1);
          localStorage.setItem('cart', JSON.stringify(cart));
          /* this.total -= x.price; */
        },
        setLocalStorage() {
          //Setto il carrello nello storage
          localStorage.setItem('cart', JSON.stringify(this.cart));

          //Setto il totale nello storage
          localStorage.setItem('total', JSON.stringify(this.total));
        },
        removeCart() {
          localStorage.clear();
          this.cart = [];
          this.total = 0;

          localStorage.setItem('cart', JSON.stringify([]));
          localStorage.setItem('total', JSON.stringify(this.total));


        },
        setModal() {
          const thisUserCart = JSON.parse(localStorage.getItem('cart'));
          if (thisUserCart && thisUserCart.length > 0) {
            console.log('entrato')
            if (thisUserCart[0].user_id != {{ $user->id }}) {
              $('#staticBackdrop').modal('toggle')
            }
          }
        },


      },
      created() {
        let x = JSON.parse(localStorage.getItem('cart'));
        let total = localStorage.getItem('total');
        if (!x) {
          x = [];
          total = 0;
        }
        this.cart = x;
        this.total = parseFloat(total);
      },
    })
  </script>
@endsection
