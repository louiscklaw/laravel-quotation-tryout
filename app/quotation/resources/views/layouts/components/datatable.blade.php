<table id="table_id" class="display">
    <thead>
        <tr>
            @foreach(array($all_records[0]) as $record)
                @foreach(array_keys($record->getAttributes()) as $field_name)

                    <th>{{$field_name}}</th>
                @endforeach
            @endforeach
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_records as $record)
            <tr>
                @foreach(array_keys($record->getAttributes()) as $field_name)
                    <td>{{$record->$field_name}}</td>
                @endforeach
                <td>
                    <a href="{{ route($vep_route_target.'.debug_view',['id'=>$record->id]) }}">View</a>
                    <a href="{{ route($vep_route_target.'.debug_edit',['id'=>$record->id]) }}">edit</a>
                    <a href="{{ route($vep_route_target.'.debug_pdf',['id'=>$record->id]) }}">pdf</a>
                </td>
            </tr>

        @endforeach

    </tbody>
</table>
