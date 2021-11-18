@extends('layouts.app')
{{-- @section('sass')
<link href="{{ resource_path('sass/_registerform.scss') }}" rel="stylesheet">
@endsection --}}
@section('img-logo', "/images/logo-white.png")

@section('content')
<section id="register-section">
    <div class="form-register">



        <form id="form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div class="col-md-12 card-header card-header-login">Rigistra il tuo ristorante</div>
            <div class="card-body">
                <div class="form-group row shadow-lg   rounded">
                    {{-- Name --}}
                    <div class="col-md-6 mt-2">
                        <label for="name" class="text-label col-form-label text-md-right">Nome</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                            name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- Activity name --}}
                    <div class="col-md-6 mt-2">
                        <label for="activity_name" class="text-label col-form-label text-md-right">Nome attività</label>
                        <input id="activity_name" type="text"
                            class="form-control @error('activity_name') is-invalid @enderror" name="activity_name"
                            value="{{ old('activity_name') }}">
                        @error('activity_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    {{-- Province --}}
                    <div class="col-md-4">
                        <label for="province" class="text-label col-form-label text-md-right">Provincia</label>
                        <input id="province" type="text" class="form-control @error('province') is-invalid @enderror"
                            name="province" value="{{ old('province') }}">
                        @error('province')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- Municipality --}}
                    <div class="col-md-4">
                        <label for="municipality" class="text-label col-form-label text-md-right">Comune</label>
                        <input id="municipality" type="text"
                            class="form-control @error('municipality') is-invalid @enderror" name="municipality"
                            value="{{ old('municipality') }}">
                        @error('municipality')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- City --}}
                    <div class="col-md-4">
                        <label for="city" class="text-label col-form-label text-md-right">Città</label>
                        <input id="city" type="text" class="form-control @error('city') is-invalid @enderror"
                            name="city" value="{{ old('city') }}">
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    {{-- Address --}}
                    <div class="col-md-4">
                        <label for="address" class="text-label col-form-label text-md-right">Indirizzo</label>
                        <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                            name="address" value="{{ old('address') }}">
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- Zip --}}
                    <div class="col-md-4">
                        <label for="zip" class="text-label col-form-label text-md-right">Cap</label>
                        <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip"
                            value="{{ old('zip') }}">
                        @error('zip')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- longitude --}}
                    <div class="col-md-2">
                        <label for="longitude" class="text-label  col-form-label text-md-right">Longitudine</label>
                        <input id="longitude" type="text" class="form-control @error('longitude') is-invalid @enderror"
                            name="longitude" value="{{ old('longitude') }}">
                        @error('longitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- latitude --}}
                    <div class="col-md-2">
                        <label for="latitude" class="text-label col-form-label text-md-right">Latitudine</label>
                        <input id="latitude" type="text" class="form-control @error('latitude') is-invalid @enderror"
                            name="latitude" value="{{ old('latitude') }}">
                        @error('latitude')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    {{-- Telephone --}}
                    <div class="col-md-6">
                        <label for="telephone" class="text-label col-form-label text-md-right">Telefono</label>
                        <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror"
                            name="telephone" value="{{ old('telephone') }}">
                        @error('telephone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- Vat --}}
                    <div class="col-md-6">
                        <label for="vat" class="text-label col-form-label text-md-right">Partita IVA</label>
                        <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror" name="vat"
                            value="{{ old('vat') }}">
                        @error('vat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </div>

                <div class="form-group row align-items-center">
                    {{-- Url da cambiare in upload image --}}
                    <div class="col-md-6">
                        <label for="url" class="text-label col-form-label text-md-right">Immagine ristorante</label>
                        <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url"
                            value="{{ old('url') }}">
                        @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-md-6 ">
                        <!-- Button trigger modal -->
                        <button id="category-btn" type="button" class="form-control  col-form-label" data-toggle="modal"
                            data-target="#staticBackdrop">
                            Seleziona una categoria
                        </button>
                        <!-- Modal -->
                        <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Seleziona una categoria</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            @foreach ($categories as $category)
                                            <div class="col-md-6">
                                                <input type="checkbox" id="category-{{ $category->id }}"
                                                    value="{{ $category->id }}" name="categories[]">
                                                <label for="category-{{ $category->id }}"
                                                    class=" col-form-label text-md-right">{{ $category->name }}
                                                </label>


                                            </div>

                                            @endforeach

                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Chiudi</button>
                                        <button type="button" class="btn btn-primary"
                                            data-dismiss="modal">Salva</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    {{-- Description --}}
                    <div class="col-md-12">
                        <label for="description" class="text-label col-form-label text-md-right">Descrizione
                        </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                            rows="4" name="description">{{ old('description') }}
                                    </textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    {{-- email --}}
                    <div class="col-md-4">
                        <label for="email" class="text-label  col-form-label text-md-right">E-mail</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    {{-- password --}}
                    <div class="col-md-4">
                        <label for="password" class="text-label  col-form-label text-md-right">{{ __('Password')
                            }}</label>

                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </div>

                    {{-- conferma password --}}
                    <div class="col-md-4">
                        <label for="password-confirm" class="text-label col-form-label text-md-right">Conferma
                            password</label>


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password">


                    </div>

                </div>


                <div class="form-group row ">
                    <div class="col-md-12  ">
                        <button type="submit" class="btn-register btn w-100">
                            Registrati
                        </button>
                    </div>
                </div>
        </form>
    </div>
    </div>
</section>

@endsection