@extends('layouts.template')

@section('content')

    @if (Session::has('errors'))
        <div class="row-fluid">
            <div class="span12">
                <span class="error">Username or password incorrect.</span>
            </div>
        </div>
            @foreach ($errors as $message)

            {{ $message }}


            @endforeach
    @endif



@include('times.new')

	@if (count($times) > 0)

		<div class="row-fluid">
			<div class="span12">
				<table class="table table-hover span5">
					<thead>
						<tr>
							<th>Task</th>
							<th>Hours</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($times as $time)
							<tr>
								<td>{{ $time->name }}</td>
                                <td>{{ $time->hours }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@endif
@stop