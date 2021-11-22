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
  <div id="order-feedback">
    <section class="container mt-5">
      <h1 class="primary-color pt-5 text-center font-weight-bold mb-3">Ordine processato correttamente</h1>
      <div class="mx-5 mb-5 mt-2">
        <p>Grazie per aver scelto il nostro servizio di delivery, il tuo ordine è stato processato correttamente. Da
          adesso puoi controllare il suo stato qui sotto. <i class="fas fa-arrow-circle-down primary-color freccia"></i>
        </p>
      </div>
      <div class="progress mx-5">
        <div role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
          class="progress-bar progress-bar-striped progress-bar-animated primary-color-bg"
          :style="'width:' + progress+'%;'">
        </div>
      </div>
      <div class="mx-5 mt-3">
        <p class="text-center font-weight-bold">@{{ statusOrder }} </p>
      </div>
      <img
        src="https://cdn1.iconfinder.com/data/icons/logistics-transportation-vehicles/202/logistic-shipping-vehicles-002-512.png"
        alt="" class="rider">
    </section>
  </div>
@endsection

@section('script-end')
  <script>
    Vue.config.devtools = true;
    console.log('vue', Vue)
    const app = new Vue({
      el: '#app',
      data: {
        progress: 0,
        status: "ciao",
      },

      methods: {
        incremento() {
          setInterval(() => {
            if (this.progress < 100) this.progress = this.progress + 1
          }, 3);
        }
      },
      computed: {
        statusOrder() {
          status = ''
          if (this.progress < 15)
            status = "ordine in preparazione"
          else if (this.progress < 25)
            status = "pronto alla sepedizione"
          else if (this.progress < 50)
            status = "preso in carico dal corriere"
          else if (this.progress < 75)
            status = "il corriere sta arrivando "
          else if (this.progress < 95)
            status = "pronto ad aprire ? "
          else
            status = "drinnnnnnnnnn "
          if (this.progress == 100) {

            window.setTimeout(function() {

              // Move to a new location or you can do something else
              window.location.href = "/";

            }, 2000);
          }
          return status
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
