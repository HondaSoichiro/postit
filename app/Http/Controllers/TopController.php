<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Input;
use App\Postit;

class TopController extends Controller {
	// form表示
	public function Top($id) {
		if (Request::has('sentence')) {
			echo "クエリあるよ！";
			$sentence = Request::input('sentence');
		} else {
			echo "クエリないよ！";
			$sentence = 'こちらに入力してください';
		}
		$postit = Postit::pi_save($id, $sentence);
		return view('postit.top')->with ('postit',$postit);
	}
}