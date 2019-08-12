@extends('layouts.main')
@section('content')
	<section class="page" id="page1">
		@include('partials.header')
	</section>
	<div class="pt-4">
		<div class="container col-md-8 offset-md-2 pt-2">
			<div class="card pt-2">
				<div>
					<h2 class="card-title">Tickets</h2>
				</div>
				<div class="card-body">
					@if($tickets->isEmpty())
						<p>There is no ticket.</p>
					@else
						<table class="table">
							<thead>
								<tr>
									<th>ID</th>
									<th>Title</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tickets as $ticket)
									<tr>
										<td>{!! $ticket->id !!}</td>
										<td>{!! $ticket->title !!}</td>
										<td>{!! $ticket->status ? 'Pending' : 'Answered' !!}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					@endif
				</div>
			</div>
		</div>
	</div>
@endsection