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
                        <small>report system abnormality</small>

                        @button_save
                        @endbutton_save

                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">

                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">
                                    @select2_ajax([
                                        'label'=>'test select2',
                                        'placeholder' => __('test placeholder'),
                                        'ajax_url' => 'https://api.github.com/search/repositories'
                                    ])
                                    @endselect2_ajax
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-3">

                                </div>
                                <div class="row clearfix">

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        @textareaMCE([
                                            'textinput_name'=>__('bugs_report_description'),
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
