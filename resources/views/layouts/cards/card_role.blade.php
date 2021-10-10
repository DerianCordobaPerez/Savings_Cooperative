@if(auth()->user()->hasRole('Admin'))
    @include('components.card', [
        'img' => 'admin.jpg',
        'card_heading' => 'Panel de administracion',
        'card_text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
        'card_button' => 'Visitar'
    ])
@elseif(auth()->user()->hasRole('Cajero'))
    @include('components.card', [
        'img' => 'cajera.jpg',
        'card_heading' => 'Panel de Cajero',
        'card_text' => [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, ullam?',
        ],
        'card_button' => 'Visitar'
    ])
@endif
