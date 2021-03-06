@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        Company {{ $record->company_name }}
                        <small>Company information</small>
                    </h2>
                </div>


                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('English name')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_ename }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Chinese name')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_cname }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Short name')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_name }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Address')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_address }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Contact name')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_contact }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="card">
                <div class="header">
                    <h2>
                        <small>Contact information</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Contract tel')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_contact_tel }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Contract mobile')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_contact_mobile }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Contract fax')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_contact_fax }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('Contract email')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_contact_email }}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('sales')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_relatedsales}}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('BR code')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_cr_code}}
                                </div>
                            </div>

                            <div class="form-group form-float">
                                <div class="col-sm-4">
                                    {{ __('owner name')}}
                                </div>
                                <div class="col-sm-8">
                                    {{ $record->company_owner_name }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

        </div>


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="card">
                <div class="header">
                    <h2>
                        {{ __('Remarks')}}
                        <small>{{ __('Additional information about client')}}}</small>
                    </h2>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks')}}
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks2')}}
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks3')}}
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Description') }}
                                    <textarea rows="6" class="form-control no-resize"></textarea>
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
