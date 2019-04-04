@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <h2>
                                Quotatioon Edit
                                <small>Edit client information</small>
                            </h2>
                        </div>

                        <div class="col-lg-6">
                            @if (isset($action) && $action =='create')
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Create')}}</button>
                            @else
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Save')}}</button>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('PDF') }}</button>
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


        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
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




        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>@mdo</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>@fat</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>@twitter</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Larry</td>
                                        <td>Jellybean</td>
                                        <td>@lajelly</td>
                                        <td>@lajelly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Larry</td>
                                        <td>Kikat</td>
                                        <td>@lakitkat</td>
                                        <td>@lakitkat</td>
                                    </tr>


                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: left;">
                                            <input type="button" class="btn btn-lg btn-block " id="addrow" value="Add Row" />
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



    </div>



</section>
@endsection

@push('blank_scripts_body')
<script>
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="name' + counter + '"/></td>';
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
