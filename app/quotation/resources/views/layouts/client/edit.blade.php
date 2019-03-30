@extends('layouts.material.html')


@section('content')
<section class="content">
    <div class="container-fluid">

        @if(isset($form_action) and $form_action =='edit')
            <div class="block-header">
                <h2>client editor</h2>
            </div>
            {{ Form::model($record, ['method'=>'PATCH', 'action'=> [$update_controller, $record->id]]) }}
        @else
            <div class="block-header">
                <h2>create client</h2>
            </div>
            {{ Form::model($record, ['method'=>'POST', 'action'=> [$store_controller, $record->id]]) }}
        @endif

        @card([
            'card_name'=>$editor_name,
            'card_desc'=>$editor_description,
            'card_class'=>'col-lg-4 col-md-4 col-sm-6 col-xs-12'
        ])

            <div class="form-group" style="margin-top: 20px">
                {!! Form::submit('Confirm', ['class'=>'btn btn-primary']) !!}
            </div>

            @db_txt_field(['field_name'=>'client_status',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'
            ])
            @enddb_txt_field

            @db_txt_field([
                'field_name'=>'client_date',
                'field_name_class' => 'col-sm-3',
                'field_value_class' =>'col-sm-3'
            ])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_update_at',
                'field_name_class' => 'col-sm-3',
                'field_value_class' =>'col-sm-3'])
            @enddb_txt_field

        @endcard

        @card([
            'card_name'=>$editor_name,
            'card_desc'=>$editor_description,
            'card_class'=>'col-lg-4 col-md-4 col-sm-6 col-xs-12'
        ])

            @db_txt_field([
                'field_name'=>'client_name',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'
            ])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_cname',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'
            ])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_gender',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_brithday',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'])
            @enddb_txt_field

        @endcard

        @card([
            'card_name'=>'client contact',
            'card_desc'=>$editor_description,
            'card_class'=>'col-lg-4 col-md-4 col-sm-6 col-xs-12'
        ])

            @db_txt_field([
                'field_name'=>'client_whatsapp',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'
            ])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_mobile',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'
            ])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_address',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'])
            @enddb_txt_field

            @db_txt_field(['field_name'=>'client_email',
                'field_name_class' => 'col-sm-6',
                'field_value_class' =>'col-sm-6'])
            @enddb_txt_field

        @endcard

        @card([
            'card_name'=>'client Remarks',
            'card_desc'=>$editor_description,
            'card_class'=>'col-xs-12'
        ])

            @db_textarea(['field_name'=>'client_desc',
                'field_name_class' => 'col-sm-12',
                'field_value_class' =>'col-sm-12'])
            @enddb_textarea

            @db_textarea(['field_name'=>'client_remarks',
                'field_name_class' => 'col-sm-12',
                'field_value_class' =>'col-sm-12'])
            @enddb_textarea

        @endcard

        {{ Form::close() }}

    </div>
</section>

@endsection


@push('blank_scripts_body')


    <!-- Autosize Plugin Js -->
    <script src="{{asset('plugins/autosize/autosize.js')}}"></script>

    <!-- Moment Plugin Js -->
    <script src="{{asset('plugins/momentjs/moment.js')}}"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="{{asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/pages/forms/basic-form-elements.js')}}"></script>

@endpush
