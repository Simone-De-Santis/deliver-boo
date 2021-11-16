{{-- Added general layout --}}
@extends('layouts.app')
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
    <nav class="navbar navbar-light bg-light">
      <form class="form-inline mb-4">
        <input v-model.trim='search_bar' @keyup.enter="getRestaurants()" class="form-control mr-sm-2" type="search"
          placeholder="Search" aria-label="Search">
        <button class="btn btn my-2  my-sm-0 search-buttom" type="submit">Search</button>
      </form>
      <select v-model="select" name="" id="">
        <option value="" selected>All</option>
        <option v-for="(selectCategory, index) in selectCategories">
          @{{ selectCategory }}
        </option>
      </select>
    </nav>

    <div class="container">
      <div v-for="restaurant in selectedRestaurants" v-if="isVisible(restaurant.name)">
        @{{ restaurant . activity_name }}
        <div id="carouselExampleIndicators" class="carousel sz-slide" data-type="carousel" data-height="300px"
          data-animation="dragX" data-width="100%">
          {{-- <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" class="active"></li>
            <li data-target="#carouselExampleIndicators"></li>
            <li data-target="#carouselExampleIndicators"></li>
            <li data-target="#carouselExampleIndicators"></li>
            <li data-target="#carouselExampleIndicators"></li>
          </ol> --}}
          {{-- <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/images/logo.jpg" class="d-block h-100 w-auto mx-auto" alt="">
            </div>


            <div class="carousel-item ">
              <img src="/images/Fast Delivery.jpg" class="d-block h-100 w-auto mx-auto" alt="">

            </div>

            <div class="carousel-item ">
              <img src="/images/Urban.jpg" class="d-block h-100 w-auto mx-auto" alt="">

            </div>
            <div class="carousel-item ">
              <img src="/images/Fast Delivery.jpg" class="d-block h-100 w-auto mx-auto" alt="">

            </div>
            <div class="carousel-item ">
              <img src="/images/Urban.jpg" class="d-block h-100 w-auto mx-auto" alt="">

            </div>


          </div> --}}
          <a class="carousel-control-prev carousel-control-btn" href="#carouselExampleIndicators" role="button">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next carousel-control-btn" href="#carouselExampleIndicators" role="button">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        {{-- <div class="carosel carousel slide" data-ride="carousel" id="carouselExampleIndicators">
      <ul v-for="restaurant in restaurants" class=" d-flex carosel-two " style="transform:translateX(0px);">
        <li class="slide  slide-two ">
          <button class="short-cut-title" type="button">
            <div class="" role="presentation">

              <div class=""><span class="">Offerte</span></div>
            </div>
          </button>
        </li>
      </ul>
      <a class="left carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>

      </a>
      <a class="right carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>

      </a>
    </div> --}}
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="/images/fresh.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">@{{ restaurant . activity_name }}</h5>
            <p class="card-text">@{{ restaurant . description }}</p>
            <h1>id @{{ restaurant . id }}</h1>
            <a :href="'/user/'+restaurant.id" class="btn btn-warning">Dettagli</a>
          </div>
        </div>

      </div>
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
        restaurants: [],
        search_bar: '',
        select: '',
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
