<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TopModel;


class TopController extends Controller
{
	//form表示
	public function Top(){
		$topmodel = TopModel::all();
		$sentence = $topmodel[0]->sentence;

		return view('postit.top')->with('sentence',$sentence);
	}

	//値を受けて保存
	public function Res(Request $request)
	{
		$sentence = Input::get('sentence');

        //インスタンス生成
        $topmodel = new TopModel;

        $topmodel->sentence = $sentence;

        //保存
        $topmodel->save();

        $topmodel = TopModel::all();
        $sentence = $topmodel[0]->sentence;

        return view('postit.top')->with('sentence',$sentence);
	}
}
