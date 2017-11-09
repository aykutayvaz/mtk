<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a', function () {
    //return view('login.index');
    return "aaa";
});

//Route::get('/login', ['uses' =>'Users\LoginController@action_index']);///login/{squirrel}
Route::group(['middleware'=>['web']],function(){
  Route::get('/login', 'Users\LoginController@action_index');///login/{squirrel}
  Route::get('/register', 'Users\LoginController@register');///login/{squirrel}
  Route::post('/login', 'Users\LoginController@validate_login');
});
