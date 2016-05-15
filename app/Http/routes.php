<?php
use Illuminate\Support\Facades\Input;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('landing');
});

Route::get('/be_hero', function () {
    return view('photo');
});

Route::get('/input_name', function () {
    return view('who');
});

Route::post('/face_upload','UserController@face_upload');

Route::post('/preview', 'UserController@preview');

Route::post('/question', 'UserController@set_answer');

Route::post('/next', 'UserController@next');

Route::post('/next_question', 'UserController@go_comic');

Route::post('/select', 'UserController@set_name');

Route::post('/test_print', 'UserController@test_print');

Route::post('/test_regi', 'UserController@test_regi');
