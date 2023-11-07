@extends('adminlte::page')

@section('title', 'PIASA')

@section('content_header')
    <h1>Bienvenidos a PIASA</h1>
@stop

@section('content')
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
@stop

@section('css')
	@vite(['resources/css/style_home.scss'])
@stop