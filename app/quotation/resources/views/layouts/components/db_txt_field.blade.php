<div class="row clearfix">
    <div class="col-sm-1">
        {{ __($field_name) }}
    </div>
    <div class="col-sm-2">
        @textInput(['form_class'=>'', 'placeholder'=>''])
            {{$field_name}}
        @endtextInput
    </div>
</div>
