<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postit extends Model {
	protected $table = 'postits'; // postitsテーブルとの関連付け
	protected $fillable = array ('sentence'); // 入力を許可するカラムの指定
	protected $guarded = array ('id'); // 入力を禁止するカラムの指定

	// IDとSentenceを受けて保存
	public static function pi_save($id , $sentence) {
		$postit = Postit::firstOrNew (['id'=> $id]); // インスタンス1つ
//		$sentence = Input::get('sentence');
		$postit->sentence = $sentence;
		$postit->save ();
	}

	// IDを受けて削除
	public static function pi_delete($id) {
		Postit::destroy($id);
		return view('postit.top')->with ('postit',$postit);
	}


}
