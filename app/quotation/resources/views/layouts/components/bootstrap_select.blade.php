
    <select class="form-control show-tick" {{ isset($disabled) ? 'disabled':''}}>
        <option value="">{{ $slot }}</option>
        <option value="10">10</option>
        <option value="20">20</option>
        <option value="30">30</option>
        <option value="40">40</option>
        <option value="50">50</option>
    </select>


@push('head_link')
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
