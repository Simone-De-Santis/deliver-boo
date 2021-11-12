@extends('layouts.app');
@section('cdns')
  <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
    integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
    crossorigin='anonymous'></script>
  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection

@section('content')
  <div id="app">
    <section class="container">
      <nav class="navbar navbar-light bg-light">
        <form class="form-inline">
          <input v-model='search_bar' @keyup.enter="getRestaurants()" class="form-control mr-sm-2" type="search"
            placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </nav>
      <div v-for="restaurant in restaurants">
        @{{ restaurant . activity_name }}
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">@{{ restaurant . activity_name }}</h5>
            <p class="card-text">@{{ restaurant . description }}</p>
            <h1>id @{{ restaurant . id }}</h1>
            <a href="" class="btn btn-primary">Dettagli</a>
          </div>
        </div>
        <hr>
      </div>
  </div>



  </section>
@endsection

@section('script-end')
  <script>
    Vue.config.devtools = true;

    console.log('vue', Vue)
    const app = new Vue({
      el: '#app',
      data: {
        restaurants: [],
        search_bar: '',

      },
      methods: {
        getRestaurants() {
          axios.get('http://127.0.0.1:8000/api/users').then((res) => {
            this.restaurants = res.data
          })
        }

      },
      created() {
        this.getRestaurants();
      },

    })
  </script>
@endsection
