@extends('layouts.app')

@section('content')

    @if (count($partners) > 0)
        <div class="container">
            <table class="table table-dark table-striped shadow p-3 mb-5 bg-body rounded">
                <thead>
                    <tr>
                        <th scope="col"><h3>Informacion</h3> </th>
                        <th scope="col"><h3>Acciones</h3> </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($partners as $partner)
                        <tr>
                            <td>
                                <b>Nombre socio:</b> {{$partner->user_name}}<br>
                                <b>Identificacion:</b> {{$partner->identification}}<br>
                                <b>Oficina de origen:</b> {{$partner->office_of_origin}}<br>
                                <b>Fecha de admision:</b> {{$partner->date_of_admission}}<br>
                            </td>

                            <td>
                                <div class="btn-group mx-auto" role="group" aria-label="derian">

                                    @if($partner->requests->count() > 0)
                                        <a href="{{route('partners.show', $partner->id)}}" class="btn btn-success text-white" >
                                            <i class="fas fa-scroll"></i>
                                            Ver solicitudes
                                        </a>
                                    @else
                                        <a href="{{route('requests.create')}}" class="btn btn-success text-white" >
                                            <i class="fas fa-scroll"></i>
                                            Crear una solicitud
                                        </a>
                                    @endif

                                    <a href="{{route('partners.edit', $partner->id)}}" class="btn btn-warning text-white mx-2">
                                        <i class="fas fa-pencil-alt"></i>
                                        Editar
                                    </a>

                                    <form action="{{route('partners.destroy', $partner->id)}}" method="POST">
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

