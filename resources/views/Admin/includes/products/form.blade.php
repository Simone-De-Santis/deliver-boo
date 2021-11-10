{{-- Check if there are errors in the form --}}
@if($errors->any())
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
<form action="{{route('admin.products.update', $product->id)}}" method="POST"> 
    @method('PATCH')
    <h1>siamo in modifica</h1>
    @else
    <form action="{{route('admin.products.store')}}" method="POST">  
    <h1>siamo in creazione</h1>
@endif
    @csrf
    {{-- Product names --}}
    <div class="form-group">
        <label for="name">Nome del prodotto:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}" required>
        @error('name')
          <div class="invalid-feedback">{{ $message }}</div>          
        @enderror
    </div>
    {{-- Product discount --}}
    <div class="form-group">
        <label for="discount">Discount del prodotto:</label>
        <input type="number" class="form-control @error('discount') is-invalid @enderror" id="discount" name="discount" value="{{old('discount', $product->discount)}}" required>
        @error('discount')
          <div class="invalid-feedback">{{ $message }}</div>          
        @enderror
    </div>
    {{-- Product price --}}
    <div class="form-group">
        <label for="discount">Prezzo del prodotto:</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $product->price)}}" required>
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>          
        @enderror
    </div>
    {{-- Product description --}}
    <div class="form-group">
        <label for="discount">Descrizione del prodotto:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" id="description" rows="3" required>
            {{old('description', $product->description)}}
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
            <option @if(old('type_id', $product->type_id) == $type->id) selected @endif value="{{$type->id}}">{{$type->name}}</option>       
          @endforeach
        </select>
      </div>
    {{-- Product available --}}
    <div class="form-group">
        <label for="discount">Disponibilità prodotto:</label>
        {{-- <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price', $product->price)}}" required>
        @error('price')
          <div class="invalid-feedback">{{ $message }}</div>          
        @enderror --}}
        <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="is_available" name="is_available" class="custom-control-input" value="1">
            <label class="custom-control-label" for="is_available">Si</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input type="radio" id="is_not_available" name="is_available" class="custom-control-input" value="0">
            <label class="custom-control-label" for="is_not_available">No</label>
          </div>
    </div>
    {{-- Product image --}}
    <div class="form-group">
        <label for="url">Immagine del prodotto:</label>
            <div class="col-md-6">
                <input type="file" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{old('url', $product->url)}}">
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>          
                @enderror
                {{-- <input id="url" type="file" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') }}"> @error('url')
                @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>          
                @enderror --}}
    </div>
    



    
    <div>
      <button type="button" class="btn btn-dark"><a class="text-white text-decoration-none" href="{{route('admin.products.index')}}">Indietro</a></button>
      <button type="submit" class="btn btn-primary">Salva prodotto</button>
    </div>   
</form>