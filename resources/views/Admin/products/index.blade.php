{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
<section class="container products-section ">

  <h1 class="">I tuoi prodotti:</h1>
  
    <table class="table  order-table">
      <thead>
        <tr class="">
         
          <th></th>
          <th></th>
          <th class=" text-left" scope="col">
            

            <a class="text-white text-decoration-none btn mr-2" id="buttom"
              href="{{ route('admin.products.create') }}">Aggiungi un nuovo
              prodotto</a>

          </th>
          
           
        </tr>
      </thead>
      <hr>
      <thead>
        <tr>

          <th scope="col">
            <h4>Id</h4>
          </th>
          <th scope="col">
            <h4>Tipo di prodotto</h4>
          </th>
          <th scope="col">
            <h4>Attività</h4>
          </th>

        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr scope="row">
          <th scope="col" class="info-product">{{ $product->id }}</th>
          <td scope="col" class="info-product">{{ $product->name }}</td>
          <td scope="col">
            <button type="button" class="btn btn-outline-secondary mr-2 mt-3">
              <a class="text-secondary text-decoration-none"
                href="{{ route('admin.products.show', $product->id) }}">Dettagli</a>
            </button>

            <button type="button" class="btn btn btn-outline-success mr-2 mt-3">
              <a class="text-success text-decoration-none"
                href="{{ route('admin.products.edit', $product->id) }}">Modifica</a>

              <form action="{{ route('admin.products.destroy', $product->id) }}" method="post"
                class="delete-button d-inline-block  ">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger mt-3 ">Elimina</button>
              </form>
          </td>
        </tr>
        @endforeach
    </table>

</section>
@endsection