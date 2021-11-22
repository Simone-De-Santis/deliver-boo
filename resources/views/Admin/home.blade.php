{{-- Added general layout --}}
@extends('layouts.app_admin')
{{-- Added 'content' section to add page content --}}
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <h1>Benvenuto {{ $user->name }} </h1>
    </div>
    <h2 class="text-white">
      Statistiche dei tuoi ordini
    </h2>
    {{-- div delle statistiche --}}
    <div class="shadow-lg rounded bg-statistics-graph">
      <canvas id="myChart"></canvas>
    </div>
  </div>
@endsection




@section('script-end')
  {{-- script per i data delle statistiche --}}
  <script>
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
      'Junly',
      'August',
      'September',
      'October',
      'November',
      'December',

    ];
    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [12, 22, 33, 45, 39, 42, 33, 44, 49, 36, 55, ],
      }]
    };
    const config = {
      type: 'line',
      data: data,
      options: {}
    };
    // === include 'setup' then 'config' above ===

    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>

@endsection
