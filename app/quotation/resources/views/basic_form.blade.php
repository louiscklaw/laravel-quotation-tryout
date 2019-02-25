@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BASIC FORM ELEMENTS</h2>
        </div>
        <!-- Input -->

        @card([
            'card_name'=>'testing card name',
            'card_desc'=>'testing card description'
            ])

            @card_inside(['card_inside_title'=>'basic examples'])
                <div class="row clearfix">
                    <div class="col-sm-12">
                        @textInput(['form_class'=>''])
                            test text input
                        @endtextInput
                    </div>
                    <div class="col-sm-12">
                        @passwordInput
                            tset password input
                        @endpasswordInput
                    </div>
                </div>
            @endcard_inside

            @card_inside(['card_inside_title'=>'Different Widths'])
                <div class="row clearfix">
                    <div class="col-sm-6">
                        @textInput(['form_class'=>''])
                            hihi col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-6">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-sm-4">
                        @textInput(['form_class'=>''])
                            hihi col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-4">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-4">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                </div>

                <div class="row clearfix">
                    <div class="col-sm-3">
                        @textInput(['form_class'=>''])
                            hihi col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-3">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-3">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                    <div class="col-sm-3">
                        @textInput(['form_class'=>''])
                            col-sm-6
                        @endtextInput

                    </div>
                </div>
            @endcard_inside

            @card_inside(['card_inside_title'=>'Different Sizes'])
                <div class="row clearfix">
                    <div class="col-sm-12">
                        @textInput(['form_class'=>'form-group-lg'])
                            Large Input
                        @endtextInput

                        @textInput(['form_class'=>''])
                            default
                        @endtextInput

                        @textInput(['form_class'=>'form-group-sm'])
                            small Input
                        @endtextInput
                    </div>
                </div>
            @endcard_inside


            @card_inside(['card_inside_title'=>'Floating Label Examples'])
                <div class="row clearfix">
                    <div class="col-sm-12">
                        @float_label_input(['form_class'=>'form-float'])
                            ?? Input
                        @endfloat_label_input
                        @float_label_input(['form_class'=>'form-float'])
                            Large Input
                        @endfloat_label_input

                        @float_label_input(['form_class'=>'form-float form-group-lg'])
                            form-float form-group-lg
                        @endfloat_label_input
                        @float_label_input(['form_class'=>'form-float form-group-sm'])
                            form-float form-group-sm
                        @endfloat_label_input
                    </div>
                </div>
            @endcard_inside

            @card_inside(['card_inside_title'=>'Input Status'])
                <div class="row clearfix">
                    <div class="col-sm-6">

                        @textInput(['form_class'=>'focused'])
                            small Input
                        @endtextInput
                    </div>
                    <div class="col-sm-6">

                        @textInput(['form_class'=>'disabled', 'input_disabled'=>''])
                            small Input
                        @endtextInput
                    </div>
                </div>
            @endcard_inside
        @endcard




        <!-- #END# Input -->
        <!-- Textarea -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'TEXTAREA',
                    'card_desc'=>'TEXTAREA test'
                    ])

                    @card_inside(['card_inside_title'=>'Basic Example'])
                        @textarea
                            Please type what you want...123
                        @endtextarea

                    @endcard_inside

                    @card_inside([
                        'card_inside_title'=>'Auto Growing Vertical Direction'
                        ])
                        <small>Taken from github.com/jackmoore/autosize/tree/master</small>


                    @autogrowing_textarea

                            Please type what you want... And please don't forget the ENTER key press multiple times :)
                        @endautogrowing_textarea
                    @endcard_inside


                @endcard


            </div>
        </div>
        <!-- #END# Textarea -->
        <!-- Select -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'TEXTAREA',
                    'card_desc'=>'TEXTAREA test'
                    ])
                    @card_inside(['card_inside_title'=>'test select'])
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                @bootstrap_select
                                    test bootstrap_select
                                @endbootstrap_select
                            </div>

                            <div class="col-sm-6">
                                @bootstrap_select(['disabled'=>''])
                                test bootstrap_select
                                @endbootstrap_select
                            </div>
                        </div>
                    @endcard_inside


                @endcard
            </div>
        </div>

        <!-- #END# Select -->
        <!--Bootstrap Date Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @card([
                    'card_name'=>'DATETIME PICKER',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside(['card_inside_title'=>'test select'])
                        <div class="row clearfix">
                            <div class="col-xs-3">
                                @card_inside(['card_inside_title'=>'Text Input'])
                                    @bootstrap_datepicker
                                        Please choose a date...123
                                    @endbootstrap_datepicker
                                @endcard_inside
                            </div>
                            <div class="col-xs-3">
                                @card_inside(['card_inside_title'=>'Text Input'])
                                    @bootstrap_datepicker
                                        component type not translated
                                    @endbootstrap_datepicker
                                @endcard_inside
                            </div>

                            <div class="col-xs-6">
                                @card_inside(['card_inside_title'=>'Range'])
                                    @bootstrap_datepicker_daterange()
                                        component type not translated
                                    @endbootstrap_datepicker_daterange
                                @endcard_inside
                            </div>
                        </div>
                    @endcard_inside
                @endcard
            </div>
        </div>

        <!--#END# Bootstrap Date Picker -->
        <!--DateTime Picker -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'DATETIME PICKER',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside(['card_inside_title'=>'test select'])
                        @bootstrap_datetime_picker
                        @endbootstrap_datetime_picker
                    @endcard_inside
                @endcard

            </div>
        </div>
        <!--#END# DateTime Picker -->
        <!-- Checkbox -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'CHECKBOX',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside(['card_inside_title'=>'test checkbox'])
                        <div class="demo-checkbox">
                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>''])
                                checkbox label
                            @endcheckbox
                            @checkbox(['checkbox_id'=>'checkbox2','checked'=>'', 'filled_in'=>''])
                                Filled In
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox3','checked'=>'', 'disabled'=>''])
                                Default - Disabled
                            @endcheckbox
                            @checkbox(['checkbox_id'=>'checkbox4','checked'=>'', 'filled_in'=>'', 'disabled'=>''])
                                Filled In - Disabled
                            @endcheckbox
                        </div>
                    @endcard_inside

                    @card_inside(['card_inside_title'=>'With Material Design Colors'])
                        <div class="demo-checkbox">
                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-red'])
                                chk-col-red
                            @endcheckbox
                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-pink'])
                                chk-col-pink
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-purple'])
                                chk-col-purple
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-deep-purple'])
                                chk-col-deep-purple
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-indigo'])
                                chk-col-indigo
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-blue'])
                                chk-col-blue
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-light-blue'])
                                chk-col-light-blue
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-cyan'])
                                chk-col-cyan
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-teal'])
                                chk-col-teal
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-green'])
                                chk-col-green
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-light-green'])
                                chk-col-light-green
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-lime'])
                                chk-col-lime
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-yellow'])
                                chk-col-yellow
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-amber'])
                                chk-col-amber
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-orange'])
                                chk-col-orange
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-deep-orange'])
                                chk-col-deep-orange
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-brown'])
                                chk-col-brown
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-grey'])
                                chk-col-grey
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-blue-grey'])
                                chk-col-blue-grey
                            @endcheckbox

                            @checkbox(['checkbox_id'=>'checkbox1','checked'=>'','chk_color'=>'chk-col-black'])
                                chk-col-black
                            @endcheckbox
                        </div>
                    @endcard_inside

                    @card_inside(['card_inside_title'=>'With Material Design Colors'])
                        <div class="demo-checkbox">
                        @checkbox(['checkbox_id'=>'chk-col-pink','checked'=>'','chk_color'=>'chk-col-pink', 'filled_in'=>''])
                            chk-col-pink - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-purple','checked'=>'','chk_color'=>'chk-col-purple', 'filled_in'=>''])
                            chk-col-purple - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-deep-purple','checked'=>'','chk_color'=>'chk-col-deep-purple', 'filled_in'=>''])
                            chk-col-deep-purple - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-indigo','checked'=>'','chk_color'=>'chk-col-indigo', 'filled_in'=>''])
                            chk-col-indigo - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-blue','checked'=>'','chk_color'=>'chk-col-blue', 'filled_in'=>''])
                            chk-col-blue - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-light-blue','checked'=>'','chk_color'=>'chk-col-light-blue', 'filled_in'=>''])
                            chk-col-light-blue - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-cyan','checked'=>'','chk_color'=>'chk-col-cyan', 'filled_in'=>''])
                            chk-col-cyan - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-teal','checked'=>'','chk_color'=>'chk-col-teal', 'filled_in'=>''])
                            chk-col-teal - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-green','checked'=>'','chk_color'=>'chk-col-green', 'filled_in'=>''])
                            chk-col-green - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-light-green','checked'=>'','chk_color'=>'chk-col-light-green', 'filled_in'=>''])
                            chk-col-light-green - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-lime','checked'=>'','chk_color'=>'chk-col-lime', 'filled_in'=>''])
                            chk-col-lime - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-yellow','checked'=>'','chk_color'=>'chk-col-yellow', 'filled_in'=>''])
                            chk-col-yellow - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-amber','checked'=>'','chk_color'=>'chk-col-amber', 'filled_in'=>''])
                            chk-col-amber - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-orange','checked'=>'','chk_color'=>'chk-col-orange', 'filled_in'=>''])
                            chk-col-orange - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-deep-orange','checked'=>'','chk_color'=>'chk-col-deep-orange', 'filled_in'=>''])
                            chk-col-deep-orange - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-brown','checked'=>'','chk_color'=>'chk-col-brown', 'filled_in'=>''])
                            chk-col-brown - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-grey','checked'=>'','chk_color'=>'chk-col-grey', 'filled_in'=>''])
                            chk-col-grey - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-blue-grey','checked'=>'','chk_color'=>'chk-col-blue-grey', 'filled_in'=>''])
                            chk-col-blue-grey - Filled
                        @endcheckbox

                        @checkbox(['checkbox_id'=>'chk-col-black','checked'=>'','chk_color'=>'chk-col-black', 'filled_in'=>''])
                            chk-col-black - Filled
                        @endcheckbox
                        </div>
                    @endcard_inside

                @endcard

            </div>
        </div>

        <!-- #END# Checkbox -->
        <!-- Radio -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'radio',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside(['card_inside_title'=>'test radio'])
                        <div class="demo-radio-button">
                        @radio(['radio_group'=>'1','radio_id'=>'radio_id_1'])
                            radio_slot_text
                        @endradio

                        @radio(['radio_group'=>'1','radio_id'=>'radio_id_2'])
                            radio_slot_text
                        @endradio

                        @radio(['radio_group'=>'1','radio_id'=>'radio_id_3','with_gap'=>''])
                            radio_slot_text
                        @endradio

                        @radio(['radio_group'=>'1','radio_id'=>'radio_id_4','with_gap'=>''])
                            radio_slot_text
                        @endradio

                        @radio(['radio_group'=>'2',
                            'radio_id'=>'radio_id_4',
                            'with_gap'=>'',
                            'checked'=>'','disabled'=>''
                            ])
                            radio_slot_text
                        @endradio
                        </div>
                    @endcard_inside
                @endcard

                @card([
                    'card_name'=>'RADIO',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside([
                        'card_inside_title'=>'With Material Design Colors',
                        'card_inside_desc'=>'<small>You can use material design colors which examples are .radio-col-pink, .radio-col-cyan class</small>'
                        ])

                    <div class="demo-radio-button">
                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-red','radio_col'=>'radio-col-red'])
                        radio-col-red
                    @endradio


                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-pink','radio_col'=>'radio-col-pink'])
                        radio-col-pink
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-purple','radio_col'=>'radio-col-purple'])
                        radio-col-purple
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-deep-purple','radio_col'=>'radio-col-deep-purple'])
                        radio-col-deep-purple
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-indigo','radio_col'=>'radio-col-indigo'])
                        radio-col-indigo
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-blue','radio_col'=>'radio-col-blue'])
                        radio-col-blue
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-light-blue','radio_col'=>'radio-col-light-blue'])
                        radio-col-light-blue
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-cyan','radio_col'=>'radio-col-cyan'])
                        radio-col-cyan
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-teal','radio_col'=>'radio-col-teal'])
                        radio-col-teal
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-green','radio_col'=>'radio-col-green'])
                        radio-col-green
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-light-green','radio_col'=>'radio-col-light-green'])
                        radio-col-light-green
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-lime','radio_col'=>'radio-col-lime'])
                        radio-col-lime
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-yellow','radio_col'=>'radio-col-yellow'])
                        radio-col-yellow
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-amber','radio_col'=>'radio-col-amber'])
                        radio-col-amber
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-orange','radio_col'=>'radio-col-orange'])
                        radio-col-orange
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-deep-orange','radio_col'=>'radio-col-deep-orange'])
                        radio-col-deep-orange
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-brown','radio_col'=>'radio-col-brown'])
                        radio-col-brown
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-grey','radio_col'=>'radio-col-grey'])
                        radio-col-grey
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-blue-grey','radio_col'=>'radio-col-blue-grey'])
                        radio-col-blue-grey
                    @endradio

                    @radio(['radio_group'=>'3','radio_id'=>'radio-col-black','radio_col'=>'radio-col-black'])
                        radio-col-black
                    @endradio

                    </div>

                    @endcard_inside
                @endcard

            </div>
        </div>

        <!-- #END# Radio -->
        <!-- Switch Button -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                    'card_name'=>'radio',
                    'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                    ])
                    @card_inside(['card_inside_title'=>'test radio'])
                        <div class="demo-switch">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on'])
                                normal
                            @endswitch
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'disabled'=>''])
                                disabled - on
                            @endswitch
                            @switch(['off_text'=>'off','on_text'=>'on', 'disabled'=>''])
                                disabled - off
                            @endswitch
                        </div>
                    @endcard_inside
                @endcard
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @card([
                'card_name'=>'radio',
                'card_desc'=>'Taken from github.com/T00rk/bootstrap-material-datetimepicker with momentjs.com'
                ])
                @card_inside(['card_inside_title'=>'test radio'])
                <div class="demo-switch">
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            @switch(['checked'=>'', 'off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-red'])
                            switch-col-red
                            @endswitch
                        </div>
                        <div class="col-sm-3">
                            @switch(['checked'=>'', 'off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-pink'])
                            switch-col-pink
                            @endswitch
                        </div>

                        <div class="col-sm-3">
                            @switch(['checked'=>'', 'off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-purple'])
                            switch-col-purple
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on',
                            'switch_color'=>'switch-col-deep-purple'])
                            switch-col-deep-purple
                            @endswitch
                        </div>

                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-indigo'])
                            switch-col-indigo
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-blue'])
                            switch-col-blue
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-light-blue'])
                            switch-col-light-blue
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-cyan'])
                            switch-col-cyan
                            @endswitch
                        </div>


                    </div>
                    <div class="row clearfix">


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-teal'])
                            switch-col-teal
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-green'])
                            switch-col-green
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on',
                            'switch_color'=>'switch-col-light-green'])
                            switch-col-light-green
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-lime'])
                            switch-col-lime
                            @endswitch
                        </div>


                    </div>
                    <div class="row clearfix">

                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-yellow'])
                            switch-col-yellow
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-amber'])
                            switch-col-amber
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-orange'])
                            switch-col-orange
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on',
                            'switch_color'=>'switch-col-deep-orange'])
                            switch-col-deep-orange
                            @endswitch
                        </div>


                    </div>
                    <div class="row clearfix">
                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-brown'])
                            switch-col-brown
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-grey'])
                            switch-col-grey
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-blue-grey'])
                            switch-col-blue-grey
                            @endswitch
                        </div>


                        <div class="col-sm-3">
                            @switch(['checked'=>'','off_text'=>'off','on_text'=>'on', 'switch_color'=>'switch-col-black'])
                            switch-col-black
                            @endswitch
                        </div>
                    </div>
                </div>
                @endcard_inside
                @endcard
            </div>
        </div>
        <!--#END# Switch Button -->
    </div>
</section>

@endsection

@push('blank_scripts_body')
    @parent

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
