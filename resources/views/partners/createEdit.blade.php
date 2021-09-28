@extends('layouts.app')

@section('content')

    <div class="row my-2">
        <div class="col-md-12">
            <h2 class="text-center text-white my-2"><u>{{!isset($partner) ? 'Creacion' : 'Edicion'}} de socios</u></h2>

            <div class="card bg-dark rounded shadow text-white col-8 mx-auto p-4">
                <form method="POST" action="{{!isset($partner) ? route('partners.store') : route('partners.update', $partner->id)}}">
                    @csrf
                    @if(isset($partner)) @method('PUT') @endif

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Tipo</label>
                        <select name="type_id">
                            <option value="natural">Natural</option>
                            <option value="legal">Juridico</option>
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Identificacion</label>
                        <input type="text" class="form-control col-md-6" name="identification" value="{{$partner->identification ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Nombre usual</label>
                        <input type="text" class="form-control col-md-6" name="user_name" value="{{$partner->user_name ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Relacion</label>
                        <input type="text" class="form-control col-md-6" name="relation" value="{{$partner->user_name ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Grupo economico</label>
                        <input type="text" class="form-control col-md-6" name="economic_group" value="{{$partner->economic_group ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Tax exonerado</label>
                        <input type="number" class="form-control col-md-6" name="tax_exonerated" value="{{$partner->tax_exonerated ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Relacion asegurado</label>
                        <input type="text" class="form-control col-md-6" name="assured_relationship" value="{{$partner->assured_relationship ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Sucursal de origen</label>
                        <input type="text" class="form-control col-md-6" name="branch_of_origin" value="{{$partner->branch_of_origin ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">oficina de origen</label>
                        <input type="text" class="form-control col-md-6" name="office_of_origin" value="{{$partner->office_of_origin ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">oficina de origen</label>
                        <input type="date" class="form-control col-md-6" name="date_of_admission" value="{{$partner->date_of_admission ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Ejecutivo</label>
                        <input type="text" class="form-control col-md-6" name="executive" value="{{$partner->executive ?? ''}}" required>
                    </div>

                    <div class="my-2 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
