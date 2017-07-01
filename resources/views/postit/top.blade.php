@extends('postit.layout')
 
@section('content')
 {!! Form::open(['url' => 'top'])!!}
   <div class="form-group">
            {!! Form::label('body', 'PostPlese:') !!}
            {!! Form::textarea('sentence', null, ['class' => 'form-control']) !!}
   </div>

 {!! Form::close() !!}
@endsection