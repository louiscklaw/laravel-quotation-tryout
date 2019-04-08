
@if(isset($label) && !empty($label))
    <label>{{$label}}</label>
@endif
<select id="{{ $id }}" name="{{ $id}}" style="border: 0px;" multiple class="form-control js-example-basic-multiple" placeholder="{{ $placeholder }}" data-allow-clear="1">
    @if (isset($cached_options))
        {{ $cached_options }}
    @endif
</select>


@push('append_head')
    <link href="{{ asset('/css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush


@push('blank_scripts_body')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $('document').ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#{{$id}}').select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: $('#{{$id}}').attr('placeholder'),
                allowClear: Boolean($('#{{$id}}').data('allow-clear')),
                ajax: {
                    url: '{{ route("bugs_report.get_bugs_category") }}',
                    dataType: 'json'
                    // Additional AJAX parameters go here; see the end of this chapter for the full code of this example
                }

            });

            // to override the origional select2 styling without touching the select2.min.css
            var select2Ele = document.querySelector(".select2-selection--multiple");
            select2Ele.style.border = "0px";


        });

    </script>
@endpush
