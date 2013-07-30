<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// General routes
Route::get('/', array('before' => 'auth', function()
{
	return View::make('hello');
}));

Route::get('/time-entries',array('as' => 'time_entries', 'before' => 'auth', 'uses' => 'TimeController@index'));
Route::post('/time-entries',array('before' => 'auth', 'uses' => 'TimeController@create'));

Route::get('/login', array('as' => 'login', 'before' => 'guest', 'uses' => 'UserController@login'));
Route::get('/logout', array('as' => 'logout', 'before' => 'auth', 'do' => function(){
    Auth::logout();
    return Redirect::to('/');
}));

Route::post('login',array('before' => 'guest', 'do' => function(){

    $userData = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );

    if ( Auth::attempt($userData) ){
        return Redirect::to('/');
    }else{
        return Redirect::to('login')->with('login_errors', true);
    }

}));

// Projects routes
Route::get('/projects', array('as' => 'projects', 'before' => 'auth', 'uses' => 'ProjectController@index'));
Route::post('/projects', array('before' => 'auth', 'uses' => 'ProjectController@create'));

Route::get('/dashboard', array('as' => 'dashboard', 'before' => 'auth', 'uses' => 'DashboardController@index'));