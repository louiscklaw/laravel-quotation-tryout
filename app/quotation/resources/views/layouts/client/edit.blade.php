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
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Client name</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Client cname</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Client gender</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">

                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Client brithday</label>
                                </div>
                            </div>
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
                                <i class="material-icons" style="font-size:30px; vertical-align: middle;">perm_contact_calendar</i>
                                Client contact method

                            </span>
                        </h2>
                        <small>Edit client method</small>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">whatsapp</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">mobile number</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">email</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label class="form-label">Address</label>
                                    <textarea rows="2" class="form-control no-resize"></textarea>
                                </div>
                            </div>
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
                        <small>{{ __('Additional information about client')}}}</small>
                    </h2>
                </div>

                <div class="body">

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
