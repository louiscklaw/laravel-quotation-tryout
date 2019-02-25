<table id="table_id" class="display">
    <thead>
        <tr>
            <th>quot_ref</th>
            <th>quot_date</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($all_records as $record)
            <tr>
                <td>{{$record->quot_ref}}</td>
                <td>{{$record->quot_date}}</td>
                <td>
                    <a href="{{ route('quot.debug_view',['id'=>$record->id])}}">View</a>
                    /
                    <a href="{{ route('quot.debug_edit',['id'=>$record->id])}}">Edit</a>
                    /
                    <a href="{{ route('quot.debug_pdf',['id'=>$record->id])}}">PDF</a>
                </td>
            </tr>

        @endforeach

    </tbody>
</table>
