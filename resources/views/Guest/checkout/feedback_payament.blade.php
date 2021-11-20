{{-- Added general layout --}}

@extends('layouts.app')
@section('img-logo')
    <img class="logo " src="/images/Logo-nav.png" alt="logo-black">
@endsection
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.js'
        integrity='sha512-otOZr2EcknK9a5aa3BbMR9XOjYKtxxscwyRHN6zmdXuRfJ5uApkHB7cz1laWk2g8RKLzV9qv/fl3RPwfCuoxHQ=='
        crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with order --}}
@section('content')
    <section class="container mt-5">
        <h1 class="primary-color pt-5 text-center font-weight-bold">Ordine processato correttamente</h1>
        <div class="progress mt-5">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div>
            @{{ processingOrder }}
        </div>
    </section>
@endsection

@section('script-end')
    <script>
        Vue.config.devtools = true;
        console.log('vue', Vue)
        const app = new Vue({
            el: '#app',
            data: {},
            methods: {

            },
            computed: {
                processingOrder() {
                    let progress = 0;
                    setInterval(function() {
                        console.log('ciao');
                        progress + 1;
                    }, 1000)
                    return progress;
                },
            }

        })
    </script>
@endsection
