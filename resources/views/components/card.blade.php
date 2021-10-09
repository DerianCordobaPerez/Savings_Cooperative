<div class="card-sl">
    <div class="card-image">
        <img src="{{asset("img/cards/$img")}}" alt="img"/>
    </div>

    <div class="card-heading">
        {{$card_heading}}
    </div>

    @if(is_array($card_text))
        @foreach($card_text as $text)
            <div class="card-text">
                {{$text}}
            </div>
        @endforeach
    @else
        <div class="card-text">
            {{$card_text}}
        </div>
    @endif

    <a class="card-button btn">
        {{$card_button}}
    </a>
</div>
