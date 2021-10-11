@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('layouts.cards.card_role')
        </div>

        <div class="col-md-9">
            <div class="bg-dark rounded shadow p-4">
                @include('layouts.cards.card_actions')
            </div>
        </div>
    </div>

@endsection
