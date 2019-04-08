
<input
    @if (isset($name))
        name="{{ $name }}"
    @endif
    type="text" class="form-control
    @if (isset($class))
        {{$class}}
    @endif
    ">
