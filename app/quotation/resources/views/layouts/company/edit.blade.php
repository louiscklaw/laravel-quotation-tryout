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
                                @textInput([
                                    'textinput_label'=>'short name',
                                    'textinput_name' => 'company_name'
                                ])
                                    {{$company->company_name}}
                                @endtextInput
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                @textInput([
                                    'textinput_label'=>'Chinese name',
                                    'textinput_name' => 'company_cname'
                                ])
                                    {{$company->company_cname}}
                                @endtextInput
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                @textInput([
                                    'textinput_label'=>'English name',
                                    'textinput_name' => 'company_ename'
                                ])
                                    {{$company->company_ename}}
                                @endtextInput
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                @textInput([
                                    'textinput_label'=>'telephone',
                                    'textinput_name' => 'company_contact_tel'
                                ])
                                    {{$company->company_contact_tel}}
                                @endtextInput
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                @textInput([
                                    'textinput_label'=>'Mobile phone',
                                    'textinput_name' => 'company_contact_mobile'
                                ])
                                    {{$company->company_contact_mobile}}
                                @endtextInput
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group form-float">
                                @textInput([
                                    'textinput_label'=>'Fax',
                                    'textinput_name' => 'company_contact_fax'
                                ])
                                    {{$company->company_contact_fax}}
                                @endtextInput
                            </div>
                        </div>
                    </div>

                    <div class="row clearfix">
                        <div class="col-sm-12">
                            <div class="form-group">
                                @textarea([
                                    'textinput_label'=>'Address',
                                    'textinput_name'=>'company_address',
                                    'rows'=>2
                                    ])
                                    {{$company->company_address}}
                                @endtextarea
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
                                @textareaMCE([
                                    'textinput_name'=>'company_remark',
                                ])
                                    {{ $company->company_remark }}
                                @endtextareaMCE
                            </div>
                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                @textareaMCE([
                                    'textinput_name'=>'company_remark2',
                                ])
                                    {{ $company->company_remark2 }}
                                @endtextareaMCE
                            </div>

                        </div>

                        <div class="row clearfix">
                            <div class="col-sm-12">
                                @textareaMCE([
                                    'textinput_name'=>'company_remark3',
                                ])
                                    {{ $company->company_remark3 }}
                                @endtextareaMCE
                            </div>

                        </div>

                </div>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

</section>

@endsection
