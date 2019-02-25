
<div class="form-group">
    <div class="form-line {{ $form_class }}">
        <input type="text" class="form-control" placeholder="{{ $slot }}" {{ (isset($input_disabled) ? 'disabled=""' : '')  }}/>
    </div>
</div>
