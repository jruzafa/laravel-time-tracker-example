<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$projects = Project::all();

		return View::make('projects')->with('projects', $projects);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}