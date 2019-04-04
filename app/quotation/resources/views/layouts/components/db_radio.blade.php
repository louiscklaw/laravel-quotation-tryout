<div class="demo-radio-button">
    @foreach($options as $option_value => $option_text)
        @radio([
            'radio_group'=>$radio_group,
            'radio_id'=>'radio_test_id'
            ])
            {{ $option_text }}
        @endradio
    @endforeach
</div>
