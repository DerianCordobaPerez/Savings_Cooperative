@extends('layouts.app')

@section('content')

    <div class="row my-2">
        <div class="col-md-12">
            <h2 class="text-center text-white my-2"><u>{{!isset($account) ? 'Creacion' : 'Edicion'}} de cuentas</u></h2>

            <div class="card bg-dark rounded shadow text-white col-8 mx-auto p-4">
                <form method="POST" action="{{!isset($account) ? route('accounts.store') : route('accounts.update', $account->id)}}">
                    @csrf
                    @if(isset($account)) @method('PUT') @endif

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Modulo</label>
                        <select name="module">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="my-2 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
