<div class="row clearfix">
    <div class="{{ isset($field_name_class)? $field_name_class : '' }}">
        {{ __("db_field.$field_name") }}
    </div>
    <div class="{{ isset($field_value_class)? $field_value_class : '' }}">
    @if (isset($input_disabled))
        @textInput(['form_class'=>'', 'placeholder'=>'','input_disabled'=>''])
    @else
        @textInput(['form_class'=>'', 'placeholder'=>''])
    @endif
            {{$field_name}}
        @endtextInput
    </div>
</div>
