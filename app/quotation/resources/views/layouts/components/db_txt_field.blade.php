<div class="">
    <div class="col-sm-2">
        {{ __("db_field.$field_name") }}
    </div>
    <div class="col-sm-2">
        @textInput(['form_class'=>'', 'placeholder'=>''])
            {{$field_name}}
        @endtextInput
    </div>
</div>
