@extends('layouts.material.html')

@push('append_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@push('append_head')
    <link rel="stylesheet" href="{{ asset('/css/ajax-bootstrap-select.css') }}"/>
@endpush

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    @bootstrap_select_ajax([
                        'select_name'=>'select_test',
                        'ajax_url'=> '/quotation/bs_select/client/customer_name',
                        'preselect'=>['value'=>'ipsum@Quisqueac.net', 'text'=>'Lacy', 'subtext'=>'Lacy']
                        ])
                    @endbootstrap_select_ajax
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
