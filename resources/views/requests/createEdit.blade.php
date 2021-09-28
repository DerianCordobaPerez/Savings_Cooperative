@extends('layouts.app')

@section('content')

    <div class="row my-2">
        <div class="col-md-12">
            <h2 class="text-center text-white my-2"><u>{{!isset($request) ? 'Creacion' : 'Edicion'}} de solicitud</u></h2>

            <div class="card bg-dark rounded shadow text-white col-8 mx-auto p-4">
                <form method="POST" action="{{!isset($request) ? route('requests.store') : route('requests.update', $request->id)}}">
                    @csrf
                    @if(isset($request))
                        @method('PUT')
                        <input type="hidden" name="partner_id" value="{{$request->partner->id}}">

                    @else
                        <div class="form-input input-group my-2">
                            <label class="input-group-text">Socio</label>
                            <select name="partner_id">
                                @foreach($partners as $partner)
                                    <option value="{{$partner->id}}">{{$partner->user_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    @endif

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Usuario</label>
                        <select name="user_role_id">
                            @foreach($user_roles as $user_role)
                                <option value="{{$user_role->id}}">{{$user_role->employee->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Fecha de admision</label>
                        <input type="date" class="form-control col-md-6" name="date_of_admission" value="{{$request->date_of_admission ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Modulo</label>
                        <select name="module">
                            @foreach($modules as $module)
                                <option value="{{$module->id}}">{{$module->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Producto</label>
                        <select name="product">
                            @foreach($products as $product)
                                <option value="{{$product->id}}">{{$product->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Sucursal</label>
                        <select name="branch_office">
                            @foreach($branch_offices as $branch_office)
                                <option value="{{$branch_office->id}}">{{$branch_office->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Oficina</label>
                        <select name="office">
                            @foreach($offices as $office)
                                <option value="{{$office->id}}">{{$office->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Fecha</label>
                        <input type="date" class="form-control col-md-6" name="date" value="{{$request->date ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Direccion</label>
                        <input type="text" class="form-control col-md-6" name="direction" value="{{$request->direction ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Observacion</label>
                        <input type="text" class="form-control col-md-6" name="observation" value="{{$request->observation ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Estado</label>
                        <input type="text" class="form-control col-md-6" name="status" value="{{$request->status ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Numero de cuenta</label>
                        <select name="number_account">
                            @foreach($accounts as $account)
                                <option value="{{$account->id}}">{{$account->id}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Monto</label>
                        <input type="number" class="form-control col-md-6" name="amount" value="{{$request->amount ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Efectivo</label>
                        <input type="number" class="form-control col-md-6" name="cash" value="{{$request->cash ?? ''}}" required>
                    </div>

                    <div class="form-input input-group my-2">
                        <label class="input-group-text">Cheque</label>
                        <input type="text" class="form-control col-md-6" name="check" value="{{$request->check ?? ''}}" required>
                    </div>

                    <div class="my-2 d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
