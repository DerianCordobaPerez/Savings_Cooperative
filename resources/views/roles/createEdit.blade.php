@extends('layouts.app')
@section('content')
    <div class="row my-2">
        <div class="col-md-12">
            <h2 class="text-center text-white my-2"><u>{{!isset($role) ? 'Creacion' : 'Edicion'}} de roles</u></h2>

            <div class="card bg-dark rounded shadow text-white col-8 mx-auto p-4">
                <form method="POST" action="{{!isset($role) ? route('roles.store') : route('roles.update', $role->id)}}">
                    @csrf

                    @if(isset($role))
                        @method('PUT')
                    @endif

                    <label class="my-2">
                        Nombre del rol:
                        <input type="text" name="role_name" class="mx-2 rounded" value="{{isset($role) ? $role->role_name : ''}}">
                    </label>

                    <label class="mx-2">
                        Seleccionar todos los privilegios
                        <input type="checkbox" onclick="toggle(this)">
                    </label>

                    <div class="row text-justify">
                        @foreach($privileges as $privilege)
                            <div class="col-md-6">
                                @foreach($privilege as $item)
                                    <div class="row my-4 form-check form-switch">
                                        <label>
                                            <input type="checkbox" name="privileges[]"
                                               @if(isset($role))
                                                   @if($role->privileges->contains($item->id)) checked @endif
                                               @endif
                                               value="{{$item->id}}" class="form-check-input"
                                            >
                                            {{$item->name}}
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>

                    <div class="my-2 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const toggle = source => {
            const checkboxes = document.getElementsByName('privileges[]')
            for(let i = 0; i < checkboxes.length; ++i)
                checkboxes[i].checked = source.checked
        }
    </script>
@endsection
