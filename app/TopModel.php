<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TopModel extends Model
{
	protected $table = 'postits';


	protected $fillable = array('sentence'); //入力を許可するカラムの指定
	protected $guarded = array('id'); // 入力を禁止するカラムの指定
//	public $timestamps = false;
    //
}

// class Update extends Model
// {

// DB::table('postits')
//             ->where('id', 1)
//             ->update(['options->enabled' => true]);
// }