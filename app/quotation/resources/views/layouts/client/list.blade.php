@extends('layouts.material.html')

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
                                            <th>Age</th>
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
                                            <th>Age</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                            <td>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">V</button>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">E</button>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">P</button>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                            <td>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">V</button>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">E</button>
                                                <button type="button" class="btn bg-teal btn-sm waves-effect">P</button>
                                            </td>
                                        </tr>
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
                // columnDefs: [
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 },
                //     { "width": "10%", "targets": 0 }
                // ]
            } );

            table.columns.adjust().draw();
        });

    </script>


    <script src="{{asset('plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}"></script>

    <!-- <script src="{{asset('js/pages/tables/jquery-datatable.js')}}"></script> -->

@endpush
