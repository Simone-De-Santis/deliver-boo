@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Activity name --}}
              <div class="form-group row">
                <label for="activity_name"
                  class="col-md-4 col-form-label text-md-right">{{ __('activity_name') }}</label>
                <div class="col-md-6">
                  <input id="activity_name" type="text" class="form-control @error('activity_name') is-invalid @enderror"
                    name="activity_name" value="{{ old('activity_name') }}">
                  @error('activity_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Province --}}
              <div class="form-group row">
                <label for="province" class="col-md-4 col-form-label text-md-right">{{ __('province') }}</label>
                <div class="col-md-6">
                  <input id="province" type="text" class="form-control @error('province') is-invalid @enderror"
                    name="province" value="{{ old('province') }}">
                  @error('province')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Municipality --}}
              <div class="form-group row">
                <label for="municipality"
                  class="col-md-4 col-form-label text-md-right">{{ __('municipality') }}</label>
                <div class="col-md-6">
                  <input id="municipality" type="text" class="form-control @error('municipality') is-invalid @enderror"
                    name="municipality" value="{{ old('municipality') }}">
                  @error('municipality')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Address --}}
              <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('address') }}</label>
                <div class="col-md-6">
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}">
                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- City --}}
              <div class="form-group row">
                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('city') }}</label>
                <div class="col-md-6">
                  <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                    value="{{ old('city') }}">
                  @error('city')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Zip --}}
              <div class="form-group row">
                <label for="zip" class="col-md-4 col-form-label text-md-right">{{ __('zip') }}</label>
                <div class="col-md-6">
                  <input id="zip" type="text" class="form-control @error('zip') is-invalid @enderror" name="zip"
                    value="{{ old('zip') }}">
                  @error('zip')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Vat --}}
              <div class="form-group row">
                <label for="vat" class="col-md-4 col-form-label text-md-right">{{ __('vat') }}</label>
                <div class="col-md-6">
                  <input id="vat" type="text" class="form-control @error('vat') is-invalid @enderror" name="vat"
                    value="{{ old('vat') }}">
                  @error('vat')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Telephone --}}
              <div class="form-group row">
                <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('telephone') }}</label>
                <div class="col-md-6">
                  <input id="telephone" type="text" class="form-control @error('telephone') is-invalid @enderror"
                    name="telephone" value="{{ old('telephone') }}">
                  @error('telephone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Description --}}
              <div class="form-group row">
                <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('description') }}</label>
                <div class="col-md-6">
                  <textarea class="form-control @error('description') is-invalid @enderror" id="description" rows="4"
                    name="description">{{ old('description') }}</textarea>
                  @error('description')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- Url da cambiare in upload image --}}
              <div class="form-group row">
                <label for="url" class="col-md-4 col-form-label text-md-right">{{ __('url') }}</label>
                <div class="col-md-6">
                  <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url"
                    value="{{ old('url') }}">
                  @error('url')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              {{-- <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
              </div> --}}



              {{-- longitude --}}
              <div class="form-group row">
                <label for="longitude" class="col-md-4 col-form-label text-md-right">{{ __('longitude') }}</label>
                <div class="col-md-6">
                  <input id="longitude" type="text" class="form-control @error('longitude') is-invalid @enderror"
                    name="longitude" value="{{ old('longitude') }}">
                  @error('longitude')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>
              {{-- latitude --}}
              <div class="form-group row">
                <label for="latitude" class="col-md-4 col-form-label text-md-right">{{ __('latitude') }}</label>
                <div class="col-md-6">
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
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="form-group row">
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    required autocomplete="new-password">
                </div>
              </div>

              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
