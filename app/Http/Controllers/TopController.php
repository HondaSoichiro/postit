<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TopModel;

class TopController extends Controller {
	// form表示
	public function Top() {
// 		$sentence = $topmodel [0]->sentence;
// 		$topmodel = TopModel::all ();
		$topmodel = TopModel::find(1);//インスタンス1つ

		return view ( 'postit.top' )->with ( 'topmodel', $topmodel );
	}

	// 値を受けて保存
	public function Res(Request $request) {
		$topmodel = TopModel::firstOrNew(['id'=>'1']);//インスタンス1つ
		$sentence = Input::get ('sentence');
		$topmodel->sentence = $sentence;
		$topmodel->save();
		return view ( 'postit.top' )->with ( 'topmodel', $topmodel );

/* 		if (is_null ( User::firstByAttributes ( 'id', '=', '1' ) )) {
// 			新規作成処理
 			$sentence = Input::get ( 'sentence' );


			// インスタンス生成
			$topmodel = new TopModel ();

			$topmodel->sentence = $sentence;

			// 保存
			$topmodel->save ();

			$topmodel = TopModel::all ();
			$sentence = $topmodel [0]->sentence;

			return view ( 'postit.top' )->with ( 'sentence', $sentence );
		} else {
			// アップデート処理
			User::where ( 'id', '=', '1' )->update ( [
					'hoge' => 1
			] );

		}
*/
	}
}


