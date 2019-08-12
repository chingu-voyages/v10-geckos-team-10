@extends('layouts.main')
@section('content')
	<section class="page" id="page1">
		@include('partials.header')
	</section>
	<div class="pt-4">
		<div class="container col-md-8 offset-md-2 pt-2 createContainer">
			<form method="POST" action="">
				@csrf
				@if($errors->any())
					@foreach($errors->all() as $error)
						<p class="alert alert-danger">{{ $error }}</p>
					@endforeach
				@endif
				@if(session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				<fieldset>
					<legend>Submit a new Ticket</legend>
					<div class="form-group">
						<label class="col-lg-2" for="title">Title</label>
						<div class="col-lg-10">
							<input type="text" name="title" class="form-control" id="title">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2" for="content">Content</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="3" name="content" id="content"></textarea>
							<span class="form-text">Feel free to ask any question</span>
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-10">
							<button class="btn btn-default">Cancel</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
@endsection