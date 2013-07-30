<?php

class TimeController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $times = Time::where('user_id', Auth::user()->id )->get();

        $projects = Project::where('user_id', Auth::user()->id )->lists('name', 'id');

        return View::make('times.index')->with(array('times' => $times, 'projects' => $projects));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $validator = Validator::make(
            array('name' => Input::get('name'), 'hours' => Input::get('hours')),
            array('name' => 'required|min:5','hours' => 'required|min:1|between:0,24|alpha_dash')
        );

        if ($validator->fails())
        {
            return Redirect::to('/time-entries')->withErrors($validator);
        }else{

            Time::create(
                array(
                            'name' => Input::get('name'),
                            'project_id'  => Input::get('project'),
                            'hours'       => Input::get('hours'),
                            'user_id'     => Auth::user()->id
                )
            );
        }
        $projects = Project::where('user_id', Auth::user()->id)->lists('name', 'id');
        $times = Time::where('user_id', Auth::user()->id)->get();

        return View::make('times.index')->with(array('times' => $times, 'projects' => $projects));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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