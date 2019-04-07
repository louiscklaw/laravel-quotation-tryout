@extends('layouts.material.html')


@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush


@section('content')

<section class="content">

    @if (Request::is('*/create') )
        {!! Form::model($quot, ['method'=>'POST', 'action'=> ['QuotController@store', $quot->id]]) !!}
    @elseif(Request::is('*/edit'))
        {!! Form::model($quot, ['method'=>'PATCH', 'action'=> ['QuotController@update', $quot->id]]) !!}
    @endif

    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <h2>
                                <div style="height: 25px;">
                                <i class="material-icons">monetization_on</i>
                                Quotatioon Edit
                                </div>
                            </h2>
                            <small>Edit quotation information</small>
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

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    {{Form::text('quot_date', $quot->quot_date,['class'=>'form-control'])}}
                                    <label class="form-label">Date</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('from name')}}</label>
                                    {{ Form::textarea('quot_from_name', $quot->quot_from_name,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('from address')}}</label>
                                    {{ Form::textarea('quot_from_address', $quot->quot_from_address,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('to name')}}</label>
                                    {{ Form::textarea('quot_to_name', $quot->quot_to_name,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('to address')}}</label>
                                    {{ Form::textarea('quot_to_address', $quot->quot_to_address,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- col end -->
        </div>


        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            <div class="card">
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
                                                            <span>Delete</span>
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

            <!-- col end -->
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Terms & Conditions')}}
                                    {{ Form::textarea('quot_terms', $quot->quot_terms,[ 'class'=>'no-resize', 'rows'=>'2' ]) }}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks')}}
                                    {{ Form::textarea('quot_remarks', $quot->quot_remarks,[ 'class'=>'no-resize', 'rows'=>'2' ]) }}
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- col end -->
        </div>

    </div>

    {!! Form::close() !!}

</section>
@endsection

@push('blank_scripts_body')

        <script>
        $(document).ready(function () {
            var counter = {{ sizeof($quot['quotitems'])}}+1;

            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td>'+counter+'</td>';
                cols += '<td><input type="text" class="form-control" name="quotitems[quotitem_name][]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitems[quotitem_quantity][]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitems[quotitem_unitprice][]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitems[quotitem_subtotal][]"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger" id="Delete"><i class="material-icons">cancel</i><span>Delete</span></button></td>';
                newRow.append(cols);
                $("table.order-list").append(newRow);
                counter++;
            });

            $("table.order-list").on("click", ".ibtnDel", function (event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });

        function calculateRow(row) {
            var price = +row.find('input[name^="price"]').val();

        }

        function calculateGrandTotal() {
            var grandTotal = 0;
            $("table.order-list").find('input[name^="price"]').each(function () {
                grandTotal += +$(this).val();
            });
            $("#grandtotal").text(grandTotal.toFixed(2));
        }

        </script>

    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementsByName("quot_terms")[0],
        });

        var simplemde = new SimpleMDE({
            element: document.getElementsByName("quot_remarks")[0],
        });

    </script>
@endpush
