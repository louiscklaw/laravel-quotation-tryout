@extends('layouts.material.html')

@push('append_css')
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
@endpush

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>{{ $page_h2 }}</h2>
        </div>

        @include('layouts.components.datatable')
    </div>
</section>

@endsection


@push('blank_scripts_body')
    @include('layouts.js_datatable')
@endpush
