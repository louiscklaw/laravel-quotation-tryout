<div class="form-group">
    <div class="form-line">
        <!-- <textarea rows="4" class="form-control no-resize">{{ $slot }}</textarea> -->
        {{
            Form::textarea($slot, null, ['class' => 'form-control no-resize'])
        }}
    </div>
</div>
