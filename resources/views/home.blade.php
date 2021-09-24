@extends('layouts.app')

@section('content')
    <div class="rounded shadow bg-dark p-4 my-4">
        <h2 class="text-center text-white"><u>Sección de Registro y Modificación</u></h2>
    </div>

    <div class="rounded shadow bg-dark p-4 my-4">
        <h2 class="text-white text-center">Acciones para administrador</h2>

        <div class="row">
            <div class="col-md-3 my-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-bold">Crear roles</h3>
                    </div>

                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary text-white" href="{{route('roles.create')}}"><i class="fas fa-list-alt"></i> Crear roles</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-bold">Editar roles</h3>
                    </div>

                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary text-white" href="{{route('roles.index')}}"><i class="fas fa-pencil-alt"></i> Editar roles</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-bold">Crear Usuario</h3>
                    </div>

                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary text-white" href="{{route('userRoles.create')}}"><i class="fas fa-user-plus"></i> Crear Usuario</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 my-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center text-bold">Editar Usuario</h3>
                    </div>

                    <div class="card-footer">
                        <div class="d-grid gap-2">
                            <a class="btn btn-primary text-white" href="{{route('userRoles.index')}}"><i class="fas fa-user-edit"></i> Editar Usuario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
