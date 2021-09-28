
@extends('layouts.app')

@section('content')

    @if (count($requests) > 0)
        <div class="container">
            <table class="table table-dark table-striped shadow p-3 mb-5 bg-body rounded">
                <thead>
                <tr>
                    <th scope="col"><h3>Informacion</h3> </th>
                    <th scope="col"><h3>Acciones</h3> </th>
                </tr>
                </thead>

                <tbody>
                @foreach($requests as $request)
                    <tr>
                        <td>
                            <b>Nombre usuario:</b> {{$request->user_role->employee->name}}<br>
                            <b>Nombre socio:</b> {{$request->partner->user_name}}<br>
                            <b>Modulo:</b> {{$request->module}}<br>
                            <b>Producto:</b> {{$request->product}}<br>
                            <b>Sucursal:</b> {{$request->branch_office}}<br>
                            <b>Oficina:</b> {{$request->office}}<br>
                        </td>

                        <td>
                            <div class="btn-group mx-auto" role="group" aria-label="derian">

                                <a href="{{route('requests.edit', $request->id)}}" class="btn btn-warning text-white mx-2">
                                    <i class="fas fa-pencil-alt"></i>
                                    Editar
                                </a>

                                <form action="{{route('requests.destroy', $request->id)}}" method="POST">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger" name="send">
                                        <i class="fas fa-trash-alt"></i>
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <div class="my-2 d-grid gap-2 col-6 mx-auto">
                <a href="{{route('home')}}" class="btn btn-success text-white">Volver al inicio</a>
            </div>

        </div>
    @else
        <div class="bg-dark p-4 rounded shadow p-3 mb-5">
            <h1 class="text-white text-center my-2">No se han agregado socios</h1>

            <div class="row mx-auto">
                <div class="my-2 d-grid gap-2 col-6 mx-auto">
                    <a href="{{route('home')}}" class="btn btn-success text-white">Volver al inicio</a>
                </div>

                <div class="my-2 d-grid gap-2 col-6 mx-auto">
                    <a href="{{route('partners.create')}}" class="btn btn-success text-white">Crear un socio</a>
                </div>
            </div>
        </div>
    @endif

@endsection

