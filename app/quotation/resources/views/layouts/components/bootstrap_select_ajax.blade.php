
<select id="{{ $select_name }}" class="selectpicker with-ajax" data-live-search="true" multiple>
    @if (isset($preselect))
        <option value="{{$preselect['value']}}" data-subtext="{{$preselect['subtext']}}">{{$preselect['text']}}</option>
    @endif
</select>

@push('blank_scripts_body')
    <script type="text/javascript" src="{{ asset('/js/ajax-bootstrap-select.js') }}"></script>
    <script>
    $('document').ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#{{ $select_name }}").ajaxSelectPicker( {
            ajax          : {
                url     : '{{ $ajax_url }}',
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
                            text : data[i].text,
                            value: data[i].value,
                            data : {
                                subtext: data[i].subtext
                            }
                        }));
                    }
                }
                // You must always return a valid array when processing data. The
                // data argument passed is a clone and cannot be modified directly.
                return array;
            }
        });

        $("#{{ $select_name }}").trigger('change');
    });

    </script>
@endpush
