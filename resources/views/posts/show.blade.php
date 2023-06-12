@extends('app')

@section('style')
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="container mt-5 mb-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card rounded border-0 shadow-sm">
					<div class="card-body">
						<img class="w-100 rounded" src="{{ asset('storage/posts/' . $post->image) }}">
						<hr>
						<h4>{{ $post->title }}</h4>
						<p class="tmt-3">
							{!! $post->content !!}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection
