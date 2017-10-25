@extends('postit.layout')
@section('content')

<form method="post"  id="postform" class="postform-class" >
    <div class="postit_origin" id ="postit_origin" style="position: absolute; top: 120px; left: 200px; display: none;">
      <div class="postit-wrapp">
        <textarea name="sentence" id="postit_origin" rows="11" cols="40" class="input-sticky-note">こちらに入力してください</textarea>
       </div>
       <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" id="postit_position_x" name="postit_position_x" value="">
        <input type="hidden" id="postit_position_y" name="postit_position_y" value="">
    </div>

@foreach ($postits as $postit)
	<div class="postit{{ $postit->id }}" id ="postit{{ $postit->id }}" style="position: absolute; top: {{ $postit->y }}px; left: {{ $postit->x }}px; display: block;">
      <div class="postit-wrapp">
		<textarea name="sentence{{ $postit->id }}" id="postit" rows="11" cols="40" class="input-sticky-note">{{$postit->sentence}}</textarea>
	   </div>
	   <input type="hidden" name="_token{{ $postit->id }}" value="{{csrf_token()}}">
        <input type="hidden" id="postit_position_x{{ $postit->id }}" name="postit_position_x{{ $postit->id }}" value="{{$postit->x}}">
        <input type="hidden" id="postit_position_y{{ $postit->id }}" name="postit_position_y{{ $postit->id }}" value="{{$postit->y}}">
        <!--<button id="button{{ $postit->id }}">-->
    </div>
@endforeach
        <input type="hidden" name="delete_id" id="delete_id" value="0">


</form>
@endsection
