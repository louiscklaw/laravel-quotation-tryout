<!-- switch.blade.php -->
<div class="demo-switch-title">{{$slot}}</div>
<div class="switch">
    <label>
        {{$off_text}}
        <input type="checkbox"
        {{ isset($checked) ? 'checked': '' }}
        {{ isset($disabled) ? 'disabled': '' }}
        >
        <span class="lever
            {{ isset($switch_color) ? $switch_color: '' }}
            ">

        </span>
        {{$on_text}}
    </label>
</div>
