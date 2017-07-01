<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\TopModel;


class TopController extends Controller
{

	//form表示
	public function Top(){
		return view('postit.top')->with('topmodel', new TopModel());
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

        return "保存完了";
    }
	//一覧表示
	public function select(){



   
		$topmodel = TopModel::all();
		return view('postit.top');
	}
}
