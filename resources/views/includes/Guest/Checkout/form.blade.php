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
<form action="{{ route('checkout.store') }}" method="POST">
    @csrf
    {{-- Guest name --}}
    <div class="form-group">
        <label for="first_name">Nome:</label>
        <input type="text" class="form-control @error('first_name') is-invalid @enderror" id="first_name"
            name="first_name" value="{{ old('first_name', $order->first_name) }}" required>
        @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest lastname --}}
    <div class="form-group">
        <label for="last_name">Cognome:</label>
        <input type="text" class="form-control @error('last_name') is-invalid @enderror" id="last_name" name="last_name"
            value="{{ old('last_name', $order->last_name) }}" required>
        @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest address --}}
    <div class="form-group">
        <label for="address">Indirizzo:</label>
        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address"
            value="{{ old('address', $order->address) }}" required placeholder="Es:'Via Rossi, 23'">
        @error('address')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest city --}}
    <div class="form-group">
        <label for="city">Città:</label>
        <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city"
            value="{{ old('city', $order->city) }}" required>
        @error('city')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest cap --}}
    <div class="form-group">
        <label for="zip">Cap:</label>
        <input type="text" class="form-control @error('zip') is-invalid @enderror" id="zip" name="zip"
            value="{{ old('zip', $order->zip) }}" required>
        @error('zip')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest number --}}
    <div class="form-group">
        <label for="phone_number">Numero di telefono:</label>
        <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
            name="phone_number" value="{{ old('phone_number', $order->phone_number) }}" required>
        @error('phone_number')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Message --}}
    <div class="form-group">
        <label for="message_to_users">Info aggiuntive:</label>
        <textarea class="form-control @error('message_to_users') is-invalid @enderror" id="message_to_users"
            name="message_to_users" id="message_to_users" rows="3" required>
            {{ old('message_to_users', $order->message_to_users) }}
        </textarea>
        @error('message_to_users')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest discount --}}
    <div class="form-group  d-none">
        <label for="discount">{{-- Sconto: --}}</label>
        <input type="hidden" min='0' step=".01" class="form-control @error('discount') is-invalid @enderror"
            id="discount" name="discount" value="24" required>
        @error('discount')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    {{-- Guest price --}}
    <div class="form-group d-none ">
        <label for="total_price">{{-- Totale: --}}</label>
        <input type="hidden" step=".01" min="0" class="form-control @error('total_price') is-invalid @enderror"
            id="total_price" name="total_price" :value="totalPrice" required>
        @error('total_price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>




    <div class="form-group d-none ">
        <label for="productIds">{{-- tutti i prodotti ordinati: --}}</label>
        <input type="hidden" step=".01" min="0" class="form-control @error('productIds') is-invalid @enderror"
            id="productIds" name="productIds" :value="arrayProductIds" required>
        @error('productIds')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group d-none ">
        <label for="arrayProductsQuantity">{{-- tutti i prodotti ordinati: --}}</label>
        <input type="hidden" step=".01" min="0"
            class="form-control @error('arrayProductsQuantity') is-invalid @enderror" id="arrayProductsQuantity"
            name="arrayProductsQuantity" :value="arrayProductsQuantity" required>
        @error('arrayProductsQuantity')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>


    <button type="submit" class="btn primary-color-bg mt-4 text-white mb-5" v-on:click="removeCart()">Conferma
        ordine</button>

</form>
