{{-- Added general layout --}}

@extends('layouts.app')
@section('img-logo')
  <img class="logo " src="/images/Logo-nav.png" alt="logo-black">
@endsection
{{-- Added cdn of 'vue' and 'axios' --}}
@section('cdns')

  <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
@endsection
{{-- Content section with order --}}
@section('content')
  <section class="container mt-5">
    <h1 class="primary-color pt-5 text-center font-weight-bold">Ordine processato correttamente</h1>
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar" aria-valuenow="75"
        aria-valuemin="0" aria-valuemax="100" :style="'width:' + progress+'%;'"></div>
    </div>
    <div>
      @{{ progress }}


    </div>
  </section>
@endsection

@section('script-end')
  <script>
    Vue.config.devtools = true;
    console.log('vue', Vue)
    const app = new Vue({
      el: '#app',
      data: {
        progress: 0,
      },

      methods: {
        incremento() {
          setInterval(() => {
            if (this.progress < 100) this.progress = this.progress + 1
          }, 3);
        }
      },
      created() {
        setTimeout(() => {
          setInterval(() => {
            if (this.progress < 100) this.progress = this.progress + 1
          }, 100);
        }, 5000);


      }

    })
  </script>
@endsection
