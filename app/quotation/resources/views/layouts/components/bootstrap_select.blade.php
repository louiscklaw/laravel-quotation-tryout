
{{ Form::select('size', array('L' => 'Large', 'S' => 'Small')) }}

@push('head_link')
    <link href="{{asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endpush
