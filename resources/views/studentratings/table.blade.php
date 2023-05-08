<div class="table-responsive">
    <table class="table" id="studentratings-table">
        <thead style="color: black; border: 2px solid black;">
        <tr>
            <th>Rating</th>
        <th>Comment</th>
        <th>Student Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody style="color: black; border: 2px solid black;">
        @foreach($studentratings as $studentrating)
            <tr>
                <td>{{ $studentrating->rating }}</td>
            <td>{{ $studentrating->comment }}</td>
            <td>{{ $studentrating->student_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['studentratings.destroy', $studentrating->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('studentratings.show', [$studentrating->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('studentratings.edit', [$studentrating->id]) }}"
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
