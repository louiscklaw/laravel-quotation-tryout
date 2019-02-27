<div class="col-md-12">
    <p>
        <b>{{$title}}</b>
    </p>
    {!! Form::select(
        $slot,
        $select_list,
        null,
        ['class'=>'selectpicker', 'data-live-search'=>'true']
    ) !!}

</div>
