@extends('layout.main')

@section('title', 'Dashboard')

@section('content')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
  <div id="container"></div>
</figure>

<style>
  .highcharts-figure,
  .highcharts-data-table table {
    min-width: 310px;
    margin: 1em auto;
  }

  #container {
    height: 400px;
  }

  .highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
  }

  .highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
  }

  .highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
  }

  .highcharts-data-table td,
  .highcharts-data-table th,
  .highcharts-data-table caption {
    padding: 0.5em;
  }

  .highcharts-data-table thead tr,
  .highcharts-data-table tbody tr:nth-child(even) {
    background: #f8f8f8;
  }

  .highcharts-data-table tr:hover {
    background: #f1f7ff;
  }

  .highcharts-description {
    margin: 0.3rem 10px;
  }
</style>

<script>
  Highcharts.chart('container', {
    chart: {
      type: 'column'
    },
    title: {
      text: 'Jumlah Mahasiswa berdasarkan Program Studi'
    },
    subtitle: {
      text: 'Source: Universitas MDP'
    },
    xAxis: {
      categories: [
        @foreach($mahasiswaprodi as $item)
        '{{ $item->nama }}',
        @endforeach
      ],
      crosshair: true,
      accessibility: {
        description: 'Program Studi'
      }
    },
    yAxis: {
      min: 0,
      title: {
        text: 'Jumlah Mahasiswa'
      }
    },
    tooltip: {
      valueSuffix: ' (Orang)'
    },
    plotOptions: {
      column: {
        pointPadding: 0.2,
        borderWidth: 0
      }
    },
    series: [{
      name: 'Mahasiswa',
      data: [
        @foreach($mahasiswaprodi as $item) {
          {
            $item - > jumlah
          }
        },
        @endforeach
      ]
    }]
  });
</script>
@endsection