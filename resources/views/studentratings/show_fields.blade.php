<!-- Rating Field -->
<div class="col-sm-12">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $studentrating->rating }}</p>
</div>

<!-- Comment Field -->
<div class="col-sm-12">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $studentrating->comment }}</p>
</div>

<!-- Student Id Field -->
<div class="col-sm-12">
    {!! Form::label('student_id', 'Student Id:') !!}
    <p>{{ $studentrating->student_id }}</p>
</div>

