@extends('layouts.app')
{{-- Added cdn of 'vue' --}}
@section('cdns')
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with selected restaurant products --}}
@section('content')
    {{-- Id app to add link with Vue --}}
    <div id="app">
        {{-- ERROR ALERTS --}}
        @if (session('success_message'))
            <div class="alert alert-success">
                {{ session('success_message') }}
            </div>
        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- FORM --}}
        <div class="container mt-5">
            <h1>Payment Form</h1>
            <form action="{{ route('payment.store') }}" id="payment-form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="es: mario.rossi@gmail.com">
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="first-name">Name on Card</label>
                            <input type="text" class="form-control" id="first-name" name="name_on_card"
                                placeholder="es: Mario Rossi">
                        </div>
                    </div>
                    <div>
                        Price: @{{ price }}
                    </div>
                    <div class="col-3 d-none">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="hidden" class="form-control" id="amount" name="amount" :value="price">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <label for="card-number">Card Number</label>
                            <div class="form-control" id="card-number">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="expiration-date">Expiry</label>
                            <div class="form-control" id="expiration-date">
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <div class="form-control" id="cvv">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- NONCE TYPE HIDDEN AGGIUNTO --}}
                <input type="hidden" id="nonce" name="payment_method_nonce">
                <input type="submit" value="Pay" />
            </form>
        </div>
    </div>
@endsection
@section('script-end')
    <script>
        Vue.config.devtools = true;
        // Initialized a new instance of 'vue'
        const app = new Vue({
            el: '#app',
            data: {
                price: 0,
                cart: [],
            },
            created() {
                const x = JSON.parse(localStorage.getItem('cart'));
                if (!x) {
                    x = [];
                }
                this.cart = x;
                let total = 0;
                for (let i = 0; i < x.length; i++) {
                    const product = x[i];
                    total += product.price * product.quantity;
                }
                this.price = total.toFixed(2);
                localStorage.setItem('total', JSON.stringify(total))
            },
            /* DA FARE FUNZIONE CHE PREVENGA IL SUBMIT DEL BUTTON,
            FACCIA UN CONTROLLO SUL PREZZO CHE ARRIVA DAL FORM E
            SE NON E' UGUALE BLOCCHI TUTTO */



        })
    </script>
    <script src="https://js.braintreegateway.com/web/3.82.0/js/client.min.js"></script>
    <script src="https://js.braintreegateway.com/web/3.82.0/js/hosted-fields.min.js"></script>
    <script>
        var form = document.querySelector('#payment-form');
        var submit = document.querySelector('input[type="submit"]');

        braintree.client.create({
            //QUI VA IL TOKEN
            authorization: '{{ $token }}'
        }, function(clientErr, clientInstance) {
            if (clientErr) {
                console.error(clientErr);
                return;
            }

            // This example shows Hosted Fields, but you can also use this
            // client instance to create additional components here, such as
            // PayPal or Data Collector.

            braintree.hostedFields.create({
                client: clientInstance,
                styles: {
                    'input': {
                        'font-size': '14px'
                    },
                    'input.invalid': {
                        'color': 'red'
                    },
                    'input.valid': {
                        'color': 'green'
                    }
                },
                //QUESTI SONO I CAMPI CHE BRAINTREE CERCA TRAMITE L'ID
                fields: {
                    /* Il campo di braintree */
                    number: {
                        container: '#card-number',
                        placeholder: '4111 1111 1111 1111',
                        //Attributi che posso associarli anche da qui

                        /* type: 'hidden' */
                    },
                    /* Il campo di braintree */
                    cvv: {
                        container: '#cvv',
                        placeholder: '123'
                    },
                    /* Il campo di braintree */
                    expirationDate: {
                        container: '#expiration-date',
                        placeholder: '10/2022'
                    }
                }
            }, function(hostedFieldsErr, hostedFieldsInstance) {
                if (hostedFieldsErr) {
                    console.error(hostedFieldsErr);
                    return;
                }

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    hostedFieldsInstance.tokenize(function(tokenizeErr, payload) {
                        if (tokenizeErr) {
                            console.error(tokenizeErr);
                            return;
                        }
                        //AGGIUNTO IL NONCE E FATTO SUBMIT AL FORM
                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                }, false);
            });
        });
    </script>
@endsection
