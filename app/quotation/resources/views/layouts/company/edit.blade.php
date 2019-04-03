@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">


        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller]]) }}
        @endif
        <div class="block-header">
            <h2>{{ $editor_name }}</h2>
        </div>

            <div class="row clearfix">
                <div class="col-sm-6">
                    @card([
                            'card_name'=>'basic information',
                            'card_desc'=>'company contact information'
                            ])
                        <div class="row clearfix">
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company short name'])
                                    company_name
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company chinese name'])
                                    company_cname
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company name'])
                                    company_ename
                                @endfloat_label_input
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company telephone'])
                                    company_contact_tel
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company mobile'])
                                    company_contact_mobile
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company email'])
                                    company_contact_email
                                @endfloat_label_input
                            </div>

                            <div class="col-sm-12">
                                @float_label_input(['form_class'=>'', 'label'=>'company website'])
                                    company_contact_email
                                @endfloat_label_input
                            </div>

                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                @float_label_input(['form_class'=>'', 'label'=>'company address'])
                                    company_address
                                @endfloat_label_input
                            </div>
                        </div>


                        <div class="row clearfix">
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'related sales'])
                                    company_relatedsales
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'company CR code'])
                                    company_cr_code
                                @endfloat_label_input
                            </div>
                        </div>


                        <div class="row clearfix">
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'record owner'])
                                    company_owner_name
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'create time'])
                                    created_at
                                @endfloat_label_input
                            </div>
                            <div class="col-sm-4">
                                @float_label_input(['form_class'=>'', 'label'=>'update time'])
                                    updated_at
                                @endfloat_label_input
                            </div>
                        </div>

                    @endcard
                </div>

                <div class="col-sm-6">
                    @card([
                    'card_name'=>'公司相關資料',
                    'card_desc'=>'公司的相關資料'
                    ])
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textarea(['form_class'=>'', 'label'=>''])
                                client_remark
                            @endtextarea
                        </div>
                    </div>
                    @endcard
                </div>


                <div class="col-sm-6">
                    @card([
                    'card_name'=>'存檔',
                    'card_desc'=>'save / cancel'
                    ])
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group" style="margin-top: 20px">
                                {!! Form::submit('Confirm', ['class'=>'btn btn-primary']) !!}
                            </div>
                        </div>
                    </div>
                    @endcard
                </div>

            </div>




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
