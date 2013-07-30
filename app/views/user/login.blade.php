@extends('layouts.template')

@section('content')
	@if (Session::has('login_errors'))
		<span class="error">Username or password incorrect.</span>
	@endif

	{{ Form::open(array('class' => 'form-signin')) }}

		<h2 class="form-signin-heading">Please sign in</h2>
        <p>pass: "password"</p>
		{{ Form::text('email','jose.ruzafa@gmail.com', array('class' => 'input-block-level', 'placeholder' => 'Email address')) }}
		{{ Form::password('password',array('class' => 'input-block-level', 'placeholder' => 'Password')) }}
		<label class="checkbox">
			<input type="checkbox" value="remember-me"> Remember me
		</label>
		{{ Form::button('Login', array('class' => 'btn btn-large btn-primary', 'type' => 'submit')) }}
	{{ Form::close() }}
@stop