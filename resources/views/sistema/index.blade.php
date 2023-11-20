@extends('adminlte::page')

@section('title', 'PIASA')

@section('content_header')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Sistemas</h3>
            <br>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="class col md-8">
                                    <h2 class="card-title">Lista de sistemas registrados.</h2>
                                </div>
                                <div class="class col md 4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        @can('crear-procesos')
                                            <a class="btn btn-primary" href="{{ route('sistema.create') }}"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-clipboard-plus-fill" viewBox="0 0 16 16">
                                                    <path
                                                        d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3Zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3Z" />
                                                    <path
                                                        d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5v-1Zm4.5 6V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5a.5.5 0 0 1 1 0Z" />
                                                </svg></a>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @if (Auth::user()->hasRole('Administrador'))
                                @foreach ($sistema as $sistemas)
                                    <link rel="stylesheet"
                                        href="{{ asset('assets/fontawesome-free-6.4.2-web/css/all.min.css') }}">
                                    <div class="card-group">
                                        <div class="card card-success collapsed-card">
                                            <div class="card-header">
                                                <a href="{{ route('sistema.show', $sistemas->id) }}">
                                                    <h3 class="card-title">{{ $sistemas->nombreSistema }}</h3>
                                                </a>
                                                <div class="card-tools">
                                                    <!-- This will cause the card to be removed when clicked -->
                                                    <form action="{{ url('sistema/' . $sistemas->id) }}" method="post">
                                                        <!-- This will cause the card to maximize when clicked -->
                                                        <button type="button" class="btn btn-tool"
                                                            data-card-widget="collapse"><i
                                                                class="fas fa-minus"></i></button>
                                                        <!-- This will cause the card to collapse when clicked -->
                                                        @can('crear-procesos')
                                                            <a href="{{ url('sistema/' . $sistemas->id . '/edit') }}"
                                                                class="btn btn-warning"><!-- Editar -->
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor"
                                                                    class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                    <path fill-rule="evenodd"
                                                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                </svg></a>

                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger"><!-- Eliminar --><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="16"
                                                                    height="16" fill="currentColor" class="bi bi-trash-fill"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                </svg></button>
                                                        @endcan
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                @if (!empty($sistemas->estado == 0))
                                                <h6 class="text-success">{{ 'ACTIVO' }}</h6>@else<h6
                                                        class="text-danger">{{ 'INACTIVO' }}
                                                    </h6>
                                                @endif
                                                <a href="{{ $sistemas->url }}" target="_blank">{{ $sistemas->url }}</a>
                                            </div>
                                            <div class="card-body">
                                                <a href="{{route('grafica.graficaDocumentacionCompleta', $sistemas->id)}}">Ver gráficas</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                @foreach ($sistema as $sistemas)
                                    @if ($sistemas->idUsuario === Auth::user()->id)
                                        <link rel="stylesheet"
                                            href="{{ asset('assets/fontawesome-free-6.4.2-web/css/all.min.css') }}">
                                        <div class="card-group">
                                            <div class="card card-success collapsed-card">
                                                <div class="card-header">
                                                    <a href="{{ route('sistema.show', $sistemas->id) }}">
                                                        <h3 class="card-title">{{ $sistemas->nombreSistema }}</h3>
                                                    </a>
                                                    <div class="card-tools">
                                                        <!-- This will cause the card to be removed when clicked -->
                                                        <form action="{{ url('sistema/' . $sistemas->id) }}"
                                                            method="post">
                                                            <!-- This will cause the card to maximize when clicked -->
                                                            <button type="button" class="btn btn-tool"
                                                                data-card-widget="collapse"><i
                                                                    class="fas fa-minus"></i></button>
                                                            <!-- This will cause the card to collapse when clicked -->
                                                            @can('crear-procesos')
                                                                <a href="{{ url('sistema/' . $sistemas->id . '/edit') }}"
                                                                    class="btn btn-warning"><!-- Editar -->
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                                        <path fill-rule="evenodd"
                                                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                                                    </svg></a>

                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit"
                                                                    class="btn btn-danger"><!-- Eliminar --><svg
                                                                        xmlns="http://www.w3.org/2000/svg" width="16"
                                                                        height="16" fill="currentColor"
                                                                        class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                                        <path
                                                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                                                    </svg></button>
                                                            @endcan
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    @if (!empty($sistemas->estado == 0))
                                                    <h6 class="text-success">{{ 'ACTIVO' }}</h6>@else<h6
                                                            class="text-danger">{{ 'INACTIVO' }}
                                                        </h6>
                                                    @endif
                                                    <a href="{{ $sistemas->url }}"
                                                        target="_blank">{{ $sistemas->url }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Ubicamos la paginacion a la derecha -->
                                        <div class="pagination justify-content-end">
                                            {!! $sistema->links() !!}
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
