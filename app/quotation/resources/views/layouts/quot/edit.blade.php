@extends('layouts.material.html')

@section('content')

<section class="content">

    @if(Request::is('*/edit'))
        {!! Form::model($record, ['method'=>'PATCH', 'action'=> ['QuotController@update', $record->id]]) !!}
    @elseif(Request::is('*/create') )
        {!! Form::model($record, ['method'=>'POST', 'action'=> ['QuotController@store', $record->id]]) !!}
    @endif

    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-3">
                            <h2>
                                Quotatioon Edit
                                <small>Edit quotation information</small>
                            </h2>
                        </div>

                        <div class="col-lg-3">
                            @if (Request::is('*/create') )
                                <a class="btn btn-primary" href="{{ route('Quot.store') }}" role="button">{{ __('Create')}}</a>
                            @else
                                <a class="btn btn-primary" href="{{ route('Quot.update',['id'=>$record->id]) }}" role="button">{{ __('Save')}}</a>
                                <a class="btn btn-primary" href="{{ route('Quot.pdf',['id'=>$record->id]) }}" role="button">{{ __('PDF')}}</a>

                            @endif
                        </div>

                    </div>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Quote #</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Date</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('From')}}</label>
                                    <textarea rows="2" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Bill To')}}</label>
                                    <textarea rows="2" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row clearfix">

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
                                    <tr>
                                        <!-- <th scope="row">1</th> -->
                                        <td class="col-sm-1">1</td>
                                        <td class="col-sm-6"><input type="text" class="form-control" name="product_0[]"></td>
                                        <td class="col-sm-1"><input type="text" class="form-control" name="product_0[]"></td>
                                        <td class="col-sm-1"><input type="text" class="form-control" name="product_0[]"></td>
                                        <td class="col-sm-1"><input type="text" class="form-control" name="product_0[]"></td>

                                        <!-- delete button column -->
                                        <td class="col-sm-2"></td>

                                    </tr>
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
                                    <label class="form-label">{{ __('Terms & Conditions')}}</label>
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Remarks')}}</label>
                                    <textarea rows="6" class="form-control no-resize"></textarea>
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
    var counter = 2;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td>'+counter+'</td>';
        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';

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
