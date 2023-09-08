@extends('adminlte::page')

@section('title', 'PIASA')

@section('content_header')
<div class="container">
    <br><br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="class col md-8">
                    <h2 class="card-title">Lista de usuarios registrados.</h2>
                </div>
                <div class="class col md 4">
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <!--onclick es para la función del botón (target para que abra una ventana nueva) 
                            data-href es para indicar que ruta debe ocupar
                            el ID es un identificador-->
                            @can('crear-usuario')
                            <a class="btn btn-primary" href="{{ route('usuario.create') }}">+ Nuevo</a>
                            @endcan
                    </div>
                </div>
            </div>
        </div>
        <div class="container py-4">
            <table class="table table-striped table-hover">

                <thead>
                    <th>ID</th>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Puesto</th>
                    <th>Area Adscripción</th>
                    <th>Estado</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th></th>
                    <th></th>
                </thead>

                <tbody>
                    @foreach($User as $Users)
                    <tr>
                        <td>{{ $Users->id }}</td>
                        <td>{{ $Users->name}}</td>
                        <td>{{ $Users->nombre }}</td>
                        <td>{{ $Users->apellidoPaterno }}</td>
                        <td>{{ $Users->apellidoMaterno }}</td>
                        <td>{{ $Users->puesto }}</td>
                        <td>{{ $Users->areaAdscripcion }}</td>
                        <td>@if(!empty ($Users->estado==0))<h6>{{'Activo'}}</h6>@else<h6>{{'Inactivo'}}</h6>@endif</td>
                        <td>{{ $Users->email}}</td>
                        <td>@if (!empty ($Users->getRoleNames()))
                            @foreach($Users->getRoleNames() as $Rol)    
                            <h6>{{$Rol}}</h6>
                            @endforeach
                            @endif
                        </td>
                        <td><a href="{{ url('usuario/'.$Users->id.'/edit')}}" 
                        class="btn btn-warning btn-sm"><!-- Editar --><i class="fas fa-fw fa-chart-pie"></i></a></td>
                        <td>
                            <form action="{{ url('usuario/'.$Users->id) }}" method="post">
                                @method("DELETE")
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm"><!-- Eliminar --><i class="fas fa-fw fa-chart-pie"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop