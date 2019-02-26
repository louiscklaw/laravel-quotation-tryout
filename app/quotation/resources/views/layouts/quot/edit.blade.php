@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>basic form elements</h2>
        </div>

        @if(isset($form_action) and $form_action =='edit')
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif

        <div class="form-group" style="margin-top: 20px">
            {!! Form::submit('Confirm', ['class'=>'btn btn-primary']) !!}
        </div>

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

                <div class="row clearfix">
                    <div class="col-sm-1">
                        quot_client_id
                    </div>
                    <div class="col-sm-3">
                        @bootstrap_select
                        @endbootstrap_select
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
                        @foreach($quotitem_records as $quotitem_record)
                            <tr>
                                <th scope="row">1</th>
                                <td>{!! Form::textarea($quotitem_record->quot_ref, null, ['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                                <td>{!! Form::textarea($quotitem_record->quot_ref, null, ['class'=>'form-control','rows'=>2,'cols'=>20]) !!}</td>
                                <td>{!! Form::text($quotitem_record->quot_ref, null, ['class'=>'form-control']) !!}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            </div>


            @endcard
        <div class="card">
            <div class="header">
                <h2>
                    STRIPED ROWS
                    <small>Use <code>.table-striped</code> to add zebra-striping to any table row within the <code>&lt;tbody&gt;</code></small>
                </h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="true">
                            <i class="material-icons">more_vert</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

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
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

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
