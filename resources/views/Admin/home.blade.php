{{-- Added general layout  --}}
@extends('layouts.app')
{{--Added 'content' section to add page content  --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">          
            <h1>Benvenuto {{ $user->name }} </h1>
        </div>
       <h2>
           Statistiche di tutte cose
       </h2>
    </div>
@endsection
