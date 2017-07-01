 
@extends('postit.layout')
 
@section('content')
    <div>
<form action="Res" method="post">
<textarea name="sentence" rows="20" cols="40">ここに感想を記入してください。</textarea>
<input type="submit" value="SEND">
<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
</div>
@endsection