
@extends('postit.layout')

@section('content')

<div class="paper">
        <div class="sticky-input-field">
             <form action="5" method="post">
                <textarea name="sentence" id="ta" rows="11" cols="40" class="input-sticky-note">{{$postit->sentence}}</textarea>
                <input type="submit" value="SEND">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
             </form>
</div>
@endsection