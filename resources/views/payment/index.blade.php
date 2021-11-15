<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
        <form action="{{ route('hosted.store') }}" id="payment-form" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="first-name">Name on Card</label>
                <input type="text" class="form-control" id="first-name" name="name_on_card">
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="street-address">Address</label>
                        <input type="text" class="form-control" id="street-address" name="address">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="locality">City</label>
                        <input type="text" class="form-control" id="locality" name="city">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="region">Province</label>
                        <input type="text" class="form-control" id="region" name="province">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="postal-code">Postal Code</label>
                        <input type="text" class="form-control" id="postal-code" name="postalcode">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="country-name">Country</label>
                        <input type="text" class="form-control" id="country-name" name="country">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control" id="amount" name="amount">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <label for="card-number">Card Number</label>
                    <div class="form-group" id="card-number">
                    </div>
                </div>
                <div class="col-3">
                    <label for="expiration-date">Expiry</label>
                    <div class="form-group" id="expiration-date">
                    </div>
                </div>
                <div class="col-3">
                    <label for="cvv">CVV</label>
                    <div class="form-group" id="cvv">
                    </div>
                </div>
            </div>
            {{-- NONCE TYPE HIDDEN AGGIUNTO --}}
            <input type="hidden" id="nonce" name="payment_method_nonce">
            <input type="submit" value="Pay" />
        </form>
    </div>

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
                //QUESTI SONO I CAMPI CHE BRAINTREE CERCA TRAMITE L'ID E LI VA A GENERARE IN AUTOMATICO
                fields: {
                    /* Il campo di braintree */
                    number: {
                        container: '#card-number',
                        placeholder: '4111 1111 1111 1111'
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

                /* NON NECESSARIO ADESSO  submit.removeAttribute('disabled'); */

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    hostedFieldsInstance.tokenize(function(tokenizeErr, payload) {
                        if (tokenizeErr) {
                            console.error(tokenizeErr);
                            return;
                        }

                        // If this was a real integration, this is where you would
                        // send the nonce to your server.
                        /*console.log('Got a nonce: ' + payload.nonce); */


                        //AGGIUNTO IL NONCE E FATTO SUBMIT AL FORM
                        document.querySelector('#nonce').value = payload.nonce;
                        form.submit();
                    });
                }, false);
            });
        });
    </script>
</body>

</html>
