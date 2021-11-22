<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>DeliverBoo</title>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  {{-- Fontawesome cdn --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  @yield('sass')
  @yield('cdns')
  @yield('script-header')
</head>

<body>
  <div id="app">

    <main>
      <div id="guest-nav">
        <nav class="navbar navbar-expand-md navbar-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
              @yield('img-logo')
              <strong>DeliverBoo</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
              </ul>
              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                  <li class="nav-item mr-3">
                    <a class="nav-link" href="{{ route('login') }}">Accedi</a>
                  </li>
                  @if (Route::has('register'))
                    <li class="nav-item">
                      <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                    </li>
                  @endif
                @else
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }}
                    </a>
                    <div>
                      {{-- Added item to the product list --}}
                      {{-- </div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a href="{{ route('admin.products') }}">My products</a>
                                        </div> --}}
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.home') }}">
                          Il mio ristorante
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.products.index') }}">
                          Prodotti
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.ingredients.index') }}">
                          Ingredienti
                        </a>
                        <a class="dropdown-item" href="{{ route('admin.orders.index') }}">
                          Ordini
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                                                                                                                                                                                                                               document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </div>
                  </li>
                @endguest
              </ul>
            </div>
          </div>
        </nav>
      </div>


      <div class="min-vh-100">

        @yield('content')
      </div>

    </main>



    {{-- footer --}}
    <footer class="container-fluid primary-color-bg mt-4" id="footer">

      <div class="container pt-5">


        <div class="row row-cols-1 row-cols-md-4 ">

          <div class="col mb-4 card-group ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Scopri DeliverBoo</h5>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Investitori </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Chi siamo </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Ristoranti </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Altro </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Pressroom </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Il nostro blog </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Programmazione </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Design </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Lavora con noi </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Diventa nostro partner </a></small></p>
              </div>
            </div>
          </div>
          <div class="col mb-4 card-group ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Note legali</h5>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Termini & condizioni </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Informativa sulla privacy </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Cookies </a></small></p>
              </div>
            </div>
          </div>
          <div class="col mb-4 card-group ">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Aiuto</h5>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Contatti </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      FAQ </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Tipi di cucina </a></small></p>
                <p class="card-text "> <small class=""> <a href="#" class="">
                      Maooa del sito </a></small></p>
              </div>
            </div>
          </div>
          <div class="col mb-4 card-group ">
            <div class="card">
              <div class="card-body">
                <h3 class="card-title">Porta DeliverBoo con te </h3>
                <p class="card-text "> <small class=""> <a href="#" class="">
                    </a></small></p>
                <a href="#">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/3/3c/Download_on_the_App_Store_Badge.svg"
                    class="card-img-top" alt="...">
                </a>
                <a href="#">


                  <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Google_Play_Store_badge_IT.svg"
                    class="card-img-top" alt="...">
                </a>

              </div>
            </div>
          </div>
        </div>


      </div>


    </footer>
  </div>
  @yield('script-end')
</body>

</html>
