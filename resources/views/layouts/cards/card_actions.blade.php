@if(auth()->user()->hasRole('Admin'))
    <div class="col-md-3">
        @include('components.card', [
            'img' => 'admin.jpg',
            'card_heading' => 'Panel de administracion',
            'card_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
            'card_button' => 'Visitar'
        ])
    </div>

    <div class="col-md-3">
        @include('components.card', [
            'img' => 'admin.jpg',
            'card_heading' => 'Panel de administracion',
            'card_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
            'card_button' => 'Visitar'
        ])
    </div>
@elseif(auth()->user()->hasRole('Cajero'))
    <div class="row">
        @foreach(auth()->user()->role->privileges as $privilege)
            <div class="col-lg-3 mb-2 d-flex align-items-stretch">
                <div class="card">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fs-6">{{$privilege->name}}</h5>
                        <a href="#" class="btn btn-primary mt-auto align-self-start fs-6">{{$privilege->name}}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endif

