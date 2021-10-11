<div class="row carousel-cards">
    <div class="card shadow">
        <div class="card-title">
            <img src="{{asset('img/cards/roles.jpg')}}" alt="card-img" class="card-img-top">
        </div>

        <div class="card-footer">
            <div class="dropdown">
                <a class="btn btn-primary mt-auto align-self-start fs-6 dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Roles
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('roles.create')}}">Crear</a></li>
                    <li><a class="dropdown-item" href="{{route('roles.index')}}">Mostrar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-title">
            <img src="{{asset('img/cards/employees.jpg')}}" alt="card-img" class="card-img-top">
        </div>

        <div class="card-footer">
            <div class="dropdown">
                <a class="btn btn-primary mt-auto align-self-start fs-6 dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Empleados
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('userRoles.create')}}">Crear</a></li>
                    <li><a class="dropdown-item" href="{{route('userRoles.index')}}">Mostrar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-title">
            <img src="{{asset('img/cards/products.jpg')}}" alt="card-img" class="card-img-top">
        </div>

        <div class="card-footer">
            <div class="dropdown">
                <a class="btn btn-primary mt-auto align-self-start fs-6 dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Productos
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('userRoles.create')}}">Crear</a></li>
                    <li><a class="dropdown-item" href="{{route('userRoles.index')}}">Mostrar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-title">
            <img src="{{asset('img/cards/passiveRate.jpg')}}" alt="card-img" class="card-img-top">
        </div>

        <div class="card-footer">
            <div class="dropdown">
                <a class="btn btn-primary mt-auto align-self-start fs-6 dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Tasa pasiva
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('userRoles.create')}}">Crear</a></li>
                    <li><a class="dropdown-item" href="{{route('userRoles.index')}}">Mostrar</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-title">
            <img src="{{asset('img/cards/catalogs.jpg')}}" alt="card-img" class="card-img-top">
        </div>

        <div class="card-footer">
            <div class="dropdown">
                <a class="btn btn-primary mt-auto align-self-start fs-6 dropdown-toggle" href="#" role="button"
                   id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    Catálogos
                </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{route('userRoles.create')}}">Crear</a></li>
                    <li><a class="dropdown-item" href="{{route('userRoles.index')}}">Mostrar</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@section('slick-css')
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('slick/slick-theme.css')}}"/>
@endsection

@section('js')
    <script src="{{asset('js/helpers/slickSlider.js')}}"></script>
@endsection
