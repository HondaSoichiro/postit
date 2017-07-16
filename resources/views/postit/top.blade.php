@extends('postit.layout')
@section('content')

<script type="text/javascript">

jQuery( function() {
    jQuery('.postform-class' ).draggable( {
        grid: [ 1, 1 ],
        opacity: 0.5,
    } );
});

var p = 0;

$(function(){
	$('html').dblclick(function(e){
	    p++;
	    var x = e.pageX;
	    var y = e.pageY;

	    $('#postform').clone().attr('id', "postform"+p).css(//#boxをクローンしてcssを書き換え、bodyに追加する
	        {'left': x-120 + 'px','top': y + 'px','display': 'block'}
	        ).appendTo("body");

		$(".postform-class").off("draggable").on("draggable", jQuery(function(){
			jQuery('.postform-class' ).draggable( {
		        grid: [ 1, 1 ],  //左が水平方向のスナップ距離 	//右 が垂直方向のスナップ距離。
	    	    opacity: 0.5,
	   	 	} );
		 }));
	});

	$('html').keydown(function() {
		if( event.keyCode == 13 ) {
			save_required = true;
			$(".postform-class").submit();
			return false;
		}
	});
});
</script>

@foreach ($postits as $postit)
<!-- ↓action消してみた↓ -->
<form action="1" method="post" style="position: absolute; top: 120px; left: 200px; display: none;" id="postform" class="postform-class">
	<div class="postit-wrapp">
		<textarea name="sentence" id="postit" rows="11" cols="40" class="input-sticky-note">
			@if (Request::has('sentence'))
			{{$postit->sentence}}
			@endif
		</textarea>
		<!--空白の付箋をコピーしなければならない今のままだとデータベースの値が表示されてしまうpsインデント変えると空白できちゃうかも-->
	</div>
<!-- 	<input type="submit" value="SEND"　id ="submitBtn"> -->
	<input type="hidden" name="_token" value="{{csrf_token()}}">
</form>
@endforeach
@endsection