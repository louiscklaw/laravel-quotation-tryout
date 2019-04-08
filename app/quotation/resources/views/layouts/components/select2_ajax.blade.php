
<label>{{$label}}</label>
<select multiple class="form-control js-example-basic-multiple" placeholder="{{ $placeholder }}" data-allow-clear="1">
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
        $('select').each(function () {
            $(this).select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: $(this).attr('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        });

    </script>
@endpush
