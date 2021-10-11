@if(auth()->user()->hasRole('Admin'))
    @include('components.card', [
        'img' => 'roles/admin.jpg',
        'card_heading' => 'Panel de administracion',
        'card_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
        'card_button' => 'Visitar'
    ])
@endif

@if(auth()->user()->hasRole('Cajero'))
    @include('components.card', [
        'img' => 'roles/cashier.jpg',
        'card_heading' => 'Panel de Cajero',
        'card_text' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
        ],
        'card_button' => 'Visitar'
    ])
@endif
