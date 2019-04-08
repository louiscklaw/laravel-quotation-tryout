
@push('append_head')
    <link href="{{ asset('/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endpush

<input
    @if (isset($name))
        name="{{ $name }}"
    @endif
    id="{{$id}}"
    type="text" class="form-control
    @if (isset($class))
        {{$class}}
    @endif
    ">

@push('append_body')
    <script src="{{ asset('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $('document').ready(function () {
            $('#{{$id}}').datepicker({});
        });
    </script>
@endpush
