{{-- Added general layout --}}
@extends('layouts.app_admin')

{{-- Added 'content' section to add page content --}}
@section('content')
    <section class="container orders">

        <h1>Dettagli ordine </h1>
        <div class="card order-card" style="">
            <div class="card-body p-3 container-fluid">

                <h2 class="mt-3">Ordine dell'utente:</h2>
                {{-- @dd($details_product_orders) --}}
                @foreach ($details_product_orders as $details)
                    <ul>
                        <li>Prodotto: {{ $details->name }}</li>
                        <ul>
                            <li> Descrizione: {{ $details->description }}</li>
                            <li> Quantità: {{ $details->quantity }}</li>
                            <li style="font-size: 18px">Prezzo cad. : €{{ $details->price }} </li>
                            <li> Sconto da applicare sul prezzo: {{ $details->discount }} %</li>
                        </ul>
                    </ul>
                @endforeach

                <hr style="border:1px solid black">


                <h2>Dettagli spedizione:</h2>
                <ul>
                    @foreach ($details_guest_order as $details)

                        <li>Nom: {{ $details->first_name }}</li>
                        <li>Cognome: {{ $details->last_name }}</li>
                        <li>Indirizzo: {{ $details->address }}</li>
                        <li>Città: {{ $details->city }}</li>
                        <li>Richiesta dell'utente: {{ $details->message_to_users }}</li>
                        <li>Data della richiesta: {{ $details->created_at }}</li>
                        <li>Codice ID: {{ $details->id }}</li>
                    @endforeach
                </ul>
                <hr>
            </div>
        </div>
    </section>
@endsection
