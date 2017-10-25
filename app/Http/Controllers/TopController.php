<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Input;
use App\Postit;

class TopController extends Controller {
	// form表示
	public function Top() {    	

		//リクエストがあれば文章を取得。なければそのまま全表示。
		if (Request::has('sentence')) {

	    	//var_dump("リクエストがあるよ！");

			//入力された全てを配列として取得
			$all = Request::all();
	    	//var_dump($all);
			

 			//指定postitを削除
			if (Request::has('delete_id')) {
	 			$delete_id = $all['delete_id'];
				if($delete_id != 0){
				Postit::pi_delete($delete_id);
				}
			}	

			//データベース初期化
			//Postit::pi_alldelete();
	    	//var_dump("全部初期化しちゃうよ！");

			//保存対象ポストイットのid,座標,文章を引数に保存メソッド呼び出し(delete_idの分を1引く)
			for($i = 1 ; $i < (count($all)-1)/4 ; $i++){
				$id = $i;
				 //var_dump($all[$sentence.$i]);
				$sentence = $all['sentence'.$i];
				$x = $all['postit_position_x'.$i ];
				$y = $all['postit_position_y'.$i ];
				Postit::pi_save($id,$sentence,$x,$y);
			};

			//Postit::pi_delete(1);


	    	//var_dump("保存完了だよ！");
			//var_dump(Postit::all());
			//$postits= Postit::all();

		} else {
	    	//var_dump("リクエストがなかったよ！");

		}

		//データベースから値を取得して$dataに格納
		$data['postits']=Postit::all();
		//var_dump(count($data['postits']));

		$postit_lastid = count($data['postits']);
		
		//データベースが空だったらツッコミをいれてから初期値を代入
		if ($postit_lastid==0) {
			//var_dump("データベース空やないかーーーーい！！！");
			$postit_lastid = 1;
			Postit::pi_save(1,'こちらに入力してください',300,300);
			$data['postits']=Postit::all();
		}

   		// var_dump($data['postits']);
   		// var_dump($postit_lastid);

   		//var_dump("データベースの中身を表示するよ！");

    	//$dataの値をviewへ返す(viewでは$postitsとして使用可能)
		return view('postit.top', ['postits'=>$data['postits']],compact('postit_lastid'));
    }
}
