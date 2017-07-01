@extends('postit.layout')
 
@section('content')
 {!! Form::model!!}
   <div class="form-group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
   </div>

 {!! Form::close() !!}
@endsection