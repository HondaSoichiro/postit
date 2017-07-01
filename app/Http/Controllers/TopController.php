<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\TopModel;


class TopController extends Controller
{

	//form表示
	public function Top(){
		return view('postit.top');
	}

	//値を受けて保存
	public function Res(){
		$sentence = Input::get('sentence');
		
		//インスタンス生成
		$topmodel = new TopModel;

		//インスタンスに格納
		$topmodel->sentence = $sentence;

		//保存
		$topmodel->save();

		return "保存完了";
	}
	//一覧表示
	public function select(){



   
		$topmodel = TopModel::all();
		return view('postit.top');
	}
}
