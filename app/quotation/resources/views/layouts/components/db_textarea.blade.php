<div class="row clearfix">
    <div class="{{ isset($field_name_class)? $field_name_class : '' }}">
        {{ __("db_field.$field_name") }}
    </div>
    <div class="{{ isset($field_value_class)? $field_value_class : '' }}">
        @textarea(['form_class'=>'', 'placeholder'=>''])
            {{$field_name}}
        @endtextarea
    </div>
</div>
