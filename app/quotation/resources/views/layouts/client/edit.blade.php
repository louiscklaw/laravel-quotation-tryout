@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">

        @if(isset($form_action) and $form_action =='edit')
            <div class="block-header">
                <h2>client editor</h2>
            </div>
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            <div class="block-header">
                <h2>create client</h2>
            </div>
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif

        {{ Form::close() }}

    </div>
</section>

@endsection


@push('blank_scripts_body')
    @parent

    <!-- Autosize Plugin Js -->
    <script src="{{asset('plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>

@endpush
