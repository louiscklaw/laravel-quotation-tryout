<div class="form-group">
    <div class="form-line">
        <textarea rows="1" class="form-control no-resize auto-growth" placeholder="{{ $slot }}"></textarea>
    </div>
</div>


@push('blank_scripts_body')
    <script src="{{asset('plugins/autosize/autosize.js')}}"></script>
@endpush
