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
                        <div class="form-group">
                                @textareaMCE([
                                    'textinput_name'=>__('bugs_report_description'),
                                ])
                                    {{123}}
                                    {{-- {{ $bugs_report->bugsreport_description }} --}}
                                @endtextareaMCE

                                @select2_ajax([
                                    'label'=>'test select2',
                                    'placeholder' => __('test placeholder'),
                                    'ajax_url' => route('bugs_report.get_bugs_category')
                                    ])
                                @endselect2_ajax

<!--
                            <label>Example multiple select</label>
                            <select multiple class="form-control js-example-basic-multiple" placeholder="Choose anything" data-allow-clear="1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
