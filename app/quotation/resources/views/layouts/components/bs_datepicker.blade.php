<div class="input-group date" id="{{$id}}">
    <span class="input-group-addon">
        <i class="material-icons">date_range</i>
    </span>
    <div class="form-line">
        <label for="username">date</label>
        <input name="{{$name}}" type="text" class="form-control" placeholder="Please choose a date...">
    </div>
</div>

@push('append_head')

    <!-- Bootstrap DatePicker Css -->
    <link href="http://localhost:8001/quotation/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

@endpush


@push('append_body')

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="http://localhost:8001/quotation/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<script>
    $('document').ready(function(){

        $('#{{$id}}').datepicker({
            autoclose: true,
            container: '#{{$id}}',
            orientation: "bottom auto"
        });
    });
</script>
@endpush
