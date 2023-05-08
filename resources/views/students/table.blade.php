<div class="table-responsive">
    <table class="table" id="students-table">
        <thead style="color: black; border: 2px solid black;">
        <tr>
            <th>Firstname</th>
        <th>Surname</th>
        <th>Dateofbirth</th>
        <th>Address</th>
        <th>Grade</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody style="color: black; border: 2px solid black;"> 
        @foreach($students as $student)
            <tr>
                <td>{{ $student->firstname }}</td>
            <td>{{ $student->surname }}</td>
            <td>{{ $student->dateofbirth }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->grade }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['students.destroy', $student->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('students.show', [$student->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('students.edit', [$student->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
						<!--  <a href="{!! route('studentratings.ratestudent', [$student->id]) !!}"
						class='btn btn-default btn-xs'><i class="glyphicon glyphicon-ok"> -->
						</i></a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
