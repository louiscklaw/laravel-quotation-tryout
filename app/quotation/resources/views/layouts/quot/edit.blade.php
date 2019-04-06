@extends('layouts.material.html')

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
                                Quotatioon Edit
                                <small>Edit quotation information</small>
                            </h2>
                        </div>

                        <div class="col-lg-6">
                            @if (Request::is('*/create') )
                                {!! Form::submit(__('Create'), ['class'=>'btn btn-primary']) !!}

                            @else
                                {!! Form::submit(__('Save'), ['class'=>'btn btn-primary']) !!}

                                <a class="btn btn-primary" href="{{ route('Quot.pdf',['id'=>$quot->id]) }}" role="button">{{ __('PDF')}}</a>

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
                                    @if (Request::is('*/create') )
                                        @foreach(range(1,$default_max_product_num) as $product_idx)
                                            <tr>
                                                <!-- <th scope="row">1</th> -->
                                                <td class="col-sm-1">{{ $product_idx }}</td>
                                                <td class="col-sm-6">
                                                    {{Form::text('quotitem_name[]', '',['class'=>'form-control'])}}
                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_quantity[]', '',['class'=>'form-control'])}}
                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_unitprice[]', '',['class'=>'form-control'])}}
                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_subtotal[]', '',['class'=>'form-control'])}}
                                                </td>

                                                <!-- delete button column -->
                                                <td class="col-sm-2">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else

                                        @for($i=0; $i<sizeof($quot['quotitems']); $i++)
                                            <tr>
                                                <!-- <th scope="row">1</th> -->
                                                <td class="col-sm-1">{{ $i+1 }}</td>
                                                <td class="col-sm-6">
                                                    {{Form::text('quotitem_name'.'[]', $quot['quotitems'][$i]->quotitem_name,['class'=>'form-control'])}}
                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_quantity'.'[]', $quot['quotitems'][$i]->quotitem_quantity,['class'=>'form-control'])}}

                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_unitprice'.'[]', $quot['quotitems'][$i]->quotitem_unitprice,['class'=>'form-control'])}}

                                                </td>
                                                <td class="col-sm-1">
                                                    {{Form::text('quotitem_subtotal'.'[]', $quot['quotitems'][$i]->quotitem_subtotal,['class'=>'form-control'])}}
                                                </td>

                                                <!-- delete button column -->
                                                @if (Request::is('*/create'))
                                                    <td class="col-sm-2"></td>
                                                @else
                                                    <td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>
                                                @endif
                                            </tr>
                                        @endfor
                                    @endif
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: left;">
                                            <input type="button" class="btn btn-lg btn-block " id="addrow"
                                                value="Add Row" />
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
                                    {{ Form::textarea('quot_terms', $quot->quot_terms,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks')}}
                                    {{ Form::textarea('quot_remarks', $quot->quot_remarks,[ 'class'=>'form-control no-resize', 'rows'=>'2' ]) }}
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
            @if (Request::is('*/create'))
                var counter = {{$default_max_product_num}}+1;
            @else
                var counter = {{sizeof($quot['quotitems'])}}+1;
            @endif

            $("#addrow").on("click", function () {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td>'+counter+'</td>';
                cols += '<td><input type="text" class="form-control" name="quotitem_name[]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitem_quantity[]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitem_unitprice[]"/></td>';
                cols += '<td><input type="text" class="form-control" name="quotitem_subtotal[]"/></td>';

                cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
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


@endpush
