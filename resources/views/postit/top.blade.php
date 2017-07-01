
@extends('postit.layout')

@section('content')
    <div>
<form action="res" method="post">
<textarea name="sentence" rows="20" cols="40">
{{$sentence[0]}}
</textarea>
<input type="submit" value="SEND">
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</div>
@endsection