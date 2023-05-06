<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $attendance->student_id }}</p>
</div>

<!-- Class1 Id Field -->
<div class="col-sm-12">
    {!! Form::label('class1_id', 'Class1 Id:') !!}
    <p>{{ $attendance->class1_id }}</p>
</div>

<!-- Date1 Field -->
<div class="col-sm-12">
    {!! Form::label('date1', 'Date1:') !!}
    <p>{{ $attendance->date1 }}</p>
</div>

<!-- Present Field -->
<div class="col-sm-12">
    {!! Form::label('present', 'Present:') !!}
    <p>{{ $attendance->present }}</p>
</div>

