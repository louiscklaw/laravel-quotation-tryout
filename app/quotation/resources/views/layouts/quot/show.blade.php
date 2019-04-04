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

                <div class="form-group" style="margin-top, margin-bottom: 20px">
                    <a class="btn bg-light-blue waves-effect" href="{{ route('Quot.edit',['id'=>$record->id]) }}" role="button">edit</a>
                    <a class="btn bg-light-blue waves-effect" href="{{ route('quot.pdf', ['id'=>$record->id]) }}" role="button">pdf</a>
                </div>
            @endcard

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

            @endcard

            @card([
                'card_name'=>'Client',
                'card_desc'=>'Client description'
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
                'card_name'=>'quotitem_record',
                'card_desc'=>'quotitem description'
                ])
                <div class="body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>item name</th>
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
                                <td>{!! Form::textarea(
                                        'quotitem_item[]',
                                        $quotitem_records[$i]->quotitem_item,
                                        ['class'=>'form-control','rows'=>2,'cols'=>20, 'disabled'=>'']) !!}
                                </td>
                                <td>{!! Form::textarea(
                                        'quotitem_des_cm[]',
                                        $quotitem_records[$i]->quotitem_des_cm,
                                        ['class'=>'form-control','rows'=>2,'cols'=>20, 'disabled'=>'']) !!}
                                </td>
                                <td>
                                    {!! Form::label($quotitem_records[$i]->quotitem_unitprice) !!}
                                </td>

                                <td>
                                    {!! Form::label($quotitem_records[$i]->quotitem_qty) !!}
                                </td>

                                <td>
                                    {!! Form::textarea('quotitem_subtotal_cm[]', $quotitem_records[$i]->quotitem_subtotal_cm,['class'=>'form-control','rows'=>2,'cols'=>20, 'disabled'=>'']) !!}
                                </td>

                                <td>
                                    {!! Form::label($quotitem_records[$i]->quotitem_subtotal) !!}
                                </td>
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
