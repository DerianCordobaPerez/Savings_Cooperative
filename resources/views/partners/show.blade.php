@extends('layouts.app')

@section('content')

    @if ($partner->requests->count() > 0)
        <div class="container">

            <h2 class="text-white text-center"><b>Nombre socio:</b> <u>{{$partner->user_name}}</u><br></h2>

            <table class="table table-dark table-striped shadow p-3 mb-5 bg-body rounded">
                <thead>
                <tr>
                    <th scope="col"><h3>Informacion</h3> </th>
                    <th scope="col"><h3>Acciones</h3> </th>
                </tr>
                </thead>

                <tbody>
                    @foreach($partner->requests as $request)
                        <tr>
                            <td>
                                <b>Fecha de admision:</b> {{$request->date_of_admission}}<br>
                                <b>Direccion:</b> {{$request->direction}}<br>
                                <b>Estado:</b> {{$request->status}}<br>
                                <b>Fecha:</b> {{$request->date}}<br>
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
                    <a href="{{route('requests.create')}}" class="btn btn-success text-white">Crear un socio</a>
                </div>
            </div>
        </div>
    @endif

@endsection

