@extends('adminlte::page')

@section('title', 'PIASA')

@section('content')
    <section class="section">
        <div class="section-header">
            <br>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="1000">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Roles del Sistema.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::open(['route' => ['rolsistemas.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Líder del proyecto*:</label>
                                                                {!! Form::text('nombreLiderProyecto', old('nombreLiderProyecto'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre del líder',
                                                                ]) !!}
                                                                @error('nombreLiderProyecto')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del Líder del
                                                                    proyecto*:</label>
                                                                {!! Form::text('puestoLiderProyecto', old('puestoLiderProyecto'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el puesto del líder',
                                                                ]) !!}
                                                                @error('puestoLiderProyecto')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Administrador del proyecto*:</label>
                                                                {!! Form::text('nombreAdministradorProyecto', old('nombreAdministradorProyecto'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre del administrador',
                                                                ]) !!}
                                                                @error('nombreAdministradorProyecto')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del administrador del
                                                                    proyecto*:</label>
                                                                {!! Form::text('puestoAdministradorProyecto', old('puestoAdministradorProyecto'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el puesto del administrador',
                                                                ]) !!}
                                                                @error('puestoAdministradorProyecto')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Desarrollador/Programador*:</label>
                                                                {!! Form::text('nombreDesarrollador', old('nombreDesarrollador'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre del desarrollador',
                                                                ]) !!}
                                                                @error('nombreDesarrollador')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del
                                                                    Desarrollador/Programador*:</label>
                                                                {!! Form::text('puestoDesarrollador', old('puestoDesarrollador'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el puesto del desarrollador',
                                                                ]) !!}
                                                                @error('puestoDesarrollador')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área usuaria*:</label>
                                                                {!! Form::text('areaUsuaria', old('areaUsuaria'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre del área',
                                                                ]) !!}
                                                                @error('areaUsuaria')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del usuario*:</label>
                                                                {!! Form::text('puestoUsuario', old('puestoUsuario'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el puesto del usuario',
                                                                ]) !!}
                                                                @error('puestoUsuario')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}

                                                    <!-- Script de SweetAlert -->
                                                    @if (session('script'))
                                                        {!! session('script') !!}
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item" data-bs-interval="2000">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Información General.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::open(['route' => ['informacion.store', 'id' => $sistema->id], 'method' => 'POST', 'id' => 'informacionForm']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Año que el sistema comenzó
                                                                    operaciones*:</label>
                                                                {!! Form::select(
                                                                    'anoComienzoOperaciones',
                                                                    array_combine(range(date('Y'), 1999), range(date('Y'), 1999)),
                                                                    old('anoComienzoOperaciones'),
                                                                    [
                                                                        'class' => 'form-control',
                                                                        'required' => 'required',
                                                                        'placeholder' => 'Ingrese el año',
                                                                    ],
                                                                ) !!}
                                                                @error('anoComienzoOperaciones')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿Solo es para consultar
                                                                    información?*:</label>
                                                                {!! Form::select(
                                                                    'consultaInformacion',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('consultaInformacion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('consultaInformacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema requiere
                                                                    actualización?*:</label>
                                                                {!! Form::select(
                                                                    'requiereActualizacion',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('consultaInformacion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('requiereActualizacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fecha de última actualización del
                                                                    sistema*:</label>
                                                                {!! Form::date('fechaUltimaActualizacion', old('fechaUltimaActualizacion'), [
                                                                    'class' => 'form-control',
                                                                    'id' => 'datatimepicker',
                                                                    'required' => 'required',
                                                                ]) !!}
                                                                @error('fechaUltimaActualizacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Datos abiertos*:</label>
                                                                {!! Form::select(
                                                                    'datosAbiertos',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('datosAbiertos'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('datosAbiertos')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de publicación*:</label>
                                                                {!! Form::select(
                                                                    'tipoPublicacion',
                                                                    [
                                                                        'Interna' => 'Interna',
                                                                        'Externa' => 'Externa',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('tipoPublicacion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un tipo'],
                                                                ) !!}
                                                                @error('tipoPublicacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nivel de interacción*:</label>
                                                                {!! Form::select(
                                                                    'nivelInteraccion',
                                                                    [
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        'Interacción Manual' => 'Interacción Manual',
                                                                        'Interoperabilidad Semántica' => 'Interoperabilidad Semántica',
                                                                        'Interoperabilidad Técnica' => 'Interoperabilidad Técnica',
                                                                        'Interoperabilidad Técnica y Organizacional' => 'Interoperabilidad Técnica y Organizacional',
                                                                        'Interoperabilidad Semántica y Organizacional' => 'Interoperabilidad Semántica y Organizacional',
                                                                    ],
                                                                    old('nivelInteraccion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un nivel'],
                                                                ) !!}
                                                                @error('nivelInteraccion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fase Actual*: </label>
                                                                {!! Form::select(
                                                                    'faseActual',
                                                                    [
                                                                        'Desarrollo' => 'Desarrollo',
                                                                        'Completado' => 'Completado',
                                                                        'Concluido' => 'Concluido',
                                                                        'Cancelado' => 'Cancelado',
                                                                        'Congelado' => 'Congelado',
                                                                    ],
                                                                    old('faseActual'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una fase'],
                                                                ) !!}
                                                                @error('faseActual')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Etapa en el que se encuentra el
                                                                    sistema*:</label>
                                                                {!! Form::select(
                                                                    'etapaActual',
                                                                    [
                                                                        'Planeación' => 'Planeación',
                                                                        'Inicio' => 'Inicio',
                                                                        'Ejecución' => 'Ejecución',
                                                                        'Cierre' => 'Cierre',
                                                                    ],
                                                                    old('etapaActual'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una etapa'],
                                                                ) !!}
                                                                @error('etapaActual')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Sub-etapa en el que se encuentra el
                                                                    sistema*:</label>
                                                                {!! Form::select(
                                                                    'subEtapaActual',
                                                                    [
                                                                        'Reunión de Arranque' => 'Reunión de Arranque',
                                                                        'Análisis, Diseño y Modelado' => 'Análisis, Diseño y Modelado',
                                                                        'Construcción' => 'Construcción',
                                                                        'Puesta en Operación' => 'Puesta en Operación',
                                                                        'No Aplica' => 'No Aplica',
                                                                    ],
                                                                    old('subEtapaActual'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una sub-etapa'],
                                                                ) !!}
                                                                @error('subEtapaActual')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El Sistema es legado?*:</label>
                                                                {!! Form::select(
                                                                    'legado',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('legado'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('legado')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Modelo de operación*:</label>
                                                                {!! Form::select(
                                                                    'modeloOperacion',
                                                                    [
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        'En la nube' => 'En la nube',
                                                                        'Interno' => 'Interno',
                                                                        'Mixto' => 'Mixto',
                                                                    ],
                                                                    old('modeloOperacion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un modelo'],
                                                                ) !!}
                                                                @error('modeloOperacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con
                                                                    dependencias*:</label>
                                                                {!! Form::text('interaccionDependencias', old('interaccionDependencias'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la interacción',
                                                                ]) !!}
                                                                @error('interaccionDependencias')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con otras áreas*:</label>
                                                                {!! Form::text('interaccionOtrasAreas', old('interaccionOtrasAreas'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la interacción',
                                                                ]) !!}
                                                                @error('interaccionOtrasAreas')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra
                                                                    migrado?*:</label>
                                                                {!! Form::select(
                                                                    'migrado',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('migrado'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('migrado')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}

                                                    <!-- Script de SweetAlert -->
                                                    @if (session('script'))
                                                        {!! session('script') !!}
                                                    @endif

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Características Técnicas.
                                    </h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span
                                                                    class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::open(['route' => ['caracteristica.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Sistema Operativo*:</label>
                                                                {!! Form::text('sistemaOperativo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Control de Versiones*:</label>
                                                                {!! Form::text('controlVersiones', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Versión del sistema*:</label>
                                                                {!! Form::text('versionSistema', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Lenguaje de programación del
                                                                    sistema*:</label>
                                                                {!! Form::text('lenguajeProgramacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con otro lenguaje de
                                                                    programación*:</label>
                                                                {!! Form::text('otroLenguajeProgramacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Frameworks*:</label>
                                                                {!! Form::text('frameworks', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Despliegue*:</label>
                                                                {!! Form::text('despliegue', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Si es otro servidor web,
                                                                    especificarlo*:</label>
                                                                {!! Form::text('otroServidorWeb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Manejador de base de datos*:</label>
                                                                {!! Form::text('manejadorBD', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre de la base de datos*:</label>
                                                                {!! Form::text('nombreBD', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Plataforma de desarrollo de
                                                                    software*:</label>
                                                                {!! Form::text('plataformaDesarrollo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema hace uso de una
                                                                    API?*:</label>
                                                                {!! Form::text('usoAPI', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Documentación.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span
                                                                    class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::open([
                                                        'url' => route('documento.store', ['id' => $sistema->id]),
                                                        'method' => 'POST',
                                                        'enctype' => 'multipart/form-data',
                                                    ]) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra documentado
                                                                    con base en la normatividad de la Adminstración Pública
                                                                    General?*:</label>
                                                                {!! Form::text('documentado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual de
                                                                    usuario?*:</label>
                                                                {!! Form::text('manualUsuario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual
                                                                    técnico?*:</label>
                                                                {!! Form::text('manualTecnico', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual de
                                                                    mantenimiento?*:</label>
                                                                {!! Form::text('manualMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con una política
                                                                    de privacidad?*:</label>
                                                                {!! Form::text('politicaPrivacidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h4>Subir Documentación del Sistema.</h4>

                                                    <div class="row">
                                                        @for ($i = 0; $i < count($nombresArchivos); $i++)
                                                            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="archivo{{ $i }}">{{ $nombresArchivos[$i] }}</label>
                                                                    {!! Form::file('nombreArchivo[]', ['class' => 'form-control', 'multiple' => true, 'id' => "archivo{$i}"]) !!}

                                                                </div>
                                                            </div>
                                                        @endfor
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Seguridad.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span
                                                                    class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::open(['route' => ['seguridad.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se han determinado roles y
                                                                    responsabilidades?*:</label>
                                                                {!! Form::text('determinarRoles', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se tiene identificado los
                                                                    procesos de borrado
                                                                    seguro de acuerdo a las políticas de seguridad
                                                                    de la información de
                                                                    la CONDUSEF?*:</label>
                                                                {!! Form::text('procesoBorrado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con un
                                                                    control de accesos de
                                                                    acuerdo a las políticas de seguridad de la
                                                                    información de la
                                                                    CONDUSEF?*:</label>
                                                                {!! Form::text('controlAcceso', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se cuenta con el
                                                                    conocimiento de los principios,
                                                                    deberes, derechos y demás obligaciones en la
                                                                    materia junto con las
                                                                    sanciones que se ejercerán en caso de
                                                                    incumplimiento?*:</label>
                                                                {!! Form::text('conocimientoPrincipios', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">Protocolo de seguridad de la
                                                                    información*:</label>
                                                                {!! Form::text('protocoloSeguridad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Datos Personales Incluidos
                                        en el
                                        Sistema.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span
                                                                    class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::open(['route' => ['datosPersonal.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema maneja datos
                                                                    personales?*:</label>
                                                                {!! Form::text('manejoDatosPersonales', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fundamento legal*:</label>
                                                                {!! Form::text('fundamentoLegal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de datos
                                                                    personales*:</label>
                                                                {!! Form::text('tipoDatosPersonales', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Formas de obtención de los
                                                                    datos
                                                                    personales*:</label>
                                                                {!! Form::text('formaObtencion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Portabilidad de datos*:</label>
                                                                {!! Form::text('portabilidadDatos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Transferencia de
                                                                    datos*:</label>
                                                                {!! Form::text('transferenciaDatos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de soporte*:</label>
                                                                {!! Form::text('tipoSoporte', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">El sistema cuenta con Aviso
                                                                    de
                                                                    Privacidad*:</label>
                                                                {!! Form::text('avisoPrivacidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Mantenimiento.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span
                                                                    class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::open(['route' => ['mantenimiento.store', 'id' => $sistema->id], 'method' => 'POST']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema requiere
                                                                    mantenimiento?*:</label>
                                                                {!! Form::text('requiereMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de mantenimiento*:</label>
                                                                {!! Form::text('tipoMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Descripción del
                                                                    mantenimiento*:</label>
                                                                {!! Form::text('descripcionMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Periocidad de mantenimiento*:</label>
                                                                {!! Form::text('periocidadMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área responsable*:</label>
                                                                {!! Form::text('areaResponsable', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del técnico
                                                                    responsable*:</label>
                                                                {!! Form::text('nombreTecnicoResponsable', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del coordinador de
                                                                    mantenimiento*:</label>
                                                                {!! Form::text('nombreCoordinador', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div style="flex-grow: 1;">
                                                            <p>* Campos Obligatorios</p>
                                                        </div>
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-info ms-md-2" type="reset"
                                                                value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-success ms-md-2" type="submit"
                                                                value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button"
                            data-bs-slide="prev" style="background-color: #98ff96; height: 30px; width: 15%;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden"
                                style="background-color: #98ff96; height: 30px; width: 60%; color:black;">Previo</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                            data-bs-slide="next" style="background-color: #98ff96; height: 30px; width: 15%;">
                            <span class="visually-hidden"
                                style="background-color: #98ff96; height: 30px; width: 60%; color:black;">Siguiente</span>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('#datetimepicker').datetimepicker({
                format: 'YYYY-MM-DD'
            });
        });
    </script>

    <!-- Script de SweetAlert -->
    @if (session('success_sistema_registrado'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Sistema registrado exitosamente!',
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif

    @if (session('success_rol_registrado'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Roles registrados exitosamente!',
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif

    @if (session('success_informacion_registrado'))
        <script>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '¡Información registrada exitosamente!',
                showConfirmButton: false,
                timer: 3500
            });
        </script>
    @endif

    <!-- Script de AJAX para manejar el envío del formulario sin recargar la página -->
    <script>
        $(document).ready(function() {
            $('#informacionForm').submit(function(e) {
                e.preventDefault();

                // Realiza la petición AJAX
                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize(),
                    success: function(response) {
                        // Muestra el mensaje de éxito después de enviar el formulario
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: '¡Información registrada exitosamente!',
                            showConfirmButton: false,
                            timer: 3500
                        });
                    },
                    error: function(error) {
                        console.error('Error en la petición AJAX:', error);
                    }
                });
            });
        });
    </script>

@stop
