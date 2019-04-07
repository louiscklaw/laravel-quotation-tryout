@extends('layouts.material.html')

@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush

@section('content')
<section class="content">

    @if (Request::is('*/create') )
        {!! Form::model($company, ['method'=>'POST', 'action'=> ['companyController@store', $company->id]]) !!}
    @elseif(Request::is('*/edit'))
        {!! Form::model($company, ['method'=>'PATCH', 'action'=> ['companyController@update', $company->id]]) !!}
    @endif

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-sm-6">
                            <h2>
                                Company Edit
                                <small>Edit company information</small>
                            </h2>
                        </div>
                        <div class="col-sm-6">
                            @if (Request::is('*/create') )
                                {!! Form::submit(__('Create'), ['class'=>'btn btn-primary']) !!}

                            @else
                                {!! Form::submit(__('Save'), ['class'=>'btn btn-primary']) !!}

                                <a class="btn btn-primary" href="{{ route('company.pdf',['id'=>$company->id]) }}" role="button">{{ __('PDF')}}</a>

                            @endif
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
                                    {{ __('Remarks')}}
                                    <textarea rows="6" class="no-resize" name="textarea1"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <div class="form-line">
                                    {{ __('Description') }}
                                    <textarea rows="6" class="no-resize" name="textarea2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

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
