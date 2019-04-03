<div class="col-sm-12">
    <div class="form-group form-float">
        <div class="form-line">
            {{ Form::text($slot,
                (isset($default) ? $default: null) ,
                [   'class'=>'form-control',
                    (isset($input_disabled) ? 'disabled=""' : '')
                ]
            )}}
            <label class="form-label">{{$label}}</label>
        </div>
    </div>
</div>
