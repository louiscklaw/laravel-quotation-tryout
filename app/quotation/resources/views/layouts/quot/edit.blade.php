@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif

            @if(isset($form_action) and $form_action =='edit')
                    <h2>edit quotation form</h2>
            @else
                    <h2>new quotation form</h2>
            @endif

            <div class="form-group" style="margin-top: 20px">
                {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
            </div>

            @card([
                'card_name'=>$editor_name,
                'card_desc'=>$editor_description,
                'card_class'=>'col-lg-4 col-md-4 col-sm-4 col-xs-4'
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

            @endcard


            @card([
                'card_name'=>'Client',
                'card_desc'=>'Client description',
                'card_class'=>'col-lg-4 col-md-4 col-sm-4 col-xs-4'
                ])

                <div class="row clearfix">
                    <div class="col-sm-2">
                        Name
                    </div>
                    <div class="col-sm-4">
                        @textInput(['form_class'=>'', 'placeholder'=>''])
                            quot_client_id
                        @endtextInput
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

                            @for($i=0;$i<sizeof($quotitem_records); $i++)
                            <tr>
                                <th scope="row">{{$i+1}}</th>
                                <td>{!! Form::textarea('quotitem['.$i.'][quotitem_des_cm]', $quotitem_records[$i]->quotitem_des_cm,
                                    ['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>
                                <td>{!! Form::text('quotitem['.$i.'][quotitem_unitprice]',  $quotitem_records[$i]->quotitem_unitprice, ['class'=>'form-control']) !!}</td>

                                <td>{!! Form::text('quotitem['.$i.'][quotitem_qty]', $quotitem_records[$i]->quotitem_qty, ['class'=>'form-control']) !!}</td>

                                <td>{!! Form::textarea('quotitem['.$i.'][quotitem_subtotal_cm]', $quotitem_records[$i]->quotitem_subtotal_cm,['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>

                                <td>{!! Form::text('quotitem['.$i.'][quotitem_subtotal]', $quotitem_records[$i]->quotitem_subtotal, ['class'=>'form-control']) !!}</td>
                            </tr>
                            @endfor

                        </tbody>
                    </table>
                </div>
            @endcard


            @card([
                'card_name'=>'Remarks',
                'card_desc'=>'Remarks'
                ])
                <div class="row clearfix">
                    <div class="col-sm-12">
                        @textarea(['form_class'=>'', 'placeholder'=>''])
                            quot_remark
                        @endtextarea
                    </div>
                </div>
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
