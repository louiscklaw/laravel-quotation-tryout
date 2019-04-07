
<div class="form-line">
    @if (isset($textinput_label))
        {{ __($textinput_label)}}
    @else
        {{ __($textinput_name)}}
    @endif
    {{ Form::textarea($textinput_name, $slot,[ 'class'=>'no-resize', 'rows'=>'5' ]) }}
</div>

@push('blank_scripts_body')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementsByName("{{$textinput_name}}")[0],
        });
    </script>
@endpush
