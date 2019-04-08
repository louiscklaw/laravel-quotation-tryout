
<h2 class="card-inside-title">Component</h2>
<div class="input-group date" id="{{$id}}">
    <div class="form-line">
        <input name="{{$name}}" type="text" class="form-control" placeholder="Please choose a date...">
    </div>
    <span class="input-group-addon">
        <i class="material-icons">date_range</i>
    </span>
</div>

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
<!-- <script src="http://localhost:8001/quotation/js/pages/forms/basic-form-elements.js"></script> -->

<!-- Demo Js -->
<script src="http://localhost:8001/quotation/js/demo.js"></script>

<script>
    $('#{{$id}}').datepicker({
        autoclose: true,
        container: '#{{$id}}'
    });
</script>
@endpush
