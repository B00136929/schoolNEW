<div class="table-responsive">
    <table class="table" id="enrollments-table">
        <thead>
        <tr>
            <th>Class1 Id</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($enrollments as $enrollment)
            <tr>
                <td>{{ $enrollment->class1_id }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['enrollments.destroy', $enrollment->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('enrollments.show', [$enrollment->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('enrollments.edit', [$enrollment->id]) }}"
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
