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
use Illuminate\Http\RedirectResponse;

use Intervention\Image\Facades\Image;

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


		session(['user_hero_id' => 2]);


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

		if(session('answer_count')>2){

			session(['answer_count' => 1]);

			if(session('save_point')>99){
				session(['story_id' => 2]);
			} else{
				session(['story_id' => 1]);
			}
			$back =0;
			$next =2;
			$panels = DB::table('panel')->where('story_id',session('story_id'))->where('hero_id',session('user_hero_id'))->get();
			$count=0;
			foreach ($panels as $panel)
			{
				$page[$count] = $panel->id;
			    $count++;
			}

			$id = DB::table('product')->insertGetId(
	    	['face_data_id' => 1,'panel_id1' => $page[0], 'panel_id2' => $page[1],'panel_id3' => $page[2],'panel_id4' => $page[3]]
			);

			session(['user_book_id' => $id]);


			$serch_result = DB::table('product')->where('id', session('user_book_id'))->first();
			$serch_result = DB::table('panel')->where('id', $serch_result->panel_id1)->first();
			$serch_result = DB::table('background_data')->where('id', $serch_result->background_id)->first();

			$replaceText = str_replace("^", session('user_name'), $serch_result->template_text);
			return view('comic')->with('back',$back)->with('next',$next)->with('path',$serch_result->background_data)->with('txt',$replaceText)->with('face_data',session('face_data'))->with('left',$serch_result->face_x_position)->with('top',$serch_result->face_y_position);
		}

		return view('question');
	}

	public function test_regi()
    {
    	//book登録予定処理
        $page = Input::get('page');
        $panels = DB::table('panel')->where('story_id',session('story_id'))->where('hero_id',session('user_hero_id'))->get();

        $count=0;
		foreach ($panels as $panel)
		{
			$page[$count] = $panel->id;
		    $count++;
		}

		$id = DB::table('product')->insertGetId(
	    	['face_data_id' => 1,'panel_id1' => $page[0], 'panel_id2' => $page[1],'panel_id3' => $page[2],'panel_id4' => $page[3]]
		);

		session(['user_book_id' => $id]);


		$serch_result = DB::table('product')->where('id', session('user_book_id'))->first();
		$back =0;
		$next =2;
		return view('comic')->with('back',$back)->with('next',$next)->with('face_data',session('face_data'));
    }

    public function preview(){
    	$page = Input::get('page');
    	$back = $page-1;
    	$next = $page+1;

    	$page= "panel_id".$page;

    	$serch_result = DB::table('product')->where('id', session('user_book_id'))->first();
			$serch_result = DB::table('panel')->where('id', $serch_result->$page)->first();
			$serch_result = DB::table('background_data')->where('id', $serch_result->background_id)->first();
    	$replaceText = str_replace("^", session('user_name'), $serch_result->template_text);
    	return view('comic')->with('back',$back)->with('next',$next)->with('path',$serch_result->background_data)->with('txt',$replaceText)->with('face_data',session('face_data'))->with('left',$serch_result->face_x_position)->with('top',$serch_result->face_y_position);
    }

    public function next(){
    	$page = Input::get('page');
    	$back = $page-1;
    	$next = $page+1;

    	$page= "panel_id".$page;

    	$serch_result = DB::table('product')->where('id', session('user_book_id'))->first();
			$serch_result = DB::table('panel')->where('id', $serch_result->$page)->first();
			$serch_result = DB::table('background_data')->where('id', $serch_result->background_id)->first();
    	$replaceText = str_replace("^", session('user_name'), $serch_result->template_text);
    	return view('comic')->with('back',$back)->with('next',$next)->with('path',$serch_result->background_data)->with('txt',$replaceText)->with('face_data',session('face_data'))->with('left',$serch_result->face_x_position)->with('top',$serch_result->face_y_position);
    }

		public function face_upload(Request $request){
			$image = Input::file('img');
			//return var_dump($image);
		  // ファイル名を生成し画像をアップロード
		  $name = md5(sha1(uniqid(mt_rand(), true))).'.'.$image->getClientOriginalExtension();
			$img = Image::make( $image );
		  $upload = $img->resize(168,300)->save('media/' . $name);
			$id = DB::table('face_photo')->insertGetId(
    		array('face_data' => 'media/' . $name, 'user_name' => null)
			);
			session(['face_data' => 'media/' . $name]);
		  // アップロード成功のメッセージを定義
		  $data = array(
		    'success' => '画像がアップロードされました',
		  );

		  // メッセージをセッションに格納しリダイレクト
		  return \Redirect::to(\URL::to('/input_name'));
		}



}
