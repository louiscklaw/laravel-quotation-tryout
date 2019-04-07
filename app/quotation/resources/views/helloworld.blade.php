@extends('layouts.material.html')

@push('append_meta')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endpush

@push('append_head')
    <link rel="stylesheet" href="{{ asset('/css/ajax-bootstrap-select.css') }}"/>
@endpush

@section('content')
<section class="content">
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <select class="selectpicker with-ajax" data-live-search="true" multiple>
                        <option value="neque.venenatis.lacus@neque.com" data-subtext="neque.venenatis.lacus@neque.com" selected>
                            Chancellor
                        </option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@push('blank_scripts_body')
    <script type="text/javascript" src="{{ asset('/js/ajax-bootstrap-select.js') }}"></script>
    <script>
    $('document').ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var options = {
            ajax          : {
                url     : '/quotation/bs_select/client/customer_name',
                type    : 'POST',
                dataType: 'json',
                data    : {
                    q: '@{{{q}}}'
                }
            },
            locale        : {
                emptyTitle: 'Select and Begin Typing'
            },
            log           : 3,
            preprocessData: function (data) {
                var i, l = data.length, array = [];
                if (l) {
                    for (i = 0; i < l; i++) {
                        array.push($.extend(true, data[i], {
                            text : data[i].Name,
                            value: data[i].Email,
                            data : {
                                subtext: '123'
                            }
                        }));
                    }
                }
                // You must always return a valid array when processing data. The
                // data argument passed is a clone and cannot be modified directly.
                return array;
            }
        };

        $('.selectpicker').selectpicker().filter('.with-ajax').ajaxSelectPicker(options);
        $('select').trigger('change');
    });

    </script>
@endpush
