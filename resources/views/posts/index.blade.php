@extends('app')

@section('style')
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endsection

@section('content')
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
				<div>
					<h3 class="my-4 text-center">Tutorial Laravel 10 untuk Pemula</h3>
					<h5 class="text-center"><a href="https://santrikoding.com">www.santrikoding.com</a></h5>
					<hr>
				</div>
				<div class="card rounded border-0 shadow-sm">
					<div class="card-body">
						<a class="btn btn-md btn-success mb-3" href="{{ route('posts.create') }}">TAMBAH POST</a>
						<table class="table-bordered table">
							<thead>
								<tr>
									<th scope="col">GAMBAR</th>
									<th scope="col">JUDUL</th>
									<th scope="col">CONTENT</th>
									<th scope="col">AKSI</th>
								</tr>
							</thead>
							<tbody>
								@forelse ($posts as $post)
									<tr>
										<td class="text-center">
											<img class="rounded" src="{{ asset('/storage/posts/' . $post->image) }}" style="width: 150px">
										</td>
										<td>{{ $post->title }}</td>
										<td>{!! $post->content !!}</td>
										<td class="text-center">
											<form action="{{ route('posts.destroy', $post->id) }}" method="POST"
												onsubmit="return confirm('Apakah Anda Yakin ?');">
												<a class="btn btn-sm btn-dark" href="{{ route('posts.show', $post->id) }}">SHOW</a>
												<a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}">EDIT</a>
												@csrf
												@method('DELETE')
												<button class="btn btn-sm btn-danger" type="submit">HAPUS</button>
											</form>
										</td>
									</tr>
								@empty
									<div class="alert alert-danger">
										Data Post belum Tersedia.
									</div>
								@endforelse
							</tbody>
						</table>
						{{ $posts->links() }}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script>
		@if (session()->has('success'))
			toastr.success('{{ session('success') }}', 'BERHASIL!');
		@elseif (session()->has('error'))
			toastr.error('{{ session('error') }}', 'GAGAL!');
		@endif
	</script>
@endsection
