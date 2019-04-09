@extends('layouts.material.html')

@push('append_head')
    <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
@endpush

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
                                    View Quot
                                </h2>
                                <small>General information</small>
                            </div>

                            <div class="col-lg-6">
                                @if (Request::is('*/create') )
                                    {!! Form::submit(__('Create'), ['class'=>'btn btn-primary']) !!}

                                @else
                                    @button_edit
                                    @endbutton_edit

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
                                        <label class="form-label">Quote # (display only)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">Date</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">Date</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">{{__('form name')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">{{__('form address')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">{{__('to name')}}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" value="{{ $quot->quot_date }}" readonly>
                                        <label class="form-label">{{__('to address')}}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- item list -->
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
                            <div class="body table-responsive">
                                <table class="table order-list">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Unit Price</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @for($i=0; $i<sizeof($quot['quotitems']); $i++)
                                        <tr>
                                            <!-- <th scope="row">1</th> -->
                                            <td class="col-sm-1">{{ $i+1 }}</td>
                                            <td class="col-sm-6">
                                                {{Form::text('quotitems'.'[quotitem_name]'.'[]', $quot['quotitems'][$i]->quotitem_name,['class'=>'form-control'])}}
                                            </td>
                                            <td class="col-sm-1">
                                                {{Form::text('quotitems'.'[quotitem_quantity]'.'[]', $quot['quotitems'][$i]->quotitem_quantity,['class'=>'form-control'])}}

                                            </td>
                                            <td class="col-sm-1">
                                                {{Form::text('quotitems'.'[quotitem_unitprice]'.'[]', $quot['quotitems'][$i]->quotitem_unitprice,['class'=>'form-control'])}}

                                            </td>
                                            <td class="col-sm-1">
                                                {{Form::text('quotitems'.'[quotitem_subtotal]'.'[]', $quot['quotitems'][$i]->quotitem_subtotal,['class'=>'form-control'])}}
                                            </td>

                                            <!-- delete button column -->
                                            @if (Request::is('*/create'))
                                                <td class="col-sm-2"></td>
                                            @else
                                                <td>
                                                    <!-- <input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"> -->
                                                    <button type="button" class="ibtnDel btn btn-md btn-danger" id="Delete">
                                                        <i class="material-icons">cancel</i>

                                                    </button>
                                                </td>
                                            @endif
                                        </tr>

                                        @endfor
                                    </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="5" style="text-align: left;">
                                                <button type="button" class="btn btn-primary waves-effect" id="addrow">
                                                    <i class="material-icons">add</i>
                                                    <span>ADD NEW ITEM</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end item list -->


            <!-- Remarks -->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                <div class="form-group">
                                    <div class="form-line">
                                        <h3>{{ __('terms_and_conditions')}}</h3>
                                        <div class="card">
                                            <div class="body bg-grey" id="terms_and_conditions">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-line">
                                    <h3>{{ __('remarks')}}</h3>
                                    <div class="card">
                                        <div class="card">
                                            <div class="body bg-grey" id="remarks">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end remarks -->

        </div>





    </div>
</section>
@endsection

@push('append_body')


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
    <script>
        document.getElementById('terms_and_conditions').innerHTML =
            marked(`{!! $quot->quot_terms !!}`);
    </script>

    <script>
        document.getElementById('remarks').innerHTML =
        marked(`{{$quot->quot_remarks}}`);
    </script>

@endpush
