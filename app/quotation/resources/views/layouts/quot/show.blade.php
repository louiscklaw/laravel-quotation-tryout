@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="container-fluid">
        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($quot, ['method'=>'PATCH', 'action'=> [$update_controller, $quot->id]]) }}
        @else
            {{ Form::model($quot, ['method'=>'POST', 'action'=> [$store_controller, $quot->id]]) }}
        @endif


        <div class="row clearfix">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <h2>
                                    Edit
                                </h2>
                                <small>General information</small>
                            </div>

                            <div class="col-lg-6">
                                @if (Request::is('*/create') )
                                    {!! Form::submit(__('Create'), ['class'=>'btn btn-primary']) !!}

                                @else
                                    @button_save
                                    @endbutton_save

                                    @button_pdf
                                    @endbutton_pdf

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_ref }}" readonly>
                                        @if (Request::is('*/create'))
                                            <label class="form-label">Quote #</label>
                                        @else
                                            <label class="form-label">Quote # (display only)</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <h2>
                                    Item list
                                </h2>
                                <small>Items in this quotation</small>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_ref }}" readonly>
                                        @if (Request::is('*/create'))
                                            <label class="form-label">Quote #</label>
                                        @else
                                            <label class="form-label">Quote # (display only)</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-6">
                                <h2>
                                    Remarks
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_ref }}" readonly>
                                        @if (Request::is('*/create'))
                                            <label class="form-label">Quote #</label>
                                        @else
                                            <label class="form-label">Quote # (display only)</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>





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
