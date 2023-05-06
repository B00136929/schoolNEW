<div class="table-responsive">
    <table class="table" id="class1s-table">
        <thead>
        <tr>
		<th>class id</th>
            <th>Name</th>
        <th>Subject</th>
        <th>Teacher Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($class1s as $class1)
            <tr>
			<td>{{ $class1->id }}</td>
                <td>{{ $class1->name }}</td>
            <td>{{ $class1->subject }}</td>
            <td>{{ $class1->teacher_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['class1s.destroy', $class1->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('class1s.show', [$class1->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('class1s.edit', [$class1->id]) }}"
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
