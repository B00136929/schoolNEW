<div class="table-responsive">
    <table class="table" id="attendances-table">
        <thead style="color: black; border: 2px solid black;">
        <tr>
		<th>attendance Id</th>
            <th>Student Id</th>
        <th>Class1 Id</th>
        <th>Date1</th>
        <th>Present</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody style="color: black; border: 2px solid black;">
        @foreach($attendances as $attendance)
            <tr>
			<td>{{ $attendance->id }}</td>
                <td>{{ $attendance->student_id }}</td>
            <td>{{ $attendance->class1_id }}</td>
            <td>{{ $attendance->date1 }}</td>
            <td>{{ $attendance->present ? 'Yes' : 'No' }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['attendances.destroy', $attendance->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('attendances.show', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('attendances.edit', [$attendance->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
