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
                                    <h2 class="page__heading text-center" style="padding: 1%;">Información Principal.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    {!! Form::model($sistema, ['method' => 'PUT', 'route' => ['sistema.update', $sistema->id]]) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del Sistema: </label>
                                                                {!! Form::text('nombreSistema', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Descripción: </label>
                                                                {!! Form::text('descripcion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Siglas: </label>
                                                                {!! Form::text('siglas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Clasificación: </label>
                                                                {!! Form::text('clasificacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área Desarrolladora: </label>
                                                                {!! Form::text('areaDesarrolladora', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra activo:
                                                                </label>
                                                                {!! Form::text('estadoActivo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Especifique la URL del sitio web:
                                                                </label>
                                                                {!! Form::text('url', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Consecutivo: </label>
                                                                {!! Form::text('consecutivo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::model($sistema->rolesSistemas, ['route' => ['rolsistemas.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Líder del proyecto: </label>
                                                                {!! Form::text('nombreLiderProyecto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del Líder del proyecto:
                                                                </label>
                                                                {!! Form::text('puestoLiderProyecto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Administrador del proyecto:
                                                                </label>
                                                                {!! Form::text('nombreAdministradorProyecto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del administrador del
                                                                    proyecto: </label>
                                                                {!! Form::text('puestoAdministradorProyecto', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Desarrollador/Programador:
                                                                </label>
                                                                {!! Form::text('nombreDesarrollador', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del
                                                                    Desarrollador/Programador </label>
                                                                {!! Form::text('puestoDesarrollador', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área usuaria </label>
                                                                {!! Form::text('areaUsuaria', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Puesto del usuario: </label>
                                                                {!! Form::text('puestoUsuario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::model($sistema->informacion, ['route' => ['informacion.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Año que el sistema comenzó
                                                                    operaciones: </label>
                                                                {!! Form::text('anoComienzoOperaciones', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema solo es para
                                                                    consultar
                                                                    información?</label>
                                                                {!! Form::text('consultaInformacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema requiere
                                                                    actualización? </label>
                                                                {!! Form::text('requiereActualizacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fecha de última actualización
                                                                    del sistema:
                                                                </label>
                                                                {!! Form::date('fechaUltimaActualizacion', null, ['class' => 'form-control', 'id' => 'datatimepicker', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Datos abiertos:</label>
                                                                {!! Form::text('datosAbiertos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de publicación:</label>
                                                                {!! Form::text('tipoPublicacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nivel de interacción:</label>
                                                                {!! Form::text('nivelInteraccion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fase Actual: </label>
                                                                {!! Form::text('faseActual', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Etapa en el que se encuentra
                                                                    el sistema:</label>
                                                                {!! Form::text('etapaActual', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Sub-etapa en el que se
                                                                    encuentra el
                                                                    sistema:</label>
                                                                {!! Form::text('subEtapaActual', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El Sistema es legado?
                                                                </label>
                                                                {!! Form::text('legado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Modelo de operación:</label>
                                                                {!! Form::text('modeloOperacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con
                                                                    dependencias:</label>
                                                                {!! Form::text('interaccionDependencias', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con otras
                                                                    áreas</label>
                                                                {!! Form::text('interaccionOtrasAreas', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra
                                                                    migrado?</label>
                                                                {!! Form::text('migrado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Características Técnicas.</h2>
                                    <div class="section-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-body">
                                                    @if ($errors->any())
                                                        <div class="alert alert-dark alert-dismissible fade show"
                                                            role="alert">
                                                            <strong>¡Revise los campos!</strong>
                                                            @foreach ($errors->all() as $error)
                                                                <span class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::model($sistema->caracteristica, ['route' => ['caracteristica.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Sistema Operativo: </label>
                                                                {!! Form::text('sistemaOperativo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Control de Versiones:
                                                                </label>
                                                                {!! Form::text('controlVersiones', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Versión del sistema </label>
                                                                {!! Form::text('versionSistema', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Lenguaje de programación del
                                                                    sistema: </label>
                                                                {!! Form::text('lenguajeProgramacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Interacción con otro lenguaje
                                                                    de
                                                                    programación:</label>
                                                                {!! Form::text('otroLenguajeProgramacion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Frameworks:</label>
                                                                {!! Form::text('frameworks', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Despliegue:</label>
                                                                {!! Form::text('despliegue', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Si es otro servidor web,
                                                                    especificarlo:</label>
                                                                {!! Form::text('otroServidorWeb', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Manejador de base de
                                                                    datos:</label>
                                                                {!! Form::text('manejadorBD', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre de la base de
                                                                    datos:</label>
                                                                {!! Form::text('nombreBD', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Plataforma de desarrollo de
                                                                    software:</label>
                                                                {!! Form::text('plataformaDesarrollo', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema hace uso de una
                                                                    API?</label>
                                                                {!! Form::text('usoAPI', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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
                                                                <span class="badge badge-danger">{{ $error }}</span>
                                                            @endforeach
                                                            <button type="button" class="close" data-dismiss="alert"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                    @endif

                                                    {!! Form::model($sistema->documento, ['route' => ['documento.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema se encuentra
                                                                    documentado con base en
                                                                    la normatividad de la Adminstración Pública
                                                                    General?</label>
                                                                {!! Form::text('documentado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual
                                                                    de usuario?</label>
                                                                {!! Form::text('manualUsuario', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual
                                                                    técnico?</label>
                                                                {!! Form::text('manualTecnico', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema tiene un manual
                                                                    de
                                                                    mantenimiento?</label>
                                                                {!! Form::text('manualMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con una
                                                                    política de
                                                                    privacidad?</label>
                                                                {!! Form::text('politicaPrivacidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
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
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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

                                                    {!! Form::model($sistema->seguridad, ['route' => ['seguridad.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se han determinado roles y
                                                                    responsabilidades?</label>
                                                                {!! Form::text('determinarRoles', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿Se tiene identificado los
                                                                    procesos de borrado
                                                                    seguro de acuerdo a las políticas de seguridad
                                                                    de la información de
                                                                    la CONDUSEF?</label>
                                                                {!! Form::text('procesoBorrado', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema cuenta con un
                                                                    control de accesos de
                                                                    acuerdo a las políticas de seguridad de la
                                                                    información de la
                                                                    CONDUSEF?</label>
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
                                                                    incumplimiento?</label>
                                                                {!! Form::text('conocimientoPrincipios', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12">
                                                            <div class="form-group">
                                                                <label for="">Protocolo de seguridad de la
                                                                    información</label>
                                                                {!! Form::text('protocoloSeguridad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
                                                        </div>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <h2 class="page__heading text-center" style="padding: 1%;">Datos Personales Incluidos en el
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

                                                    {!! Form::model($sistema->datosPersonal, ['route' => ['datosPersonal.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema maneja datos
                                                                    personales?</label>
                                                                {!! Form::text('manejoDatosPersonales', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Fundamento legal</label>
                                                                {!! Form::text('fundamentoLegal', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de datos
                                                                    personales</label>
                                                                {!! Form::text('tipoDatosPersonales', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Formas de obtención de los
                                                                    datos
                                                                    personales</label>
                                                                {!! Form::text('formaObtencion', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Portabilidad de datos</label>
                                                                {!! Form::text('portabilidadDatos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Transferencia de
                                                                    datos</label>
                                                                {!! Form::text('transferenciaDatos', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de soporte</label>
                                                                {!! Form::text('tipoSoporte', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">El sistema cuenta con Aviso
                                                                    de
                                                                    Privacidad</label>
                                                                {!! Form::text('avisoPrivacidad', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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

                                                    {!! Form::model($sistema->mantenimiento, ['route' => ['mantenimiento.update', $sistema->id], 'method' => 'PUT']) !!}
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">¿El sistema requiere
                                                                    mantenimiento?</label>
                                                                {!! Form::text('requiereMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Tipo de mantenimiento</label>
                                                                {!! Form::text('tipoMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Descripción del
                                                                    mantenimiento</label>
                                                                {!! Form::text('descripcionMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Periocidad de
                                                                    mantenimiento</label>
                                                                {!! Form::text('periocidadMantenimiento', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Área responsable</label>
                                                                {!! Form::text('areaResponsable', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del técnico
                                                                    responsable</label>
                                                                {!! Form::text('nombreTecnicoResponsable', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                                            <div class="form-group">
                                                                <label for="">Nombre del coordinador de
                                                                    mantenimiento</label>
                                                                {!! Form::text('nombreCoordinador', null, ['class' => 'form-control', 'required' => 'required']) !!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                        <div class="d-flex flex-column flex-md-row justify-content-md-end">
                                                            <input class="btn btn-secondary ms-md-2" type="button" value="Regresar"
                                                            onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                                            <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                                            <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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
                            data-bs-slide="prev" style="background-color: aquamarine; height: 30px; width: 15%;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden" style="background-color: aquamarine; height: 30px; width: 60%; color:black;">Previo</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleInterval" role="button"
                            data-bs-slide="next" style="background-color: aquamarine; height: 30px; width: 15%;">
                            <span class="visually-hidden" style="background-color: aquamarine; height: 30px; width: 60%; color:black;">Siguiente</span>
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>

<script type="text/javascript">
    $('#datetimepicker').datatimepicker({
        format: 'yyyy-mm-dd'
    });
</script>
