@extends('layouts.template')

@section('content')

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