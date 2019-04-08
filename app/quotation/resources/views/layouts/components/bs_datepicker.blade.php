
@push('append_head')
    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <!-- <link href="{{ asset('/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}" rel="stylesheet" /> -->
@endpush

<input
    @if (isset($name))
        name="{{ $name }}"
    @endif
    type="text" class="form-control
    @if (isset($class))
        {{$class}}
    @endif
    ">

@push('append_body')
    <!-- <script src="{{ asset('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script> -->

    <!-- Moment Plugin Js -->
    <script src="{{ asset('/plugins/momentjs/moment.js')}}"></script>


    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <!-- <script src="{{ asset('/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script> -->

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{ asset('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <script>
        $('document').ready(function () {
            $('#bs_datepicker_component_container').datepicker({
                orientation: "bottom auto",
            });
        });
    </script>
@endpush
