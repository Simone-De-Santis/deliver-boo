{{-- Added general layout --}}
@extends('layouts.app')
@section('img-logo')
  <img class="logo " src="/images/Logo-nav.png" alt="logo-black">

  <img class="logo " src="/images/Logo-nav.png" alt="logo-black">

@endsection

{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
    integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
    crossorigin='anonymous'></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with all restaurant --}}
@section('content')
  <div id="app">

    <div id="jumbotron">
      <div id="carouselExampleControls " class="carousel slide d-none d-md-block" data-ride="carousel">
        <div class="carousel-inner " id="carousel">
          <div class="carousel-item active">
            <img class="d-block w-100  " src="/images/img1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class=" d-block w-100  " src="/images/img5.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100  " src="/images/img3.jpg" alt="Third slide">
          </div>
        </div>
      </div>
      {{-- barra centrale --}}
      <div class="search-bar d-flex justify-content-between justify-content-md-center align-items-center mt-4 container">
        <form class="form-inline ml-2 mr-3">
          <div class="row">
            <div class="col-6">
              <input v-model.trim='search_bar' @keyup.enter="getRestaurants()" class="form-control mr-sm-2 w-100"
                type="search" placeholder="Search" aria-label="Search">
            </div>
            <div class="col-3"><button class="btn btn search-buttom" type="submit">Search</button>
            </div>
          </div>
        </form>
        <div class="select-filter mr-2">
          <select class="form-select rounded py-1" v-model="select" name="" id="">
            <option value="" selected>All</option>
            <option v-for="(selectCategory, index) in selectCategories">
              @{{ selectCategory }}
            </option>
          </select>
        </div>
      </div>

    </div>

    <section class="container mt-5 mt-md-0">



      <section class="container" id="restaurants">
        <h2 class="text-center mb-5  mt-md-0">LA NOSTRA SELEZIONE</h2>


        <div class="container d-flex align-items-center flex-wrap">
          <div class="row">
            <div v-for="restaurant in selectedRestaurants" v-if="isVisible(restaurant.name)"
              class="col-md-4 col-sm-12 mb-3">

              <div class="card bg-dark text-white">
                <a :href="'/user/'+restaurant.id" class="text-white">
                  <img src="/images/fresh.jpg" alt="..." class="card-img" alt="...">
                  <div class="card-img-overlay">
                    <h5 class="card-title">@{{ restaurant . activity_name }}</h5>
                    <p class="card-text">inserire inizio descrizione</p>
                    <p class="card-text">se vogliamo un footer</p>
                  </div>
                </a>
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
    Vue.config.devtools = true;
    // Initialized a new instance of 'vue'
    const app = new Vue({
      el: '#app',
      data: {
        restaurants: [],
        search_bar: '',
        select: '',
        imageLogin: 0,
      },
      computed: {
        selectCategories() {
          var selectCategories = [];
          for (var i = 0; i < this.restaurants.length; i++) {
            // console.log(this.restaurants[i]);
            var restaurant = this.restaurants[i];
            // console.log(restaurant.categories[0])
            for (let i = 0; i < restaurant.categories.length; i++) {
              const category = restaurant.categories[i];
              if (!selectCategories.includes(category.name)) {
                selectCategories.push(category.name);
              }
            }
          }
          // console.log(selectCategories);
          return selectCategories;
        },
        selectedRestaurants() {
          let selectedRestaurants = [];
          const select = this.select;
          if (select !== "") {
            for (var i = 0; i < this.restaurants.length; i++) {
              var restaurant = this.restaurants[i];
              for (let i = 0; i < restaurant.categories.length; i++) {
                const category = restaurant.categories[i];
                if (category.name == select) {
                  selectedRestaurants.push(restaurant);
                }
              }
            }

          } else selectedRestaurants = this.restaurants;
          return selectedRestaurants;
        }
      },
      methods: {
        // Function that returns all restaurants
        getRestaurants() {
          axios.get('http://127.0.0.1:8000/api/users').then((res) => {
            this.restaurants = res.data
          })
        },
        isVisible(resturant_name) {
          var result = false;
          if (this.search_bar == "") {
            result = true;
          } else {
            result = resturant_name.trim().toLowerCase().includes(this.search_bar.toLowerCase());
          }
          return result
        },
      },
      created() {
        this.getRestaurants();
      },
    })
  </script>
@endsection
