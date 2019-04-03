@extends('layouts.material.html')


@section('content')
<style>
.label_name
{
    margin-bottom:0px;
}
.label_value
{
    margin-bottom:0px;
}
</style>
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        Client Information
                        <small>client information</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="label_name col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('status') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8 label_value">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('name') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('gender') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_gender }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('brithday') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_brithday }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('whatsapp') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_whatsapp }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('mobile number') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_mobile_number }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('email') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_email }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <label class="form-label">{{ __('Address') }}</label>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group form-float">
                                <p>{{ $client_record->client_address }}</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        Client Remarks
                        <small>client information</small>
                    </h2>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                        <div class="form-group">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Remarks')}}</label>
                                    <textarea rows="6" class="form-control no-resize" readonly disabled></textarea>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Description') }}</label>
                                    <textarea rows="6" class="form-control no-resize" readonly disabled></textarea>
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
