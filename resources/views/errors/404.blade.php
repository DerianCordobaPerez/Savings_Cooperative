@extends('layouts.app')

@section('content')
    <div class="mt-4 mx-auto alert alert-danger text-center">
        <h2 class="display-2">404</h2>
        <p class="display-5">Oops! La pagina no ha sido encontrada.</p>
        <a class="display-6" href="{{route('home')}}">Volver al inicio</a>
    </div>
@endsection
