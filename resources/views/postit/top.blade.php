
@extends('postit.layout')

@section('content')

<div class="cloneArea">
    <div class="paper" id = "paper_origin">
        
             <form action="res" method="post">
                <textarea name="sentence" id="postit" rows="11" cols="40" class="input-sticky-note">{{$topmodel->sentence}}</textarea>
                <input type="submit" value="SEND">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
             </form>
    </div>
</div>
@endsection