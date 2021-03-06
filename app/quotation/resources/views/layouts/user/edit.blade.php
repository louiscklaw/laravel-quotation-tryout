@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>basic form elements</h2>
        </div>

        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif

            @card([
                'card_name'=>$editor_name,
                'card_desc'=>$editor_description
                ])

                <div class="form-group" style="margin-top: 20px">
                    {!! Form::submit('Confirm', ['class'=>'btn btn-primary']) !!}
                </div>

                <div class="row clearfix">
                @foreach(array_keys($record->getAttributes()) as $field_name)

                        <div class="col-sm-1">
                            {{$field_name}}
                        </div>
                        @if ($field_name=='id')
                            <div class="col-sm-3">
                                @textInput(['form_class'=>'', 'placeholder'=>'', 'input_disabled'=>''])
                                    {{$field_name}}
                                @endtextInput
                            </div>
                        @else
                            <div class="col-sm-3">
                                @textInput(['form_class'=>'', 'placeholder'=>''])
                                    {{$field_name}}
                                @endtextInput
                            </div>
                        @endif
                @endforeach
                    </div>
            @endcard
        {{ Form::close() }}

    </div>
</section>

@endsection


@push('blank_scripts_body')


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
