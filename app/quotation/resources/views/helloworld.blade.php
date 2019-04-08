@extends('layouts.material.html')

@push('append_head')
    <link href="{{ asset('/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />
@endpush


@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BLANK PAGE</h2>
            <input type="text" class="form-control">

        </div>
    </div>
</section>
@endsection

@push('append_body')
    <script src="{{ asset('/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script>
        $('document').ready(function () {
            $('input').datepicker({});

        });
    </script>
@endpush
