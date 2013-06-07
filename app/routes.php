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

Route::get('/projects', array('as' => 'projects', 'before' => 'auth', 'uses' => 'ProjectController@index'));

Route::post('/projects', array('before' => 'auth', 'do' => function(){


    $validator = Validator::make(
        array('name' => Input::get('name')),
        array('name' => 'required|min:5')
    );

    if ($validator->fails())
    {
        return Redirect::to('/projects')->withErrors($validator);
    }else{

        Project::create(array('name' => Input::get('name'),'user_id' => 1, 'active' => 1));
    }

    $projects = Project::all();

    return View::make('projects')->with('projects', $projects);
}));