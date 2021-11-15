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
        <section class="container">
            <nav class="navbar navbar-light bg-light">
                <form class="form-inline">
                    <input v-model='search_bar' @keyup.enter="getRestaurants()" class="form-control mr-sm-2" type="search"
                        placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <select v-model="select" name="" id="">
                    <option value="" selected>All</option>
                    <option v-for="(selectCategory, index) in selectCategories">
                        @{{ selectCategory }}
                    </option>
                </select>
            </nav>
            <div v-for="restaurant in selectedRestaurants">
                @{{ restaurant . activity_name }}
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">@{{ restaurant . activity_name }}</h5>
                        <p class="card-text">@{{ restaurant . description }}</p>
                        <h1>id @{{ restaurant . id }}</h1>
                        <a :href="'/user/'+restaurant.id" class="btn btn-primary">Dettagli</a>
                    </div>
                </div>
                <hr>
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
                        console.log(selectedRestaurants);

                        for (var i = 0; i < this.restaurants.length; i++) {
                            // console.log(this.restaurants[i]);
                            var restaurant = this.restaurants[i];
                            // console.log(restaurant.categories[0])
                            for (let i = 0; i < restaurant.categories.length; i++) {
                                const category = restaurant.categories[i];
                                if (category.name == select) {
                                    // console.log('nome categoria:', category.name);
                                    // console.log('select:', select);
                                    // console.log(restaurant);
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
                }
            },
            created() {
                this.getRestaurants();
            },
        })
    </script>
@endsection
