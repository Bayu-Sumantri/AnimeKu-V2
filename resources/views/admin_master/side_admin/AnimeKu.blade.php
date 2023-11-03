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
	<form action="{{ route('AnimeKu.store') }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="bg-secondary rounded h-100 p-4">
			<h6 class="mb-4">AnimeKu Plus</h6>
			<div class="form-floating mb-3">
				<input type="text" name="judul" class="form-control" id="floatingInput"
				placeholder="AnimeKu">
				<label for="floatingInput">Judul Anime</label>
			</div>
			<div class="mb-3">
				<label for="formFile" class="form-label">Poster Anime</label>
				<input class="form-control bg-dark" type="file" id="formFile" name="Gambar_anime">
			</div>
			<div class="form-floating mb-3">
				<input type="text" name="author" class="form-control" id="floatingInput"
				placeholder="Creator AnimeKu">
				<label for="floatingInput">Creator</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" name="type" id="floatingSelect"
				aria-label="Floating label select example">
					<option selected>Type</option>
					<option value="1">TV Series</option>
					<option value="2">Movie</option>
				</select>
				<label for="floatingSelect">Your type Anime</label>
			</div>
			<div class="form-floating mb-3">
				<input type="text" name="studio" class="form-control" id="floatingInput"
				placeholder="Studio AnimeKu">
				<label for="floatingInput">Studio</label>
			</div>
			<div class="form-floating mb-3">
				<select class="form-select" name="Status" id="floatingSelect"
				aria-label="Floating label select example">
				<option selected>Status</option>
				<option value="1">Airing</option>
				<option value="2">Not Airing</option>
			</select>
			<label for="floatingSelect">Your Status Anime</label>
		</div>		


		<div class="form-floating mb-3">
			<select class="form-select" name="Genre" id="floatingSelect"
			aria-label="Floating label select example">
				<option selected>Genre</option>
				<option value="1">Airing</option>
				<option value="2">Action</option>
				<option value="3">Adventure</option>
				<option value="4">Fantasy</option>
				<option value="5">Magic</option>
				<option value="6">Drama</option>
				<option value="7">Romance</option>
				<option value="8">Mystery</option>
				<option value="9">Horor</option>
				<option value="10">Isekai</option>
				<option value="11">Harem</option>
				<option value="12">Supernatural</option>
				<option value="13">Sports</option>
				<option value="14">Science Fiction</option>
				<option value="15">Slice_of_life</option>
				<option value="16">Music</option>
				<option value="17">Shoujo</option>
				<option value="18">Shounen</option>
			</select>
			<label for="floatingSelect">Your Genre Anime</label>
		</div>


		<div class="form-floating mb-3">
			<input type="number" name="Duration" class="form-control" id="floatingInput"
			placeholder="Studio AnimeKu">
			<label for="floatingInput">Duration(Time)</label>
		</div>
		<div class="form-floating mb-3">
			<select class="form-select" name="Quality" id="floatingSelect"
			aria-label="Floating label select example">
				<option selected>Quality</option>
				<option value="1">Ultra HD</option>
				<option value="2">Full HD</option>
				<option value="3">HD</option>
				<option value="4">SD</option>
				<option value="5">LD</option>
			</select>
		<label for="floatingSelect">Your Quality Anime</label>
		</div>


		<div class="form-floating">
			<textarea class="form-control" name="Deskripsi_anime" placeholder="description Your Anime"
			id="floatingTextarea" style="height: 150px;"></textarea>
			<label for="floatingTextarea">Descripsi Anime</label>
		</div>
		<button type="submit" class="btn btn-primary" style="margin: 5px;">Submit</button>	
		<a href="{{ route('list_anime') }}" class="btn btn-info" style="margin: 5px;">AnimeKu</a>	
		</div>
	</form>
		
</div>

@endsection