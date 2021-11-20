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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            {{-- <div class="select-filter">
          <select class="form-select rounded py-1" v-model="select" name="" id="">
            <option value="" selected>All</option>
            <option v-for="(selectCategory, index) in selectCategories">
              @{{ selectCategory }}
            </option>
          </select>
        </div> --}}
            <div class="input-group container search-restaurant ">
                <input type="search" v-model.trim='search_bar' @keyup.enter="getRestaurants()"
                    class="form-control text-search shadow" aria-label="Text input with dropdown button"
                    placeholder="Cerca qui il tuo ristorante..">
                <div class="input-group-append">
                    <select class="shadow btn btn-outline-light dropdown-toggle" data-toggle="dropdown"
                        v-model="select">Categorie
                        <option value="" selected>Tutte le categorie</option>
                        <div role="separator" class="dropdown-divider"></div>
                        <option class="dropdown-item" v-for="(selectCategory, index) in selectCategories">
                            @{{ selectCategory }}
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <section class="container mt-5 mt-md-0">
        <section class="container" id="restaurants">
            <h2 class="text-center mb-5  mt-md-0">LA NOSTRA SELEZIONE</h2>
            <div class="row justify-content-center">
                {{-- PAGINAZIONE TOP --}}
                <div class="col-12 d-flex justify-content-center my-4">
                    <button type="button" class="btn btn-outline-primary" v-on:click="currentPage = index"
                        v-for="(x, index) in Math.ceil(totalRestaurants / itemsPerPage)">@{{ index + 1 }}</button>
                </div>
                <div class="card shadow col-12 col-md-3" v-for="(restaurant, index) in selectedRestaurants"
                    v-if="isVisible(restaurant.name) && index >= (currentPage * itemsPerPage) && index < (currentPage * itemsPerPage) + itemsPerPage">
                    <img src="https://www.panoramachef.it/wp-content/uploads/2019/11/men%C3%B9.jpg"
                        class="card-img-top img-restaurant" alt="...">
                    <div class="card-body">
                        <h5 class="card-title name">@{{ restaurant . activity_name }}</h5>
                        <div class="row d-flex justify-content-between align-items-center">
                            <p class="card-text category">@{{ restaurant . categories[0] . name }}</p>
                            <a class="arrow-product" :href="'/user/'+restaurant.id">
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                {{-- PAGINAZIONE BOTTOM --}}
                <div class="col-12 d-flex justify-content-center my-4">
                    <button type="button" class="btn btn-outline-primary" v-on:click="currentPage = index"
                        v-for="(x, index) in Math.ceil(totalRestaurants / itemsPerPage)">@{{ index + 1 }}</button>
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
                    currentPage: 0,
                    itemsPerPage: 12,
                    totalRestaurants: 0,
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
                        this.totalRestaurants = selectedRestaurants.length;
                        this.currentPage = 0;
                        return selectedRestaurants;
                    }
                },
                methods: {
                    // Function that returns all restaurants
                    getRestaurants() {
                        axios.get('http://127.0.0.1:8000/api/users').then((res) => {
                            this.restaurants = res.data;
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
