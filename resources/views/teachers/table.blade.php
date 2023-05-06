<div class="table-responsive">
    <table class="table" id="teachers-table">
        <thead>
        <tr>
		<th>teacher id</th>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Subject</th>
        <th>Dateofbirth</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr>
			<td>{{ $teacher->id }}</td>
                <td>{{ $teacher->firstname }}</td>
            <td>{{ $teacher->surname }}</td>
            <td>{{ $teacher->subject }}</td>
            <td>{{ $teacher->dateofbirth }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['teachers.destroy', $teacher->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('teachers.show', [$teacher->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('teachers.edit', [$teacher->id]) }}"
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
