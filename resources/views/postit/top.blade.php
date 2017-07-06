 @extends('postit.layout')
 @section('content')

<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('html').click(function(e){
        var x = e.pageX;
        var y = e.pageY;
        alert('X = ' + x + 'px, Y = ' + y + 'px');
        $('#locatedpoint').css({top:(y),left:(x),display:'block'}).attr('title','TOP : '+(y)+'px | LEFT : '+(x)+'px');
    });
});
</script> -->

<script type="text/javascript">
  var count;
  function SetMark(x,y){
    count++;
    var element = document.createElement('p');
    element.id = "id" + count;
    element.innnerHTML = "●";
    element.style.position = "absolute";
    element.style.left = x + "px";
    element.style.top = y + "px";
    var obj = document.getElementById("cloneArea");
    obj.appendChild(element);
  }
</script>
 @foreach ($postits as $postit) 

<div class="cloneArea" onclick="SetMark(event.offsetX,event.offsetY)">
	<div class="paper" id="paper_origin">
		<form action="1" method="post">
			<textarea name="sentence" id="postit" rows="11" cols="40" class="input-sticky-note">{{$postit->sentence}}</textarea>
			<input type="submit" value="SEND">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
		</form>
	</div>
</div>
@endforeach 
@endsection





