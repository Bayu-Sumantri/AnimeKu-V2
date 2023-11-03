@extends('admin_master.admin_master')
@section('admin_master')

@section('tittle')
Dashboard
@endsection


<div class="container-fluid pt-4 px-4">

	@if (session()->has('success'))
	<div class="alert alert-success">
		{{ session('success') }}
	</div>
	@endif
	@if (session()->has('error'))
	<div class="alert alert-warning">
		{{ session('error') }}
	</div>
	@endif




<!-- <form action="{{ route('profile.update') }}" method="post" enctype="multipart/form-data"> -->
	<div class="bg-secondary rounded h-100 p-4">


		<h6 class="mb-4">Users Active</h6>
		<div class="table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">judul</th>
						<th scope="col">Status</th>
						<th scope="col">Pembuat Anime</th>
						<th scope="col">nama anda</th>
						<th scope="col">Created At</th>
						<th scope="col">Update At</th>
						<th scope="col">Hapus</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						@foreach ($wishlist as $row)
						<th scope="row">{{ $loop->iteration + $wishlist->perpage() * ($wishlist->currentPage() - 1) }}</th>
						<td>{{ $row->animeku->judul }}</td>
						<td>{{ $row->animeKu->Status }}</td>
						@if ($row->animeku->author)
						<td>{{ $row->animeku->author }}</td>
						@else
						<td>Tidak Ada</td>
						@endif
						<td>{{ $row->user->name }}</td>
						<td>{{ $row->created_at->diffForHumans() }}</td>
						<td>{{ $row->updated_at->diffForHumans() }}</td>
							<td><form method="post" onsubmit="return confirm('Apakah anda yakin akan menghapus, {{ $row->animeku->judul }} ?..')" action="{{ route('delate.destroy', [$row->id]) }}">
							@csrf
							{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger"><i
									class="fa fa-trash"></i></button>
									</form>

								</td>
							</form></td>
						</tr>
						@endforeach

					</table>
					{{-- {{ $wishlist->appends(Request::all())->links() }} --}}
				</div>

				<!-- </form> -->

			</div>	


		</div>


		@endsection