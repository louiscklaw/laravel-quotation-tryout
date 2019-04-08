@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BASIC FORM ELEMENTS</h2>
        </div>
        <!--Bootstrap Date Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            BOOTSTRAP DATE PICKER
                            <small>Taken from <a href="https://github.com/uxsolutions/bootstrap-datepicker"
                                    target="_blank">github.com/uxsolutions/bootstrap-datepicker</a></small>
                        </h2>
                        <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                    role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-xs-3">
                                <h2 class="card-inside-title">Text Input</h2>
                                <div class="form-group">
                                    <div class="form-line" id="bs_datepicker_container">
                                        <input type="text" class="form-control" placeholder="Please choose a date...">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <h2 class="card-inside-title">Component</h2>
                                <div class="input-group date" id="bs_datepicker_component_container">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Please choose a date...">
                                    </div>
                                    <span class="input-group-addon">
                                        <i class="material-icons">date_range</i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="card-inside-title">Range</h2>
                                <div class="input-daterange input-group" id="bs_datepicker_range_container">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Date start...">
                                    </div>
                                    <span class="input-group-addon">to</span>
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Date end...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--#END# Bootstrap Date Picker -->


    </div>
</section>
@endsection

@push('append_head')

    <!-- Bootstrap Material Datetime Picker Css -->
    <link
        href="http://localhost:8001/quotation/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="http://localhost:8001/quotation/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css"
        rel="stylesheet" />

@endpush


@push('append_body')

    <!-- Autosize Plugin Js -->
    <script src="http://localhost:8001/quotation/plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="http://localhost:8001/quotation/plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script
        src="http://localhost:8001/quotation/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="http://localhost:8001/quotation/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    <!-- Custom Js -->
    <script src="http://localhost:8001/quotation/js/admin.js"></script>
    <script src="http://localhost:8001/quotation/js/pages/forms/basic-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="http://localhost:8001/quotation/js/demo.js"></script>
@endpush
