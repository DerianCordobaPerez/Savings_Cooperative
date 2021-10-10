<div class="card-sl">

    @if(isset($img))
        <div class="card-image">
            <img src="{{asset("img/cards/$img")}}" alt="img"/>
        </div>
    @endif

    @if(isset($card_heading))
        <div class="card-heading">
            {{$card_heading}}
        </div>
    @endif

    @if(isset($card_text))
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
    @endif

    <a class="card-button btn">
        {{$card_button}}
    </a>
</div>
