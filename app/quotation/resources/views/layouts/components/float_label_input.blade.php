<div class="col-sm-12">
    <div class="form-group form-float">
        <div class="form-line">
            {{ Form::text($slot,null ,
                [   'class'=>'form-control',
                    (isset($input_disabled) ? 'disabled=""' : '')
                ]
            )}}
            <label class="form-label">{{$slot}}</label>
        </div>
    </div>
</div>
