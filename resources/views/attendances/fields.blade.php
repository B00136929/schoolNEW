<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Class1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('class1_id', 'Class1 Id:') !!}
    {!! Form::number('class1_id', null, ['class' => 'form-control']) !!}
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
