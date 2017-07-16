<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Input;
use App\Postit;

class TopController extends Controller {
	// form表示
	public function Top($id) {
		//リクエストがあれば文章を取得。なければ空を格納。
		if (Request::has('sentence')) {
			$sentence = Request::input('sentence');
		} else {
			$sentence = '';
		}
		//保存対象ポストイットのid,座標,文章を引数に保存メソッド呼び出し
// 		Postit::pi_save($id, $x, $y, $sentence);
		Postit::pi_save($id, $sentence);

		$data['postits']=Postit::all();
		//$postits= Postit::all();

		return view('postit.top', ['postits'=>$data['postits']]);//->with ('postits',$postits);
	}

	public function echotime() {
		echo date('Y-m-d H:i:s', time());
// 		return view('postit.top', ['postits'=>$data['postits']]);//->with ('postits',$postits);
	}


}