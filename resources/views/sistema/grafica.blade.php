@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <br>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        {!! Form::open(['route' => ['rolsistemas.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                            <div class="form-group">
                                <label for="">ID de la plataforma: </label>
                                <header> {{ $sistema->id }}</header>
                            </div>
                        </div>

                        <div class="container">
                            <h1>Gráfico Dona</h1>
                            <canvas id="graficaDona" style="max-width: 260px; max-height: 260px;"></canvas>
                        </div>
                        {!! Form::close() !!}

                        <div class="card-body">
                            <a href="{{  route('generar.pdf', ['idSistema' => $sistema->id])  }}">Generar reporte.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluye Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Obtén el porcentaje de cumplimiento desde PHP (puedes usar Blade para inyectar valores de PHP en JavaScript)
        var porcentajeCumplimiento = {{ $porcentajeCumplimiento ?? 0 }};

        // Calcula el porcentaje de incumplimiento
        var porcentajeIncumplimiento = 100 - porcentajeCumplimiento;

        // Configura los datos para la gráfica
        var data = {
            labels: ['Cumplimiento', 'Incumplimiento'],
            datasets: [{
                data: [porcentajeCumplimiento, porcentajeIncumplimiento],
                backgroundColor: ['#36A2EB', '#FF6384'],
            }],
        };

        // Configura opciones adicionales si es necesario
        var options = {
            // Puedes personalizar opciones aquí
        };

        // Obtén el contexto del lienzo de la gráfica
        var ctx = document.getElementById('graficaDona').getContext('2d');

        // Crea la gráfica de dona
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: data,
            options: options,
        });
    });
</script>

@stop