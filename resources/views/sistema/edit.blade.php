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
                        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                            data-bs-interval="false">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-bs-interval="1000">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Datos del Sistema.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::model($sistema, ['method' => 'PUT', 'route' => ['sistema.update', $sistema->id], 'id' => 'datosForm']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del Sistema*:</label>
                                                                {!! Form::text('nombreSistema', old('nombreSistema'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre',
                                                                ]) !!}
                                                                @error('nombreSistema')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Descripción*:</label>
                                                                {!! Form::textarea('descripcion', old('descripcion'), [
                                                                    'class' => 'form-control',
                                                                    'rows' => 1,
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la descripción',
                                                                ]) !!}
                                                                @error('descripcion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Siglas*:</label>
                                                                {!! Form::text('siglas', old('siglas'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese las siglas',
                                                                ]) !!}
                                                                @error('siglas')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Clasificación*:</label>
                                                                {!! Form::select(
                                                                    'clasificacion',
                                                                    [
                                                                        'Aplicación Móvil' => 'Aplicación Móvil',
                                                                        'Juego' => 'Juego',
                                                                        'Portal' => 'Portal',
                                                                        'Sistema' => 'Sistema',
                                                                    ],
                                                                    old('clasificacion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una clasificación'],
                                                                ) !!}
                                                                @error('clasificacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área Desarrolladora*:</label>
                                                                {!! Form::select(
                                                                    'areaDesarrolladora',
                                                                    [
                                                                        'DDEPO' => 'DDEPO',
                                                                        'DGPJDTF' => 'DGPJDTF',
                                                                        'DTIC' => 'DTIC',
                                                                    ],
                                                                    old('areaDesarrolladora'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una área'],
                                                                ) !!}
                                                                @error('areaDesarrolladora')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra
                                                                    activo?*:</label>
                                                                {!! Form::select(
                                                                    'estadoActivo',
                                                                    [
                                                                        'En desarrollo' => 'En desarrollo',
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                    ],
                                                                    old('estadoActivo'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('estadoActivo')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Especifique la URL del sitio
                                                                    web*:</label>
                                                                {!! Form::text('url', old('url'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la URL',
                                                                ]) !!}
                                                                @error('url')
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item" data-bs-interval="2000">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Roles del Sistema.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::model($sistema->rolesSistemas, ['route' => ['rolsistemas.update', $sistema->id], 'method' => 'PUT', 'id' => 'rolesForm']) !!}
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
                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
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
                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Información General.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::model($sistema->informacion, ['route' => ['informacion.update', $sistema->id], 'method' => 'PUT', 'id' => 'informacionForm']) !!}
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
                                                    {!! Form::model($sistema->caracteristica, [
                                                        'route' => ['caracteristica.update', $sistema->id],
                                                        'method' => 'PUT', 'id' => 'caracteristicasForm'
                                                    ]) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Sistema Operativo*:</label>
                                                                {!! Form::text('sistemaOperativo', old('sistemaOperativo'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese un sistema',
                                                                ]) !!}
                                                                @error('sistemaOperativo')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Control de Versiones*:</label>
                                                                {!! Form::select(
                                                                    'controlVersiones',
                                                                    [
                                                                        'Git' => 'Git',
                                                                        'Otro' => 'Otro',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        'Apache Subversión' => 'Apache Subversión',
                                                                    ],
                                                                    old('controlVersiones'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione un control'],
                                                                ) !!}
                                                                @error('controlVersiones')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Versión del sistema*:</label>
                                                                {!! Form::text('versionSistema', old('versionSistema'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la versión',
                                                                ]) !!}
                                                                @error('versionSistema')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Lenguaje de programación del
                                                                    sistema*:</label>
                                                                {!! Form::text('lenguajeProgramacion', old('lenguajeProgramacion'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese un lenguaje',
                                                                ]) !!}
                                                                @error('lenguajeProgramacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con otro
                                                                    lenguaje*:</label>
                                                                {!! Form::text('otroLenguajeProgramacion', old('otroLenguajeProgramacion'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Especifique un lenguaje',
                                                                ]) !!}
                                                                @error('otroLenguajeProgramacion')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Frameworks*:</label>
                                                                {!! Form::text('frameworks', old('frameworks'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese un framework',
                                                                ]) !!}
                                                                @error('frameworks')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Despliegue*:</label>
                                                                {!! Form::select(
                                                                    'despliegue',
                                                                    [
                                                                        'Otro' => 'Otro',
                                                                        'Nginx' => 'Nginx',
                                                                        'Apache' => 'Apache',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        'Microsoft Windows' => 'Microsoft Windows',
                                                                    ],
                                                                    old('despliegue'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('despliegue')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Si es otro servidor web,
                                                                    especificarlo*:</label>
                                                                {!! Form::text('otroServidorWeb', old('otroServidorWeb'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el servidor',
                                                                ]) !!}
                                                                @error('otroServidorWeb')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Manejador de base de datos*:</label>
                                                                {!! Form::text('manejadorBD', old('manejadorBD'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el manejador',
                                                                ]) !!}
                                                                @error('manejadorBD')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre de la base de datos*:</label>
                                                                {!! Form::text('nombreBD', old('nombreBD'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre',
                                                                ]) !!}
                                                                @error('nombreBD')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Plataforma de desarrollo de
                                                                    software*:</label>
                                                                {!! Form::text('plataformaDesarrollo', old('plataformaDesarrollo'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la plataforma',
                                                                ]) !!}
                                                                @error('plataformaDesarrollo')
                                                                    <small style="color: red;">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema hace uso de una
                                                                    API?*:</label>
                                                                {!! Form::select(
                                                                    'usoAPI',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('usoAPI'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('usoAPI')
                                                                    <small class="text-danger">{{ $message }}</small>
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
                                                    {!! Form::model($sistema->seguridad, ['route' => ['seguridad.update', $sistema->id], 'method' => 'PUT', 'id' => 'seguridadForm']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se han determinado roles y
                                                                    responsabilidades?*:</label>
                                                                {!! Form::select(
                                                                    'determinarRoles',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('determinarRoles'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('determinarRoles')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se tiene identificado los
                                                                    procesos de borrado
                                                                    seguro de acuerdo a las políticas de seguridad
                                                                    de la información de
                                                                    la CONDUSEF?*:</label>
                                                                {!! Form::select(
                                                                    'procesoBorrado',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'Campo Vacio' => 'Campo Vacio',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('procesoBorrado'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('procesoBorrado')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con un
                                                                    control de accesos de
                                                                    acuerdo a las políticas de seguridad de la
                                                                    información de la
                                                                    CONDUSEF?*:</label>
                                                                {!! Form::select(
                                                                    'controlAcceso',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('controlAcceso'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('controlAcceso')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
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
                                                                {!! Form::select(
                                                                    'conocimientoPrincipios',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('conocimientoPrincipios'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('conocimientoPrincipios')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">Protocolo de seguridad de la
                                                                    información*:</label>
                                                                {!! Form::select(
                                                                    'protocoloSeguridad',
                                                                    [
                                                                        'Otro' => 'Otro',
                                                                        'HTTPS' => 'HTTPS',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('protocoloSeguridad'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('protocoloSeguridad')
                                                                    <small class="text-danger">{{ $message }}</small>
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
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Datos Personales Incluidos
                                        en el Sistema.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::model($sistema->datosPersonal, ['route' => ['datosPersonal.update', $sistema->id], 'method' => 'PUT', 'id' => 'datosPersonalesForm']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema maneja datos
                                                                    personales?*:</label>
                                                                {!! Form::select(
                                                                    'manejoDatosPersonales',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('manejoDatosPersonales'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('manejoDatosPersonales')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fundamento legal*:</label>
                                                                {!! Form::textarea('fundamentoLegal', old('fundamentoLegal'), [
                                                                    'class' => 'form-control',
                                                                    'rows' => 1,
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el fundamento',
                                                                ]) !!}
                                                                @error('fundamentoLegal')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de datos personales*:</label>
                                                                {!! Form::textarea('tipoDatosPersonales', old('tipoDatosPersonales'), [
                                                                    'class' => 'form-control',
                                                                    'rows' => 1,
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el tipo',
                                                                ]) !!}
                                                                @error('tipoDatosPersonales')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Formas de obtención de los datos
                                                                    personales*:</label>
                                                                {!! Form::select(
                                                                    'formaObtencion',
                                                                    [
                                                                        'Directa' => 'Directa',
                                                                        'Indirecta' => 'Indirecta',
                                                                        'Formulario' => 'Formulario',
                                                                        'No aplica' => 'No aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('formaObtencion'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('formaObtencion')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Portabilidad de datos*:</label>
                                                                {!! Form::select(
                                                                    'portabilidadDatos',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('portabilidadDatos'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('portabilidadDatos')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Transferencia de datos*:</label>
                                                                {!! Form::select(
                                                                    'transferenciaDatos',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('transferenciaDatos'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('transferenciaDatos')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="">Tipo de soporte*:</label>
                                                                {!! Form::select(
                                                                    'tipoSoporte',
                                                                    [
                                                                        'Digital' => 'Digital',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('tipoSoporte'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('tipoSoporte')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6">
                                                            <div class="form-group">
                                                                <label for="">El sistema cuenta con Aviso de
                                                                    Privacidad*:</label>
                                                                {!! Form::select(
                                                                    'avisoPrivacidad',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('avisoPrivacidad'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('avisoPrivacidad')
                                                                    <small class="text-danger">{{ $message }}</small>
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
                                                    {!! Form::model($sistema->mantenimiento, ['route' => ['mantenimiento.update', $sistema->id], 'method' => 'PUT', 'id' => 'mantenimientoForm']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema requiere
                                                                    mantenimiento?*:</label>
                                                                {!! Form::select(
                                                                    'requiereMantenimiento',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'Eventualmente' => 'Eventualmente',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('requiereMantenimiento'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('requiereMantenimiento')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de mantenimiento*:</label>
                                                                {!! Form::select(
                                                                    'tipoMantenimiento',
                                                                    [
                                                                        'Evolutivo' => 'Evolutivo',
                                                                        'No Aplica' => 'No Aplica',
                                                                        'Correctivo' => 'Correctivo',
                                                                        'Predictivo' => 'Predictivo',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('tipoMantenimiento'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('tipoMantenimiento')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Descripción del
                                                                    mantenimiento*:</label>
                                                                {!! Form::text('descripcionMantenimiento', old('descripcionMantenimiento'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese la descripción',
                                                                ]) !!}
                                                                @error('descripcionMantenimiento')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Periocidad de mantenimiento*:</label>
                                                                {!! Form::select(
                                                                    'periocidadMantenimiento',
                                                                    [
                                                                        'No Aplica' => 'No Aplica',
                                                                        'Por Evento' => 'Por Evento',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        '1 vez al año' => '1 vez al año',
                                                                        '1 a 2 veces al año' => '1 a 2 veces al año',
                                                                        '3 a 4 veces al año' => '3 a 4 veces al año',
                                                                        '4 a 6 veces al año' => '4 a 6 veces al año',
                                                                        '6 a 12 veces al año' => '6 a 12 veces al año',
                                                                    ],
                                                                    old('periocidadMantenimiento'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('periocidadMantenimiento')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área responsable*:</label>
                                                                {!! Form::text('areaResponsable', old('areaResponsable'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el área',
                                                                ]) !!}
                                                                @error('areaResponsable')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del técnico
                                                                    responsable*:</label>
                                                                {!! Form::text('nombreTecnicoResponsable', old('nombreTecnicoResponsable'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre',
                                                                ]) !!}
                                                                @error('nombreTecnicoResponsable')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">Nombre del coordinador de
                                                                    mantenimiento*:</label>
                                                                {!! Form::text('nombreCoordinador', old('nombreCoordinador'), [
                                                                    'class' => 'form-control',
                                                                    'required' => 'required',
                                                                    'placeholder' => 'Ingrese el nombre',
                                                                ]) !!}
                                                                @error('nombreCoordinador')
                                                                    <small class="text-danger">{{ $message }}</small>
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
                                                <div class="card-body" id='documentoFormContainer'>
                                                    {!! Form::model($sistema->documento, ['route' => ['documento.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra documentado
                                                                    con base en la normatividad de la Adminstración Pública
                                                                    General?*:</label>
                                                                {!! Form::select(
                                                                    'documentado',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('documentado'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('documentado')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual de
                                                                    usuario?*:</label>
                                                                {!! Form::select(
                                                                    'manualUsuario',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('manualUsuario'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('manualUsuario')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual
                                                                    técnico?*:</label>
                                                                {!! Form::select(
                                                                    'manualTecnico',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('manualTecnico'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('manualTecnico')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿Existe un manual de
                                                                    mantenimiento?*:</label>
                                                                {!! Form::select(
                                                                    'manualMantenimiento',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                    ],
                                                                    old('manualMantenimiento'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('manualMantenimiento')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con una política
                                                                    de privacidad?*:</label>
                                                                {!! Form::select(
                                                                    'politicaPrivacidad',
                                                                    [
                                                                        'Si' => 'Si',
                                                                        'No' => 'No',
                                                                        'En Desarrollo' => 'En Desarrollo',
                                                                        'Campo Vacio' => 'Campo Vacio',
                                                                        'Aviso de Privacidad' => 'Aviso de Privacidad',
                                                                    ],
                                                                    old('politicaPrivacidad'),
                                                                    ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción'],
                                                                ) !!}
                                                                @error('politicaPrivacidad')
                                                                    <small class="text-danger">{{ $message }}</small>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <h4>Subir Documentación del Sistema.</h4>

                                                    <div class="row">
                                                        @for ($i = 0; $i < count($nombreArchivo); $i++)
                                                            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                                <div class="form-group">
                                                                    <label
                                                                        for="nombreArchivo{{ $i }}">{{ $nombreArchivo[$i] }}</label>
                                                                    {!! Form::file('nombreArchivo[]', ['class' => 'form-control', 'multiple' => true, 'id' => "nombreArchivo{$i}"]) !!}

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script type="text/javascript">
        $('#datetimepicker').datatimepicker({
            format: 'yyyy-mm-dd'
        });
    </script>

    <script>
        function setupFormValidation(formId, successCallback) {
            $('#' + formId).submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: $(this).attr('action'),
                    data: $(this).serialize() + '&_method=PUT',
                    success: function(response) {
                        clearValidationErrors(formId);
                        successCallback(response.success);
                    },
                    error: function(xhr) {
                        if (xhr.status === 422) {
                            handleValidationErrors(formId, xhr.responseJSON.errors);
                        } else {
                            console.error('Error en la petición AJAX:', xhr);
                        }
                    }
                });
            });

            $('#' + formId + ' input').on('input', function() {
                removeErrorMessages(formId, $(this).attr('name'));
            });

            function clearValidationErrors(formId) {
                $('#' + formId + ' small').remove();
            }

            function handleValidationErrors(formId, errors) {
                $.each(errors, function(key, value) {
                    removeErrorMessages(formId, key);
                    $('#' + formId + ' [name="' + key + '"]').after('<small style="color: red;">' + value[0] + '</small>');
                });
            }

            function removeErrorMessages(formId, fieldName) {
                $('#' + formId + ' [name="' + fieldName + '"]').siblings('small').remove();
            }
        }

        function showSuccessMessage(message) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: message,
                showConfirmButton: false,
                timer: 3500
            });
        }

        // Uso para el primer formulario
        setupFormValidation('datosForm', function(successMessage) {
            showSuccessMessage(successMessage);
        });
        
        setupFormValidation('rolesForm', function(successMessage) {
            showSuccessMessage(successMessage);
        });

        // Uso para otros formularios
        setupFormValidation('informacionForm', function(successMessage) {
            // Función específica para el otro formulario
            showSuccessMessage(successMessage);
        });

        setupFormValidation('caracteristicasForm', function(successMessage) {
            // Función específica para el otro formulario
            showSuccessMessage(successMessage);
        });

        setupFormValidation('seguridadForm', function(successMessage) {
            // Función específica para el otro formulario
            showSuccessMessage(successMessage);
        });

        setupFormValidation('datosPersonalesForm', function(successMessage) {
            // Función específica para el otro formulario
            showSuccessMessage(successMessage);
        });

        setupFormValidation('mantenimientoForm', function(successMessage) {
            // Función específica para el otro formulario
            showSuccessMessage(successMessage);
        });
    </script>
@stop
