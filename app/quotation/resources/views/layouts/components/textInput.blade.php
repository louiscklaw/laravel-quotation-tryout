
<div class="form-group form-float">
    <div class="form-line">
        {{Form::text($textinput_name, $slot,['class'=>'form-control'])}}

        <label class="form-label">
            @if (isset($textinput_label))
                {{ __($textinput_label)}}
            @else
                {{ __($textinput_name)}}
            @endif
        </label>

    </div>
</div>
