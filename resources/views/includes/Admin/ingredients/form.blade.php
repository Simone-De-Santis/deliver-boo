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
@if ($ingredient->exists)
    <form action="{{ route('admin.ingredients.update', $ingredient->id) }}" method="POST" enctype="multipart/form-data">
        @method('PATCH')
        <h1>siamo in modifica ingredienti</h1>
    @else
        <form action="{{ route('admin.ingredients.store') }}" method="POST" enctype="multipart/form-data">
            <h1>siamo in creazione ingredienti</h1>

@endif

@csrf
{{-- Ingredient names --}}
<div class="form-group">
    <label for="name">Nome dell'ingrediente:</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
        value="{{ old('name', $ingredient->name) }}" required>
    @error('name')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Aggiungere classificazione  --}}

{{-- Ingredient image --}}
<div class="form-group">
    <label for="url">Immagine dell'ingrediente:</label>
    <div class="col-md-6">
        <input type="file" class="form-control @error('url') is-invalid @enderror" id="url" name="url">
        @error('url')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="mt-4">
    <button type="button" class="btn btn-dark"><a class="text-white text-decoration-none"
            href="{{ route('admin.ingredients.index') }}">Indietro</a></button>
    <button type="submit" class="btn btn-primary">Salva prodotto</button>
</div>
</form>
