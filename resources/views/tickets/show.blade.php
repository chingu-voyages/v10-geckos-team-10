@extends('layouts.main')
@section('content')
	<section class="page" id="page1">
		@include('partials.header')
	</section>
	<div class="pt-4">
		<div class="container col-md-8 offset-md-2 pt-2">
			<div class="card">
				<div class="card-body">
					<h2 class="card-title">{!! $ticket->title !!}</h2>
					<p><strong>Status</strong>: {!! $ticket->status ? 'Pending' : 'Answered' !!}</p>
					<p>{!! $ticket->content !!}</p>
				</div>
				<div class="col-lg-10 pb-4">
					<a href="{!! action('TicketController@edit', $ticket->slug) !!}" class="btn btn-info">Edit</a>
					<a href="#" class="btn btn-info">Delete</a>
				</div>
			</div>			
		</div>
	</div>
@endsection