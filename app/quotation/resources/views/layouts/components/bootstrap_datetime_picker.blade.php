<div class="row clearfix">
    <div class="col-sm-4">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="timepicker form-control" placeholder="Please choose a time...">
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <div class="form-line">
                <input type="text" class="datetimepicker form-control" placeholder="Please choose date & time...">
            </div>
        </div>
    </div>
</div>

@push('head_link')
    <link href="{{asset('plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css')}}" rel="stylesheet" />
@endpush
