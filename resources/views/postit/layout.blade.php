<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Postit</title>
    <link rel="stylesheet" href="{{ asset('public/css/post2.css') }}">
    <script src="{{ asset('public/js/jquery-3.2.1.js') }}"></script>
     <script src="{{ asset('public/js/jquery-ui.min.js') }}"></script>
</head>
<body>

<script type="text/javascript">



jQuery( function() {
//移送できるようにするやつ
	for (var i = 1; i <={{$postit_lastid}}; i++) {

	
    jQuery('.postit'+i).draggable( {
        grid: [ 1, 1 ],
        opacity: 0.5,
    } );
}
});

var p = {{$postit_lastid}} ;

$(function(){
	//ダブルクリックでクローン
	$('html').dblclick(function(e){
	    p++;
		
	    var x = e.pageX;
	    var y = e.pageY;


	    $('.postit_origin').clone().attr({

	    	'class':"postit"+p,
	    	'id':"postit"+p


	    }).css(//#boxをクローンしてcssを書き換え、bodyに追加する
	        {'left': x-130 + 'px','top': y-20 + 'px','display': 'block'}
	        ).appendTo("#postform");

		var elem = document.getElementById("postit"+p);
		elem.innerHTML = "<div class='postit-wrapp'>"
		+"<textarea name='sentence" + p + "' id='postit' rows='11' cols='40' class='input-sticky-note'>こちらに入力してください</textarea>"
	   +"</div>"
	   +"<input type='hidden' name='_token" + p + "' value='{{csrf_token()}}'>"
        +"<input type='hidden' id='postit_position_x" + p + "' name='postit_position_x" + p + "' value=''>"
        +"<input type='hidden' id='postit_position_y" + p + "' name='postit_position_y" + p + "' value=''>"
        //+"<button id='button'"+p+">";
        // +"<input type='hidden' name='delete_id"+p+"' id='delete_id' value='0'>";
;



		var var1 = document.getElementById('postit_position_x'+p);
		var var2 = document.getElementById('postit_position_y'+p);
		var1.value = x;
		var2.value = y;



		$(".postit"+p).off("draggable").on("draggable", jQuery(function(){//ダブルクリックするたびにdraggableをoffにしてonにすることで動的にjavascriptが働く
			jQuery('.postit'+p).draggable( {
		        grid: [ 1, 1 ],  //左が水平方向のスナップ距離 	//右 が垂直方向のスナップ距離。
	    	    opacity: 0.5,
	   	 	} );
		 }));
	});

	//エンターで保存
	$('html').keydown(function() {
		if( event.keyCode == 13 ) {
			$(".postform-class").submit();
		}
	});
});

</script>

@yield('content')


<script type="text/javascript">
	//クリックしたボタンに紐づいた付箋を非表示にする
	//document.write("ポストイットラストI.D."+{{$postit_lastid}}+"です");
	//for (var i = 1; i <={{$postit_lastid}}; i++) {
		$("#button"+1).click(function () {
			
  			$("#postit"+1).css({'display': 'none'})
			
			//delete_idの値を更新
  			var delete_id = document.getElementById('delete_id');
  			delete_id.value = 1;

  			//サブミット
  			$(".postform-class").submit();
		});
	//}
</script>

</body>

</html>
