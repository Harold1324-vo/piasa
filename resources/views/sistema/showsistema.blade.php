@extends('adminlte::page')

@section('title', 'PIASA')

@section('content_header')
    <!-- ... (tu código de encabezado) ... -->
@stop

@section('content')
<div class="section-body">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    @foreach ($informacionPorAno as $informacion)
                        <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.2-web/css/all.min.css') }}">
                        <div class="card-group">
                            <div class="card card-success collapsed-card">
                                <div class="card-header">
                                    <a href="{{ route('sistema.show', $informacion->sistema->id) }}">
                                        <h3 class="card-title">{{ $informacion->sistema->nombreSistema }}</h3>
                                    </a>
                                    <div class="card-tools">
                                        <!-- This will cause the card to be removed when clicked -->
                                        <form action="{{ url('sistema/' . $informacion->sistema->id) }}" method="post">
                                            <!-- This will cause the card to maximize when clicked -->
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                                            <!-- This will cause the card to collapse when clicked -->
                                            @can('crear-procesos')
                                                <a href="{{ url('sistema/' . $informacion->sistema->id . '/edit') }}" class="btn btn-warning">
                                                    <!-- Editar -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                    </svg>
                                                </a>

                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">
                                                    <!-- Eliminar -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                    </svg>
                                                </button>
                                            @endcan
                                        </form>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @if (!empty($informacion->sistema->estado == 0))
                                        <h6 class="text-success">{{ 'ACTIVO' }}</h6>
                                    @else
                                        <h6 class="text-danger">{{ 'INACTIVO' }}</h6>
                                    @endif
                                    <a href="{{ $informacion->sistema->url }}" target="_blank">{{ $informacion->sistema->url }}</a>
                                    <br>
                                    <a href="{{ $informacion->consecutivo }}" target="_blank">{{ $informacion->consecutivo }}</a>
                                </div>
                                <div class="card-body">
                                    <a href="{{ route('grafica.graficaDocumentacionCompleta', $informacion->sistema->id) }}">Ver gráficas</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Agrega la paginación al final de la vista -->
                <div class="pagination justify-content-end">
                    {{ $informacionPorAno->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@stop
