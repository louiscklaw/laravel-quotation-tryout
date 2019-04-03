@extends('layouts.material.html')

@push('append_css')
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
@endpush

@section('content')
<section class="content">
    <div class="container-fluid">
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Current Client
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">View 1</a></li>
                                        <li><a href="javascript:void(0);">View 2</a></li>
                                        <li><a href="javascript:void(0);">View 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable" id="test_table">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>whatsapp</th>
                                            <th>Mobile</th>
                                            <th>Brithday</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Gender</th>
                                            <th>whatsapp</th>
                                            <th>Mobile</th>
                                            <th>Brithday</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
    </div>
</section>

@endsection


@push('blank_scripts_body')
    @include('layouts.js_datatable')
@endpush
