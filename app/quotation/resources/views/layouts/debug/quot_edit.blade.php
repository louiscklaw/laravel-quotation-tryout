@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>basic form elements</h2>
        </div>

        @card([
                'card_name'=>'Quotation',
                'card_desc'=>'quotation debug page'
                ])

                @card_inside(['card_inside_title'=>'basic examples'])
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textInput(['form_class'=>''])
                                test text input
                            @endtextInput
                        </div>
                        <div class="col-sm-12">
                            @passwordInput
                                tset password input
                            @endpasswordInput
                        </div>
                    </div>
                @endcard_inside
            @endcard

            @if(isset($form_action) and $form_action =='edit')
                {{ Form::model($record, ['method'=>'PATCH', 'action'=> ['QuotController@update', $record->id]]) }}
            @else
                {{ Form::model($record, ['method'=>'POST', 'action'=> ['QuotController@store', $record->id]]) }}
            @endif


            <div class="form-group" style="margin-top: 20px">
                {!! Form::submit('Confirm', ['class'=>'btn btn-primary']) !!}
            </div>


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
