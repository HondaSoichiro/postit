// $(function() {
//   $('input').mousedown(function(e) {
//       // ボタンの種類を配列に準備
//       var types = [ '', '左', '中央', '右' ];
//       var result = (types[e.which] + 'ボタンがクリックされました。');


//     });
// });

// var result9 = <?php echo json_encode($result, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT); ?>;
//     console.log(result9); 

var p = 1;


$(function(){
  $("body").on('dblclick', function(){
    $("#paper_origin").clone().appendTo(".cloneArea").attr('id', "paper_"+p);


  		p++;
  });
});



// function addElement() { 
// 	    var element = document.createElement('div'); 
// 	    element.id = "id"; 
// 	    element.innerHTML = "hogehoge"; 
// 	    element.style.backgroundColor = 'red'; 
	 
// 	    var objBody = document.getElementsByTagName("body").item(0); 
// 	    objBody.appendChild(element); 
// 	    // body要素にdivエレメントを追加 
// 	} 