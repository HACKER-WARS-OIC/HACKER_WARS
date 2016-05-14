<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use View;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;


use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class UserController extends Controller
{

	public function test_print(){
		$serch_result = DB::table('background_data')->where('id', 1)->first();

		// 読み込むファイルを指定
		echo HTML::image('img/background/test001.png','雪と蔵之介',array('class'=>'kuranosuke'));
		echo $serch_result->background_data;
		echo $serch_result->template_text;
		//ふっちーまち
	}

	public function set_name(){ 
		$heros = DB::table('heros')->get();


		session(['user_hero_id' => 1]);


		if(Input::get('name')==""){
			return view('landing');
		}
		session(['user_name' => Input::get('name')]);
		$name = session('user_name');
		return view('select')->with('name',$name)->with('heros',$heros);
	}

	public function set_hero(){ 
		session(['user_hero_id' => Input::get('hero')]);
		return view('question');
	}

	public function set_answer(){ 
		session(['answer_count' => session('answer_count')+1]);

		$point = preg_split("/[\s,]+/", Input::get('point'));
		
		if($point[0] == 'justice'){
			session(['justice_point' => session('justice_point')+$point[1]]);
		}

		if($point[0] == 'save'){
			session(['save_point' => session('save_point')+$point[1]]);
		}

		if(session('answer_count')>5){
			
			/*if(session('answer_count')>99){

			} else{

			}*/

			return view('comic');
		}
		return view('question');
	}

	public function test_regi()
    {
    	//book登録予定処理
        $page = Input::get('page');
		$id = DB::table('product')->insertGetId(
	    	['face_data_id' => 1,'panel_id1' => $page[0], 'panel_id2' => $page[1],'panel_id3' => $page[2],'panel_id4' => $page[3]]
		);

		session(['user_book_id' => $id]);


		$serch_result = DB::table('product')->where('id', session('user_book_id'))->first();
	
		//bookのページを出すための処理
		$count = -2;//ページ数を出すための処理
		foreach ($serch_result as $result)
		{
		    $count++;
		}

		for ($i=1;$i<=$count;$i++){
			$user_book_id = 'user_book_id';
			$panel_id = "panel_id".$i;
			session([$user_book_id.$i => $serch_result->$panel_id]);
			echo $i."ページ目の画像のidは".session($user_book_id.$i).'<br>';
		}
    }


}