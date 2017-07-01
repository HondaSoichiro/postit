
@extends('postit.layout')

@section('content')

<div class="paper">
        <div class="sticky-input-field">
             <form action="res" method="post">
                <textarea name="sentence" rows="20" cols="40" class="input-sticky-note">ここに入ります->{{$sentence[0]}}</textarea>
                <input type="submit" value="SEND">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
             </form>
            </div>
            <ul class="sticky-lines">
                <li><span></span></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
            <div class="left-shadow"></div>
            <div class="right-shadow"></div>

</div>
@endsection