@extends('layouts.template')

@section('content')

	@if (count($errors) > 0)

		@foreach ($errors->all() as $message)

		<div class="alert alert-error">
              <button data-dismiss="alert" class="close" type="button">×</button>
              <strong>{{ $message }}</strong>
            </div>
		@endforeach

	@endif

	{{ Form::open(array('class' => 'form-signin')) }}

		<h2>Create project</h2>

		{{ Form::text('name','', array('class' => 'input-block-level', 'placeholder' => 'Name of the project')) }}

		{{ Form::button('Create', array('class' => 'btn btn-large btn-primary', 'type' => 'submit')) }}

	{{ Form::close() }}


	@if (count($projects) > 0)
		<table class="table table-hover span5">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Hours</th>
                </tr>
              </thead>
              <tbody>
				@foreach ($projects as $project)
					<tr>
						<td>{{ $project->name }}</td>
						<td>0</td>
					</tr>

				@endforeach
              </tbody>
            </table>
	@endif


@stop