@extends('layouts.material.html')

@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="card">
                <div class="header">
                    <h2>
                        <span>
                            <i class="material-icons" style="font-size:30px; vertical-align: middle;">person</i>
                            Client Edit
                        </span>
                        <small>Edit client information</small>
                    </h2>
                    @if (isset($action) && $action =='create')
                    <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Create')}}</button>
                    @else
                    <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Save')}}</button>
                    <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('PDF') }}</button>
                    @endif
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_name'])
                            {{$client->client_name}}
                            @endtextInput
                        </div>
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_cname'])
                            {{$client->client_cname}}
                            @endtextInput
                        </div>
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_gender'])
                            {{$client->client_gender}}
                            @endtextInput
                        </div>
                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_brithday'])
                            {{$client->client_brithday}}
                            @endtextInput
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!-- contact card -->
            <div class="card">
                <div class="header">
                    <h2>
                        <span>
                            <i class="material-icons"
                                style="font-size:30px; vertical-align: middle;">perm_contact_calendar</i>
                            Client contact method

                        </span>
                    </h2>
                    <small>Edit client method</small>
                </div>
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_whatsapp'])
                            {{$client->client_whatsapp}}
                            @endtextInput
                        </div>
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_mobile'])
                            {{$client->client_mobile}}
                            @endtextInput
                        </div>
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_email'])
                            {{$client->client_email}}
                            @endtextInput
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            @textInput(['form_class'=>'', 'placeholder'=>'', 'textinput_name'=>'client_address'])
                            {{$client->client_address}}
                            @endtextInput
                        </div>
                    </div>
                </div>
            </div>
            <!-- end contact card -->
        </div>

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <!-- remarks card -->
            <div class="card">
                <div class="header">
                    <h2>
                        {{ __('Remarks')}}
                    </h2>
                </div>

                <div class="body">

                <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Tags')}}
                                    @select2_ajax([
                                    'placeholder' => __('test placeholder'),
                                    'ajax_url' => route('client.get_client_body_tags'),
                                    'id'=>'select_category'
                                    ])
                                    @endselect2_ajax
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Remarks')}}
                                    <textarea rows="6" class="no-resize" name="textarea1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- end remarks card -->
        </div>

    </div>
</section>
@endsection


@push('blank_scripts_body')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementsByName("textarea1")[0],
        });
    </script>
@endpush
