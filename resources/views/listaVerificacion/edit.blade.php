@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <section class="section">
        <div class="section-header">
            <br>
            <h3 class="page__heading">Crear Sistema.</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show" role="alert">
                                    <strong>¡Revise los campos!</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                    @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif

                            {!! Form::model($sistema, ['method' => 'PUT', 'route' => ['sistema.update', $sistema->id]]) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Sistema: </label>
                                        {!! Form::text('nombreSistema', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Descripción: </label>
                                        {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Siglas: </label>
                                        {!! Form::text('siglas', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Clasificación: </label>
                                        {!! Form::text('clasificacion', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Área Desarrolladora: </label>
                                        {!! Form::text('areaDesarrolladora', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">¿El sistema se encuentra activo: </label>
                                        {!! Form::text('estadoActivo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Especifique la URL del sitio web: </label>
                                        {!! Form::text('url', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Consecutivo: </label>
                                        {!! Form::text('consecutivo', null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <input class="btn btn-info" style="margin: 1%" type="reset" value="Restablecer">
                                <input class="btn btn-primary" style="margin: 1%" type="submit" value="Guardar">
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
