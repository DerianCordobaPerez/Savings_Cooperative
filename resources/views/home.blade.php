@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-3">
            @include('layouts.cards')
        </div>

        <div class="col-md-9">
            <div class="bg-white rounded shadow">
                @include('')
            </div>
        </div>
    </div>

@endsection
