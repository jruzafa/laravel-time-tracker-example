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

Route::get('/', array('before' => 'auth', function()
{
	return View::make('hello');
}));


Route::get('/login', array('before' => 'guest', 'uses' => 'UserController@login'));

Route::post('login', function(){

    $userData = array(
        'email' => Input::get('email'),
        'password' => Input::get('password')
    );

    if ( Auth::attempt($userData) ){
        return Redirect::to('/');
    }else{
        return Redirect::to('login')->with('login_errors', true);
    }

});

Route::get('/dashboard', array('before' => 'auth', function(){

	return View::make('dashboard');
}));