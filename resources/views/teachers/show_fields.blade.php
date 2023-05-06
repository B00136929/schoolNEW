<!-- Firstname Field -->
<div class="col-sm-12">
    {!! Form::label('firstname', 'Firstname:') !!}
    <p>{{ $teacher->firstname }}</p>
</div>

<!-- Surname Field -->
<div class="col-sm-12">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{{ $teacher->surname }}</p>
</div>

<!-- Subject Field -->
<div class="col-sm-12">
    {!! Form::label('subject', 'Subject:') !!}
    <p>{{ $teacher->subject }}</p>
</div>

<!-- Dateofbirth Field -->
<div class="col-sm-12">
    {!! Form::label('dateofbirth', 'Dateofbirth:') !!}
    <p>{{ $teacher->dateofbirth }}</p>
</div>

