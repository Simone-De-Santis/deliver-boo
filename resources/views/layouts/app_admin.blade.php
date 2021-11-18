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
  {{-- CDN for stato statistics graph --}}
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  @yield('script-header')
</head>

<body>
  <div id="app" class="admin-bck">
    <div id="content_admin">


      <div id="admin-nav">


        <nav class="navbar navbar-expand-lg navbar-light ">

          <a class="navbar-brand" href="{{ url('/') }}">
            <img class="logo" src="/images/Logo-nav.png" alt="">
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
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
                @endif
              @else
                <li class="nav-item dropdown">

                  <div class="d-flex">
                    {{-- Added item to the product list --}}
                    {{-- </div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a href="{{ route('admin.products') }}">My products</a>
                                    </div> --}}
                    {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                    <a class="dropdown-item btn  " href="{{ route('admin.home') }}">
                      Il mio ristorante
                    </a>
                    <a class="dropdown-item btn btn-outline-secondary" href="{{ route('admin.products.index') }}">
                      Prodotti
                    </a>
                    <a class="dropdown-item btn btn-outline-success" href="{{ route('admin.ingredients.index') }}">
                      Ingredienti
                    </a>
                    <a class="dropdown-item btn btn-outline-warning" href="{{ route('admin.orders.index') }}">
                      Ordini
                    </a>
                    <a class="dropdown-item btn btn-outline-danger" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                    {{-- </div> --}}
                </li>
              @endguest
            </ul>
          </div>

        </nav>
      </div>

      <main class="py-4">
        @yield('content')
      </main>
    </div>
  </div>
  @yield('script-end')
</body>

</html>
