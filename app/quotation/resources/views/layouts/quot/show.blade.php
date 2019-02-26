@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif
            <h2>show quotation form</h2>

            @card([
                'card_name'=>$editor_name,
                'card_desc'=>$editor_description
                ])

                <div class="row clearfix">
                    <div class="col-sm-2">
                        id
                    </div>
                    <div class="col-sm-4">
                        @textInput(['form_class'=>'', 'placeholder'=>''])
                            id
                        @endtextInput
                    </div>

                    <div class="col-sm-2">
                        quot_date
                    </div>
                    <div class="col-sm-4">
                        @textInput(['form_class'=>'', 'placeholder'=>''])
                            quot_date
                        @endtextInput
                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-sm-1">
                        quot_client_id
                    </div>
                    <div class="col-sm-3">
                        @bootstrap_select
                        @endbootstrap_select
                    </div>
                </div>
            @endcard


            @card([
                'card_name'=>'quotitem_record',
                'card_desc'=>'quotitem description'
                ])
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>description</th>
                                <th>unit price</th>
                                <th>quantity</th>
                                <th>subtotal comment</th>
                                <th>subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($quotitem_records as $quotitem_record)
                            <tr>
                                <th scope="row">1</th>
                                <td>{!! Form::textarea($quotitem_record->quot_ref, null,
                                    ['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                                <td>{!! Form::textarea($quotitem_record->quot_ref, null,
                                    ['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            @endcard


            @card([
                'card_name'=>'Remarks',
                'card_desc'=>'Remarks'
                ])
                {!! Form::textarea($quotitem_record->quot_ref, null, ['class'=>'form-control','rows'=>10,'cols'=>50]) !!}

            @endcard

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
