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
                            <ul>
                                @foreach ($anios as $ano)
                                <div class="card-group">
                                    <div class="card card-success collapsed-card">
                                        <div class="card-header">
                                            <a href="{{ route('sistema.mostrar-sistemas-por-ano', $ano) }}">
                                                <h3 class="card-title">{{ $ano }}</h3>
                                            </a>
                                            <div class="card-tools">
                                                <!-- This will cause the card to be removed when clicked -->
                                                    <!-- This will cause the card to maximize when clicked -->
                                                    <button type="button" class="btn btn-tool"
                                                        data-card-widget="collapse"><i
                                                            class="fas fa-minus"></i></button>
                                                    <!-- This will cause the card to collapse when clicked -->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </ul>
                            @else
                            @foreach ($anios as $ano)
                            @php
                                // Obtener sistemas del usuario actual para el año actual
                                $sistemasDelUsuario = App\Models\Sistema::where('idUsuario', Auth::user()->id)
                                    ->whereHas('informacion', function ($query) use ($ano) {
                                        $query->where('anoComienzoOperaciones', $ano);
                                    })
                                    ->get();
                            @endphp

                            @if ($sistemasDelUsuario->isNotEmpty())
                                <ul>
                                    <li><a href="{{ route('sistema.mostrar-sistemas-por-ano', $ano) }}">{{ $ano }}</a></li>
                                </ul>
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

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Script de SweetAlert -->
@if (session('success_documento_registrado'))
<script>
    Swal.fire({
        position: 'center',
        icon: 'success',
        title: '¡Documento y Sistema registrado exitosamente!',
        showConfirmButton: false,
        timer: 3500
    });
</script>
@endif
@stop

