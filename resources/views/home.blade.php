@extends('adminlte::page')

@section('title', 'PIASA')

@section('content_header')
    <h1>Bienvenidos a PIASA</h1>
@stop

@section('content')

    <div class="card">
        <div class="container">
            <h1>Gráfico Estatus de los sistema</h1>
            <canvas id="graficaEtapasPorAno" style="max-width: 260px; max-height: 260px;"></canvas>
        </div>
    </div>
    <div class="section-body">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-xl-4">

                                <div class="card bg-c-blue order-card">
                                    <div class="card-block">
                                        <h5>Usuarios</h5>
                                        @php
                                            use App\Models\User;
                                            $cant_usuarios = User::count();
                                        @endphp
                                        <h2 class="text-right"><i
                                                class="fa fa-users f-left"></i><span>{{ $cant_usuarios }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/usuario" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-green order-card">
                                    <div class="card-block">
                                        <h5>Roles</h5>
                                        @php
                                            use Spatie\Permission\Models\Role;
                                            $cant_roles = Role::count();
                                        @endphp
                                        <h2 class="text-right"><i
                                                class="fa fa-user-lock f-left"></i><span>{{ $cant_roles }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-xl-4">
                                <div class="card bg-c-pink order-card">
                                    <div class="card-block">
                                        <h5>Sistemas</h5>
                                        @php
                                            use App\Models\Sistema;
                                            $cant_sistema = Sistema::count();
                                        @endphp
                                        <h2 class="text-right"><i
                                                class="fa fa-desktop f-left"></i><span>{{ $cant_sistema }}</span></h2>
                                        <p class="m-b-0 text-right"><a href="/sistema" class="text-white">Ver más</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- En tu vista blade (puedes crear un nuevo archivo js si prefieres) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Obtén los datos desde PHP
        var datosPorAno = <?php echo json_encode($data); ?>;

        // Configuración de la gráfica
        var ctx = document.getElementById('graficaEtapasPorAno').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: datosPorAno.map(data => data.ano),
                datasets: [{
                        label: 'Inicio',
                        data: datosPorAno.map(data => data.etapas.Inicio.percentage),
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Planeación',
                        data: datosPorAno.map(data => data.etapas.Planeación.percentage),
                        backgroundColor: 'rgba(255, 99, 132, 0.2)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Ejecución',
                        data: datosPorAno.map(data => data.etapas.Ejecución.percentage),
                        backgroundColor: 'rgba(255, 206, 86, 0.2)',
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 1
                    },
                    {
                        label: 'Cierre',
                        data: datosPorAno.map(data => data.etapas.Cierre.percentage),
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 100
                    }
                }
            }
        });
    </script>
@stop

@section('css')
    @vite(['resources/css/style_home.scss'])
@stop
