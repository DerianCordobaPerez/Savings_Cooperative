@extends('layouts.app')
@section('content')

    <div class="row my-2">
        <div class="col-md-12">
            <h2 class="text-center text-white my-2"><u>{{!isset($userRole) ? 'Creacion' : 'Edicion'}} de empleado</u></h2>

            <div class="card bg-dark rounded shadow text-white col-8 mx-auto p-4">

                <form method="POST" action="{{!isset($userRole) ? route('userRoles.store') : route('userRoles.update', $userRole->id)}}">

                    @csrf
                    @if(isset($userRole))
                        @method('PUT')
                    @endif

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Nombre</label>
                        <input type="text" class="form-control col-md-6" name="name" value="{{$userRole->employee->name ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Identificacion</label>
                        <input type="text" class="form-control col-md-6" name="identification" value="{{$userRole->employee->identification ?? ''}}" required>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Genero</label>
                        </div>
                        <div class="col">
                            <label>
                                Femenino
                                <input type="radio" name="sex" value="f"
                                    @if(isset($userRole))
                                        @if($userRole->sex === 'f') checked @endif
                                    @endif
                                >
                            </label>

                            <label>
                                Masculino
                                <input type="radio" name="sex" value="m"
                                    @if(isset($userRole))
                                       @if($userRole->employee->sex === 'm') checked @endif
                                    @endif
                                >
                            </label>&nbsp;&nbsp;
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Estado Civil</label>
                        </div>
                        <div class="col">
                            <label>
                                Soltero
                                <input type="radio" name="marital_status" value="single"
                                    @if(isset($userRole))
                                       @if($userRole->employee->marital_status === 'single') checked @endif
                                    @endif
                                >
                            </label>

                            <label>
                                Casado
                                <input type="radio" name="marital_status" value="married"
                                    @if(isset($userRole))
                                       @if($userRole->employee->marital_status === 'married') checked @endif
                                    @endif
                                >
                            </label>&nbsp;&nbsp;

                            <label>
                                Relacion Libre
                                <input type="radio" name="marital_status" value="free relationship"
                                    @if(isset($userRole))
                                       @if($userRole->employee->marital_status === 'free relationship') checked @endif
                                    @endif
                                >
                            </label>&nbsp;&nbsp;
                        </div>
                    </div>

                    <!--Email-->
                    <div class="form-input input-group my-2">
                        <span class="input-group-text">Mail Personal</span>
                        <input type="email" class="form-control col-md-6" name="personal_mail" value="{{$userRole->employee->personal_mail ?? ''}}" required>
                    </div>
                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Mail Interno</label>
                        <input type="email" class="form-control col-md-6" name="internal_mail" value="{{$userRole->employee->internal_mail ?? ''}}" required>
                    </div>

                    <!--Clave-->
                    <div class="form-input input-group my-2">
                        <span class="input-group-text">Clave</span>
                        <input type="password" class="form-control col-md-6" name="password" required>
                    </div>

                    <!--Profesion-->
                    <div class="form-input input-group my-2">
                        <span class="input-group-text">Profesion</span>
                        <input type="text" class="form-control col-md-6" name="profession" value="{{$userRole->employee->profession ?? ''}}" required>
                    </div>

                    <!--Fecha-->
                    <div class="row">
                        <div class="form-input input-group my-2 col">
                            <span class="input-group-text">Fecha de Nacimiento</span>
                            <input type="date" class="form-control col-md-6" name="date_of_birth" value="{{$userRole->employee->date_of_birth ?? ''}}" required>
                        </div>

                        <div class="form-input input-group my-2 col">
                            <span class="input-group-text">Nacionalidad</span>
                            <select name="nationality">
                                <option>Nicaraguense</option>
                                <option>Aleman</option>
                                <option>Estado Unidense</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-input input-group my-2 col">
                            <span class="input-group-text">Fecha de Ingreso</span>
                            <input type="date" class="form-control col-md-6" name="date_of_admission" value="{{$userRole->employee->date_of_admission ?? ''}}" required>
                        </div>

                        <div class="form-input input-group my-2 col">
                            <span class="input-group-text">Fecha de Salida</span>
                            <input type="date" class="form-control col-md-6" name="departure_date" value="{{$userRole->employee->departure_date ?? ''}}" required>
                        </div>
                    </div>

                    <div class="form-input input-group my-2">
                        <span class="input-group-text">Rol</span>
                        <select name="role_id">
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">{{$role->role_name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="form-input input-group mb-2 col">
                            <span class="input-group-text">Fecha Inicio Rol</span>
                            <input type="date" class="form-control col-md-6" name="start_date" value="{{$userRole->start_date ?? ''}}" required>
                        </div>

                        <div class="form-input input-group mb-2 col">
                            <span class="input-group-text">Fecha Salida Rol</span>
                            <input type="date" class="form-control col-md-6" name="final_date" value="{{$userRole->final_date ?? ''}}" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button type="submit" name="send" class="btn btn-success">Guardar</button>
                        </div>

                        <div class="d-grid gap-2 col-6 mx-auto">
                            <a href="{{route('home')}}" class="btn btn-warning mx-2 ">Cancelar</a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
