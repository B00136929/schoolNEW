<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::number('rating', null, ['class' => 'form-control']) !!}
</div>

<!-- Comment Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('comment', 'Comment:') !!}
    {!! Form::textarea('comment', null, ['class' => 'form-control']) !!}
</div>

<!-- Student Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('student_id', 'Student Id:') !!}
    {!! Form::number('student_id', null, ['class' => 'form-control']) !!}
</div>