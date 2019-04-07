<div class="form-group">
    <div class="form-line">
        {{ __($textinput_label) }}
        <!-- <textarea rows="4" class="form-control no-resize">{{ $slot }}</textarea> -->
        {{
            Form::textarea($textinput_name, $slot, ['class' => 'form-control no-resize', 'rows'=>$rows])
        }}
    </div>
</div>
