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
    <form action="{{ route('episode_update', $animeku->id) }}" method="post" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="bg-secondary rounded h-100 p-4">

            <div class="form-floating mb-3">
                <input type="number" name="episode_number" class="form-control" id="floatingInput" placeholder="AnimeKu"
                    value="{{ old('episode_number', optional($animeku->episode)->episode_number) }}">
                <label for="floatingInput">Number Episode</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" name="Genre" id="floatingSelect"
                    aria-label="Floating label select example">
                    <option value="#">Select</option>
                    @foreach ($allAnime as $anime)
                        <option value="{{ $anime->id }}">{{ $anime->judul }}</option>
                    @endforeach
                </select>
                <label for="floatingSelect">Your Anime</label>
            </div>

            <div class="form-floating">
                <textarea class="form-control" name="Deskripsi_anime" placeholder="description Your Anime" id="floatingTextarea"
                    style="height: 150px;">{{ old('Deskripsi_anime', $animeku->Deskripsi_anime) }}</textarea>
                <label for="floatingTextarea">Descripsi Anime</label>
            </div>


            <br>

            <div class="form-floating">
                <textarea class="form-control" name="manga_animeku" placeholder="Manga Your Anime" id="floatingTextarea"
                    style="height: 150px;">{{ old('manga_animeku', optional($animeku->episode)->manga_animeku) }}</textarea>
                <label for="floatingTextarea">Manga Anime</label>
            </div>
            <button type="submit" class="btn btn-primary" style="margin: 5px;">Submit</button>
        </div>
    </form>

</div>
@endsection
