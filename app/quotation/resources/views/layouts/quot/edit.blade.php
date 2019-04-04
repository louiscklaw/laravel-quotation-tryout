@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-6">
                            <h2>
                                Quotatioon Edit
                                <small>Edit client information</small>
                            </h2>
                        </div>

                        <div class="col-lg-6">
                            @if (isset($action) && $action =='create')
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Create')}}</button>
                            @else
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('Save')}}</button>
                                <button type="button" class="btn btn-primary m-t-15 waves-effect">{{ __('PDF') }}</button>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('From')}}</label>
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Bill To')}}</label>
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Quote #</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row clearfix">

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control">
                                    <label class="form-label">Date</label>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        <!-- col end -->
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="card">
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <label class="form-label">{{ __('Terms & Conditions')}}</label>
                                    <textarea rows="6" class="form-control no-resize"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        <!-- col end -->
        </div>
    </div>
</section>
@endsection
