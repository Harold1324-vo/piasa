@extends('adminlte::page')

@section('title', 'PIASA')

@section('content')
    <section class="section">
        <br>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <h2 class="text-center" style="padding-top: 1%">Datos del Sistema</h2>
                        <div class="card-body">
                            {!! Form::open(['route' => 'sistema.store', 'method' => 'POST']) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Nombre del Sistema*: </label>
                                        {!! Form::text('nombreSistema', old(''), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Ingrese el nombre']) !!}
                                        @error('nombreSistema')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Descripción*: </label>
                                        {!! Form::textarea('descripcion', old(''), ['class' => 'form-control', 'rows' => 1, 'required' => 'required', 'placeholder' => 'Ingrese la descripción']) !!}
                                        @error('descripcion')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Siglas*: </label>
                                        {!! Form::text('siglas', old(''), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Ingrese las siglas']) !!}
                                        @error('siglas')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Clasificación*: </label>
                                        {!! Form::select('clasificacion', [
                                            'Aplicación Móvil' => 'Aplicación Móvil',
                                            'Juego' => 'Juego',
                                            'Portal' => 'Portal',
                                            'Sistema' => 'Sistema',
                                            ], old(''),['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una clasificación']) !!}
                                        @error('clasificacion')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Área Desarrolladora*: </label>
                                        {!! Form::select('areaDesarrolladora', [
                                            'DDEPO' => 'DDEPO',
                                            'DGPJDTF' => 'DGPJDTF',
                                            'DTIC' => 'DTIC',
                                            ], old(''),['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una área']) !!}
                                        @error('areaDesarrolladora')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">¿El sistema se encuentra activo?*: </label>
                                        {!! Form::select('estadoActivo', [
                                            'En desarrollo' => 'En desarrollo',
                                            'Si' => 'Si',
                                            'No' => 'No',
                                            ], old(''),['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Seleccione una opción']) !!}
                                        @error('estadoActivo')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Especifique la URL del sitio web*: </label>
                                        {!! Form::text('url', old(''), ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Ingrese la URL']) !!}
                                        @error('url')
                                            <small style="color: red;">{{ $message }}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                                    <div class="form-group">
                                        <label for="">Consecutivo*: </label>
                                        {!! Form::text('consecutivo', old(''), ['class' => 'form-control', 'required' => 'required']) !!}
                                        @error('consecutivo')
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
                                    <input class="btn btn-secondary ms-md-2" type="button" value="Regresar" onclick="window.location.href='{{ route('sistema.index') }}'" style="margin: 3%">
                                    <input class="btn btn-info ms-md-2" type="reset" value="Restablecer" style="margin: 3%">
                                    <input class="btn btn-primary ms-md-2" type="submit" value="Guardar" style="margin: 3%">
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
    </section>
@stop

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
</script>
