@extends('anim_category.header')

@section('anim_category')
@section('tittle')
    AnimKU
@endsection



<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    <span>{{ old('Genre', $animeku->Genre) }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Anime Section Begin -->
<section class="anime-details spad">
    <div class="container">
        <div class="anime__details__content">
            <div class="row">
                <div class="col-lg-3">
                    <div class="anime__details__pic set-bg">

                        @if ($animeku->Gambar_anime)
                            <img class="anime__details__pic set-bg"
                                src="{{ \Illuminate\Support\Facades\Storage::url($animeku->Gambar_anime) }}"
                                alt="">
                        @else
                            <p>Images Tidak ada</p>
                        @endif
                        <div class="comment"><i class="fa fa-comments"></i> {{ $animeku->comments->count() }}</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="anime__details__text">
                        <div class="anime__details__title">
                            <h3>{{ old('judul', $animeku->judul) }}</h3>
                            <span>{{ old('author', $animeku->author) }}</span>
                        </div>
                        <p class="text"
                            data-config='{ "type": "text", "element": "p", "limit": 100, "more": "show more ↓", "less": "show less ↑"}'>
                            {{ old('Deskripsi_anime', $animeku->Deskripsi_anime) }}</p>
                        <div class="anime__details__widget">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Type:</span> {{ old('type', $animeku->type) }}</li>
                                        <li><span>Studios:</span> {{ old('studio', $animeku->studio) }}</li>
                                        <li><span>Date aired:</span>
                                            {{ old('created_at', $animeku->created_at->diffForHumans()) }} to ?</li>
                                        <li><span>Status:</span> {{ old('Status', $animeku->Status) }}</li>
                                        <li><span>Genre:</span> {{ old('Genre', $animeku->Genre) }}</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <ul>
                                        <li><span>Scores:</span> 7.31 / 1,515</li>
                                        <li><span>Rating:</span> 8.5 / 161 times</li>
                                        <li><span>Duration:</span> {{ old('Duration', $animeku->Duration) }}</li>
                                        <li><span>Quality:</span> {{ old('Quality', $animeku->Quality) }}</li>
                                        <li><span>Views:</span> 131,541</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="anime__details__btn">
                            <form action="{{ route('wishlist.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="anime_id" value="{{ $animeku->id }}">
                                <input type="hidden" name="user_id"
                                    value="{{ auth()->check() && auth()->user()->id }}">
                                <button type="submit" class="follow-btn fa fa-heart-o">
                                    Follow</button>
                            </form>



                            <div class="anime__details__episodes m-3 mr-auto" style="" id="episode_muncul">
@foreach ($animeku_episode as $row)
    @if ($row->episode) <!-- Pastikan relasi episode ada -->
        <a href="{{ route('manga_mu', $row->id) }}">EP {{ $row->episode->episode_number }}</a>
    @endif
@endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="anime__details__review">
                    <div class="section-title">
                        <h5>Reviews</h5>
                    </div>
                    @if (session()->has('success_comment'))
                        <div class="alert alert-success">
                            {{ session('success_comment') }}
                        </div>
                    @endif
                    @foreach ($animeku->comments as $comment)
                        <div class="anime__review__item">
                            <div class="anime__review__item__pic">
                                {{-- <img src="{{ \Illuminate\Support\Facades\Storage::url($comment->user->Profile) }}" alt="Gambar Account"> --}}
                                @if ($comment->user->profile)
                                    <img src="{{ \Illuminate\Support\Facades\Storage::url($comment->user->profile) }}"
                                        alt="Gambar Account">
                                @else
                                    <img src="{{ asset('/anime/img/profile/profile.png') }}"
                                        alt="Gambar Account Tidak Ada">
                                @endif
                            </div>
                            <div class="anime__review__item__text blog__details__comment__item__text">
                                <h6>{{ $comment->user->name }}
                                    <span>{{ $comment->created_at->diffForHumans() }}</span>
                                </h6>
                                <p>{{ $comment->content }}</p>
                                <button class="btn btn-secondary btn-sm mt-2 rounded"
                                    id="replay_muncul{{ $comment->id }}"
                                    onclick="replay_muncul({{ $comment->id }})">Reply</button>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="anime__details__form">
                    <div class="section-title">
                        <h5>Your Comment</h5>
                    </div>
                    <form action="{{ route('commants_create', [$animeku->id]) }}" method="POST">
                        @csrf
                        <textarea placeholder="Your Comment" name="commant"></textarea>
                        <button type="submit"><i class="fa fa-location-arrow"></i> Review</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="anime__details__sidebar">
                    <div class="section-title">
                        <h5>you might like...</h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg"
                        data-setbg="{{ asset('/anime/img/sidebar/tv-1.jpg') }}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="{{ url('#') }}">Boruto: Naruto next generations</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg"
                        data-setbg="{{ asset('/anime/img/sidebar/tv-2.jpg') }}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="{{ url('#') }}">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg"
                        data-setbg="{{ asset('/anime/img/sidebar/tv-3.jpg') }}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="{{ url('#') }}">Sword art online alicization war of underworld</a></h5>
                    </div>
                    <div class="product__sidebar__view__item set-bg"
                        data-setbg="{{ asset('/anime/img/sidebar/tv-4.jpg') }}">
                        <div class="ep">18 / ?</div>
                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                        <h5><a href="{{ url('#') }}">Fate/stay night: Heaven's Feel I. presage flower</a></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!-- Anime Section End -->
@endsection
