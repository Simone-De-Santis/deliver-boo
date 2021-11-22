{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
    <section id="ingredients-list" class="container">
        <h1 class="d-flex">Lista ingredienti </h1>
        {{-- <button type="button" class="btn " id="buttom" >
    <a class="text-white text-decoration-none" href="{{ route('admin.ingredients.create') }}">Aggiungi un nuovo
      ingrediente</a>
  </button> --}}
        <hr>
        <div class="row  ingredients-table">
            <div class="col-md-4">
                <h2>Carni rosse</h2>
                <ul class="ingredient-item container-fluid ">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Carni rosse')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Carni bianche</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Carni bianche')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Cereali e derivati</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Cereali e derivati')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Crostacei e molluschi</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Crostacei e molluschi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Additivi alimentari</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Additivi alimentari')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Erbe aromatiche</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Erbe aromatiche')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Farine</h2>
                <ul class="ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Farine')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Formaggi</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Formaggi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Funghi e tuberi</h2>
                <ul class=" ingredient-item container-fluid">
                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Funghi e tuberi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Latte e derivati</h2>
                <ul class=" ingredient-item container-fluid">
                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Latte e derivati')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Latticini</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Latticini')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Legumi</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Legumi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Oli e condimenti</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Oli e condimenti')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Ortaggi</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Ortaggi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Pasta</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Pasta')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Pesce</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Pesce')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Pesce azzurro</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Pesce azzurro')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Prodotti da forno</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Prodotti da forno')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Salumi</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Salumi')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Semi e germogli</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Semi e germogli')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-4">
                <h2>Spezie</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Spezie')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Uova</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Uova')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Verdure</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Verdure')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

            <div class="col-md-4">
                <h2>Prodotti alimentari</h2>
                <ul class=" ingredient-item container-fluid">

                    @foreach ($ingredients as $ingredient)
                        @if ($ingredient->classification == 'Prodotti alimentari')
                            <li>
                                <a
                                    href="{{ route('admin.ingredients.show', $ingredient->id) }}">{{ $ingredient->name }}</a>
                            </li>
                            <hr>
                        @endif
                    @endforeach
                </ul>
            </div>

        </div>

    </section>
@endsection
