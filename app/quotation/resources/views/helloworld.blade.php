@extends('layouts.material.html')

@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@push('append_head')
    <link href="{{ asset('/css/select2-bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>Report bugs</h2>
                        <small>report system abnormality</small>
                    </div>
                    <div class="body">
                        <div class="form-group">
                                @textareaMCE([
                                    'textinput_name'=>'bugs_report_description',
                                ])
                                    {{123}}
                                    {{-- {{ $bugs_report->bugsreport_description }} --}}
                                @endtextareaMCE




                            <label>Example multiple select</label>
                            <select multiple class="form-control js-example-basic-multiple" placeholder="Choose anything" data-allow-clear="1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('blank_scripts_body')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $('select').each(function () {
            $(this).select2({
                theme: 'bootstrap4',
                width: '100%',
                placeholder: $(this).attr('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
            });
        });

    </script>
@endpush
