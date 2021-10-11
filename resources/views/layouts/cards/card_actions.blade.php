@if(auth()->user()->hasRole('Admin'))
    @include('admins.cards')
@endif

@if(auth()->user()->hasRole('Cajero'))
    @include('cashiers.cards')
@endif

