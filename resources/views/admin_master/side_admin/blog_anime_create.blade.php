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
    <form action="{{ route('bloganime.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">AnimeKu Plus (Coming Soon)</h6>
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}" readonly>
            <div class="mb-3">
                <label for="formFile" class="form-label">Poster Anime</label>
                <input class="form-control bg-dark" type="file" id="formFile" name="gambar_anime_coming_soon">
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="nama_anime" class="form-control" id="floatingInput"
                    placeholder="Creator AnimeKu">
                <label for="floatingInput">Nama Anime</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" placeholder="description Your Anime" id="floatingTextarea" style="height: 150px;"
                    name="deskripsi_anime_coming_soon"></textarea>
                <label for="floatingTextarea">Descripsi Anime</label>
            </div>

            <button type="submit" class="btn btn-primary" style="margin: 5px;">Submit</button>
            {{-- <a href="{{ route('list_anime') }}" class="btn btn-info" style="margin: 5px;">AnimeKu</a> --}}
        </div>
    </form>

</div>
@endsection
