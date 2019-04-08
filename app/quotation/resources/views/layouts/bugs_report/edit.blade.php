@extends('layouts.material.html')

@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Report bugs</h2>
                        <small>report system abnormality 123</small>

                        @button_save
                        @endbutton_save

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <label for="username">username</label>
                                            <input id="username" type="text" class="form-control date" placeholder="Username">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    @bs_datepicker(
                                        ['name'=>'test_datepicker',
                                        'id'=>'test_datepicker']
                                    )
                                    @endbs_datepicker
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">category</i>
                                        </span>
                                        <div class="form-line">
                                            <label for="select_category">bugs category</label>
                                            @select2_ajax([
                                                'placeholder' => __('test placeholder'),
                                                'ajax_url' => 'https://api.github.com/search/repositories',
                                                'id'=>'select_category'
                                            ])
                                            @endselect2_ajax
                                        </div>
                                    </div>

                                </div>

                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @textareaMCE([
                                            'textinput_name'=>__('bugs_report_description')
                                        ])
                                        {{123}}
                                        {{-- {{ $bugs_report->bugsreport_description }} --}}
                                        @endtextareaMCE
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
