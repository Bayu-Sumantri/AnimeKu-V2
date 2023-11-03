@extends('admin_master.admin_master')
@section('admin_master')
@section('tittle')
    Dashboard
@endsection

<div class="container-fluid pt-4 px-4">
    @if (auth()->user()->level == 'Admin')
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-users fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">User's</p>
                        <h6 class="mb-0">{{ $total_user }} Active</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                    <i class="fa fa-tv fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">AnimeKu</p>
                        <h6 class="mb-0">{{ $total_anime }} Anime Active</h6>
                    </div>
                </div>
            </div>
    @endif
    <div class="col-sm-6 col-xl-3">
        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-heart fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">My wishlist</p>
                <h6 class="mb-0">{{ $total_wishlist }} Your Wishlist</h6>
            </div>
        </div>

    </div>

</div>
</div>
@endsection
