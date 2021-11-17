{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
  <section class="container">
    <h1>Questa è la index dei prodotti </h1>
    <h3 class="mt-5">Prodotti associati all'utente attuale:</h3>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Action</th>
          <th scope="col">
            <button type="button" class="btn btn-primary">
              <a class="text-white text-decoration-none" href="{{ route('admin.products.create') }}">Aggiungi
                un nuovo
                prodotto</a>
            </button>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <th>{{ $product->id }}</th>
            <td>{{ $product->name }}</td>
            <td>
              <button type="button" class="btn btn-primary mr-2">
                <a class="text-white text-decoration-none"
                  href="{{ route('admin.products.show', $product->id) }}">Dettagli</a>
              </button>
              <button type="button" class="btn btn-success">
                <a class="text-white text-decoration-none"
                  href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>
              </button>

              <form action="{{ route('admin.products.destroy', $product->id) }}" method="post"
                class="delete-button d-inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger ml-2">Elimina</button>
              </form>
            </td>
          </tr>
        @endforeach
    </table>
  </section>
@endsection
