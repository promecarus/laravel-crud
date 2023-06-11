@extends('app')

@section('style')
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="container mt-5 mb-5">
		<div class="row">
			<div class="col-md-12">
				<div class="card rounded border-0 shadow-sm">
					<div class="card-body">
						<form action="{{ route('posts.store') }}" enctype="multipart/form-data" method="POST">
							@csrf
							<div class="form-group">
								<label class="font-weight-bold">GAMBAR</label>
								<input class="form-control @error('image') is-invalid @enderror" name="image" type="file">
								@error('image')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group">
								<label class="font-weight-bold">JUDUL</label>
								<input class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Masukkan Judul Post"
									type="text" value="{{ old('title') }}">
								@error('title')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<div class="form-group">
								<label class="font-weight-bold">KONTEN</label>
								<textarea class="form-control @error('content') is-invalid @enderror" name="content" placeholder="Masukkan Konten Post"
								 rows="5">{{ old('content') }}</textarea>
								@error('content')
									<div class="alert alert-danger mt-2">
										{{ $message }}
									</div>
								@enderror
							</div>
							<button class="btn btn-md btn-primary" type="submit">SIMPAN</button>
							<button class="btn btn-md btn-warning" type="reset">RESET</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
	<script>
		CKEDITOR.replace('content');
	</script>
@endsection
