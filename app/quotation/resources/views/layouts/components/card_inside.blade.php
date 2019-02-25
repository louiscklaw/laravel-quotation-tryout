
<h2 class="card-inside-title">{{ $card_inside_title }}
    {!! isset($card_inside_desc) ? $card_inside_desc: ''!!}
</h2>
    {{ $slot }}
