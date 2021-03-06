@extends('layouts.material.html')

@push('append_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@push('append_css')
    <link href="{{ asset('plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css')}}" rel="stylesheet">
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
    <!-- Jquery DataTable Plugin Js -->
    <script src="{{asset('plugins/jquery-datatable/jquery.dataTables.js')}}"></script>

    <script>
        $('document').ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // // Setup - add a text input to each footer cell
            $('#test_table thead tr').clone(true).appendTo( '#test_table thead' );
            $('#test_table thead tr:eq(1) th').each( function (i) {
                var title = $(this).text();
                $(this).html( '<input type="text" style="width:100%;"  class="form-control input-sm" placeholder="Search '+title+'" />' );

                $( 'input', this ).on( 'keyup change', function () {
                    if ( table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search( this.value )
                            .draw();
                    }
                } );
            } );

            var table = $('#test_table').DataTable( {
                orderCellsTop: true,
                fixedHeader: true,
                processing: true,
                serverSide: true,

                ajax: {
                    "url": "{{ route('client.index_table_content') }}",
                    type:"POST"
                },
                columns: [
                    { "data": "client_name" },
                    { "data": "client_gender" },
                    { "data": "client_whatsapp" },
                    { "data": "client_mobile" },
                    { "data": "client_brithday" },
                    { "data": "client_email" },
                    { "data": "action" },
                    ],

            } );

            table.columns().every( function () {
                var that = this;
                // var milliseconds = (new Date).getTime();
                // var test_timeout = null;
                var input_filter_timeout=null;

                $( 'input', this.footer() ).on( 'keyup change', function () {
                    input_filter_value=this.value;
                    clearTimeout(input_filter_timeout);
                    input_filter_timeout=setTimeout(function(){
                        that.search( input_filter_value ).draw();
                    }, 250);

                } );
                $( 'input', this.footer() ).on( 'change', function () {
                    input_filter_value=this.value;
                    clearTimeout(input_filter_timeout);
                    input_filter_timeout=setTimeout(function(){
                        that.search( input_filter_value ).draw();
                    }, 250);

                } );
                $( 'input', this.footer() ).on( 'search', function () {
                    input_filter_value=this.value;
                    clearTimeout(input_filter_timeout);
                    input_filter_timeout=setTimeout(function(){
                        that.search( input_filter_value ).draw();
                    }, 250);

                } );

            } );
            table.columns.adjust().draw();
        });

    </script>


    @include('layouts.js_datatable')

    <!-- <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script> -->

@endpush
