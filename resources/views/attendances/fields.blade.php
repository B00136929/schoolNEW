<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
	<select name ="studentid" class="form-control">
    @foreach($students as $student)
		<option value='{{$student->id}}'>{{$student}}</option>
	@endforeach
	</select>
</div>

<!-- Class1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class1_id', 'Class1 Id:') !!}
	<select name ="class1id" class="form-control">
    @foreach($class1s as $class1)
		<option value='{{$class1->id}}'>{{$class1}}</option>
	@endforeach
	</select>
</div>

<!-- Date1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date1', 'Date1:') !!}
    {!! Form::text('date1', null, ['class' => 'form-control','id'=>'date1']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date1').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Present Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('present', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('present', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('present', 'Present', ['class' => 'form-check-label']) !!}
    </div>
</div>
