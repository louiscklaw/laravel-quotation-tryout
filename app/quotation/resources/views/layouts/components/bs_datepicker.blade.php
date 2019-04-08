<div class="input-group date" id="{{$id}}">
    <div class="form-line">
        <input name="{{$name}}" type="text" class="form-control" placeholder="Please choose a date...">
    </div>
    <span class="input-group-addon">
        <i class="material-icons">date_range</i>
    </span>
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
            container: '#{{$id}}'
        });

    });
</script>
@endpush
