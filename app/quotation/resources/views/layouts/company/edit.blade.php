@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            <h2>
                                Company Edit
                                <small>Edit company information</small>
                            </h2>
                        </div>
                        <div class="col-sm-3">
                            @if (isset($form_action) && $form_action =='create')
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Create')}}</button>
                            @else
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Save')}}</button>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('PDF') }}</button>

                            @endif
                            <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Cancel') }}</button>
                        </div>



                    </div>

                </div>

                <div class="body">
                    <div class="row clearfix">

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('short name') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('Chinese name') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('English name') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('telephone') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('mobile number') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('fax') }}</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label>{{ __('Address')}}</label>
                                    <textarea rows="2" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('website') }}</label>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">{{ __('email') }}</label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
                <div class="card">
                    <div class="header">
                        <h2>
                            Summary
                            <small>Edit company information</small>
                        </h2>
                    </div>

                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>{{ __('Remarks')}}</label>
                                        <textarea rows="6" class="form-control no-resize"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>{{ __('Description') }}</label>
                                        <textarea rows="6" class="form-control no-resize"></textarea>
                                    </div>
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


@push('blank_scripts_body')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementsByName("textarea1")[0],
        });

        var simplemde = new SimpleMDE({
            element: document.getElementsByName("textarea2")[0],
        });
    </script>
@endpush
