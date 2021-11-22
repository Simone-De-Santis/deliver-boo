{{-- Check if there are errors in the form --}}

@if ($errors->any())
<div>
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
</div>
@endif
{{-- Check if there are errors in the form --}}
@if ($product->exists)
<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
  @method('PATCH')

  @else
  <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    <h1>siamo in creazione</h1>
    @endif
    @csrf
    {{-- Product names --}}
    <div class="form-group">
      <label for="name">Nome del prodotto:</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $product->name) }}" required>
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- Product discount --}}
    <div class="form-group">
      <label for="discount">Discount del prodotto:</label>
      <input type="number" step=".01" min="0" class="form-control @error('discount') is-invalid @enderror" id="discount"
        name="discount" value="{{ old('discount', $product->discount) }}" required>
      @error('discount')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- Product price --}}
    <div class="form-group">
      <label for="price">Prezzo del prodotto:</label>
      <input type="number" step=".01" min="0" class="form-control @error('price') is-invalid @enderror" id="price"
        name="price" value="{{ old('price', $product->price) }}" required>
      @error('price')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- Product description --}}
    <div class="form-group">
      <label for="description">Descrizione del prodotto:</label>
      <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
        id="description" rows="3" required>
            {{ old('description', $product->description) }}
        </textarea>
      @error('description')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
    {{-- Product type --}}
    <div class="form-group">
      <label for="type_id">Tipologia prodotto:</label>
      <select class="form-control" id="type_id" name="type_id">
        <option value="">Nessuna tipologia</option>
        @foreach ($types as $type)
        <option @if (old('type_id', $product->type_id) == $type->id) selected @endif value="{{ $type->id }}">{{
          $type->name }}</option>
        @endforeach
      </select>
    </div>
    {{-- Product available --}}
    <div class="form-group">
      <label for="is_available">Disponibilità prodotto:</label>
      {{-- <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
        value="{{old('price', $product->price)}}" required>
      @error('price')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror --}}
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="is_available" name="is_available" class="custom-control-input" value="1" {{-- @if
          (old('is_available')) checked @endif --}} @if (old('is_available', $product->is_available) == '1') checked
        @endif>
        <label class="custom-control-label" for="is_available">Si</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="is_not_available" name="is_available" class="custom-control-input" value="0" {{-- @if
          (!old('is_available')) checked @endif --}} @if (old('is_available', $product->is_available) == '0') checked
        @endif>
        <label class="custom-control-label" for="is_available">No</label>
      </div>
    </div>
    {{-- Ingredients --}}
    <button id="category-btn" type="button" class="form-control  col-form-label" data-toggle="modal"
      data-target="#staticBackdrop">
      Scegli una o più ingredienti
    </button>
    <div class="form-group row">
      <label for="ingredient" class="col-md-4 col-form-label text-md-right">
        {{-- {{ __('ingredient') }} --}}
      </label>




      <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header">

              <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;Scegli uno o più ingredienti </span>
              </button>
            </div>
            <div class="modal-body ">
              <div class="row">
                @foreach ($ingredients as $ingredient)
                <div class="col-6">
                  <input type="checkbox" id="ingredient-{{ $ingredient->id }}" value="{{ $ingredient->id }}"
                    name="ingredients[]" @if ($product->exists) @if (in_array($ingredient->id, $ingredientIds)) checked
                  @endif @endif>
                  <label for="ingredient-{{ $ingredient->id }}" class=" col-form-label text-md-right">{{
                    $ingredient->name }}
                  </label>
                </div>
                @endforeach
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn  " data-dismiss="modal">Chiudi</button>
              <button type="button" class="btn " data-dismiss="modal">Salva</button>
            </div>
          </div>
        </div>
      </div>


    </div>

    {{-- Product image --}}
    <div class="form-group ">
      <label for="url">Immagine del prodotto:</label>
      <div class=" w-50">
        <input type="file" class="form-control h-100 @error('url') is-invalid @enderror" id="url" name="url">
        @error('url')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        {{-- <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url"
          value="{{ old('url') }}"> @error('url')
        @error('url')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror --}}
      </div>
      <div class="mt-4">
        <button type="button" class="btn  btn btn-dark"><a class="text-white text-decoration-none"
            href="{{ route('admin.products.index') }}">Indietro</a></button>
        <button type="submit" class="btn  text-white ml-3" id="buttom">Salva </button>
      </div>
    </div>