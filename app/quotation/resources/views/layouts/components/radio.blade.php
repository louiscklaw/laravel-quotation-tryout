<!-- radio.blade.php -->
<input name="{{$radio_group}}" type="radio" id="{{$radio_id}}"
    class="
        {{ isset($with_gap)? 'with-gap' : '' }}
        {{ isset($radio_col)? $radio_col : '' }}
        "
    {{ isset($checked)? 'checked' : '' }}
    {{ isset($disabled)? 'disabled' : '' }}
     />
<label for="{{$radio_id}}">{{ $slot }}</label>
