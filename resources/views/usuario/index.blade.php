@extends('adminlte::page')

@section('title', 'PIASA')

<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

@section('content')
    <div class="container">
        <br>
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
                                <a class="btn btn-primary" href="{{ route('usuario.create') }}"><i class="fa fa-user-plus">
                                    </i></a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            <div class="table-responsive" style="padding: 2%">
                <table id="usuarios" class="table table-hover">
                    <thead class="table-primary">
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Puesto</th>
                        <th>Area Adscripción</th>
                        <th>Estado</th>
                        <th>Correo Electónico</th>
                        <th>Rol</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </thead>

                    <tbody>
                        @foreach ($usuarios as $Users)
                            <tr>
                                <td>{{ $Users->name }}</td>
                                <td>{{ $Users->nombre }}</td>
                                <td>{{ $Users->apellidoPaterno }}</td>
                                <td>{{ $Users->apellidoMaterno }}</td>
                                <td>{{ $Users->puesto }}</td>
                                <td>{{ $Users->areaAdscripcion }}</td>
                                <td>
                                    @if (!empty($Users->estado == 0))
                                    <h6>{{ 'Activo' }}</h6>@else<h6>{{ 'Inactivo' }}</h6>
                                    @endif
                                </td>
                                <td>{{ $Users->email }}</td>
                                <td>
                                    @if (!empty($Users->getRoleNames()))
                                        @foreach ($Users->getRoleNames() as $Rol)
                                            <h6>{{ $Rol }}</h6>
                                        @endforeach
                                    @endif
                                </td>
                                <td><a href="{{ url('usuario/' . $Users->id . '/edit') }}"
                                        class="btn btn-warning"><!-- Editar --><i class="fas fa-user-edit"></i></a></td>
                                <td>
                                    <form action="{{ url('usuario/' . $Users->id) }}" method="post" id="deleteForm">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger" onclick="confirmDelete(event)">
                                            <!-- Eliminar -->
                                            <i class="fa fa-user-times"></i>
                                        </button>
                                    </form>
                                    <script>
                                        function confirmDelete(event) {
                                            // Prevenir el envío automático del formulario
                                            event.preventDefault();

                                            // Utilizar SweetAlert2 para el cuadro de diálogo de confirmación
                                            Swal.fire({
                                                title: "¿Estás seguro?",
                                                text: "¡No podrás revertir esto!",
                                                icon: "warning",
                                                showCancelButton: true,
                                                confirmButtonColor: "#3085d6",
                                                cancelButtonColor: "#d33",
                                                confirmButtonText: "Sí, eliminarlo"
                                            }).then((result) => {
                                                // Si el usuario confirma, entonces envía el formulario manualmente
                                                if (result.isConfirmed) {
                                                    document.getElementById('deleteForm').submit();
                                                }
                                            });
                                        }
                                    </script>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        new DataTable('#usuarios');
    </script>

@stop
