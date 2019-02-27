<table id="table_id" class="display">
    <thead>
        <tr>
            @if ($all_records->count() > 0)
                <th>Action</th>
                @foreach(array($all_records[0]) as $record)
                    @foreach(array_keys($record->getAttributes()) as $field_name)

                        <th>{{$field_name}}</th>
                    @endforeach
                @endforeach
            @else
                no record found
            @endif
        </tr>
    </thead>
    <tbody>
        @if ($all_records->count() > 0)
            @foreach($all_records as $record)
                <tr>
                    <td>
                        <a href="{{ route($vep_route_target.'.debug_view',['id'=>$record->id]) }}">View</a>
                        <a href="{{ route($vep_route_target.'.debug_edit',['id'=>$record->id]) }}">edit</a>
                        <a href="{{ route($vep_route_target.'.debug_pdf',['id'=>$record->id]) }}">pdf</a>
                    </td>
                    @foreach(array_keys($record->getAttributes()) as $field_name)
                        <td>{{$record->$field_name}}</td>
                    @endforeach
                </tr>

            @endforeach
        @endif
    </tbody>
</table>
