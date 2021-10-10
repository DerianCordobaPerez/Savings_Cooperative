@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('layouts.cards.card_role')
        </div>

        <div class="col-md-9">
            <div class="bg-dark rounded shadow p-4">

                <h4 class="text-white text-center">
                    <u>Acciones disponibles</u>
                </h4>

                @include('layouts.cards.card_actions')
            </div>
        </div>
    </div>

@endsection
