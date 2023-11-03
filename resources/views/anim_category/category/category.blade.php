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
                    <a href="{{ url('categori') }}">Categories</a>
                    <span>Romance</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Product Section Begin -->
<section class="product-page spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="product__page__content">
                    <div class="product__page__title">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-6">
                                <div class="section-title">
                                    <h4>Romance</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($animeku_list->take(50) as $row)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg"
                                        data-setbg="{{ \Illuminate\Support\Facades\Storage::url($row->Gambar_anime) }}">
                                        <div class="ep">18 / 18</div>
                                        <div class="comment"><i class="fa fa-comments"></i>{{ $row->comments->count() }}</div>
                                        <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                            <li>{{ $row->Genre }}</li>
                                        </ul>
                                        <h5><a  href="{{ route('AnimeKu_detail', $row->id) }}">{{ $row->judul }}</a></h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                    </div>
                </div>
                <div class="product__pagination">
                    <a href="{{ url('#') }}" class="current-page">1</a>
                    <a href="{{ url('#') }}">2</a>
                    <a href="{{ url('#') }}">3</a>
                    <a href="{{ url('#') }}">4</a>
                    <a href="{{ url('#') }}">5</a>
                    <a href="{{ url('#') }}"><i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="product__sidebar">
                    <div class="product__sidebar__view">
                        <div class="section-title">
                            <h5>Top Views</h5>
                        </div>
                        <ul class="filter__controls">
                            <li class="active" data-filter="*">Day</li>
                            <li data-filter=".week">Week</li>
                            <li data-filter=".month">Month</li>
                            <li data-filter=".years">Years</li>
                        </ul>
                        <div class="filter__gallery">
                            <div class="product__sidebar__view__item set-bg mix day years"
                                data-setbg="{{ asset('/anime/img/sidebar/tv-1.jpg') }}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="{{ url('#') }}">Boruto: Naruto next generations</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix month week"
                                data-setbg="{{ asset('/anime/img/sidebar/tv-2.jpg') }}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="{{ url('#') }}">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix week years"
                                data-setbg="{{ asset('/anime/img/sidebar/tv-3.jpg') }}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="{{ url('#') }}">Sword art online alicization war of underworld</a>
                                </h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix years month"
                                data-setbg="{{ asset('/anime/img/sidebar/tv-4.jpg') }}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="{{ url('#') }}">Fate/stay night: Heaven's Feel I. presage flower</a>
                                </h5>
                            </div>
                            <div class="product__sidebar__view__item set-bg mix day"
                                data-setbg="{{ asset('/anime/img/sidebar/tv-5.jpg') }}">
                                <div class="ep">18 / ?</div>
                                <div class="view"><i class="fa fa-eye"></i> 9141</div>
                                <h5><a href="{{ url('#') }}">Fate stay night unlimited blade works</a></h5>
                            </div>
                        </div>
                    </div>
                    <div class="product__sidebar__comment">
                        <div class="section-title">
                            <h5>New Comment</h5>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="{{ asset('/anime/img/sidebar/comment-1.jpg') }}" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="{{ url('#') }}">The Seven Deadly Sins: Wrath of the Gods</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="{{ asset('/anime/img/sidebar/comment-2.jpg') }}" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="{{ url('#') }}">Shirogane Tamashii hen Kouhan sen</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="{{ asset('/anime/img/sidebar/comment-3.jpg') }}" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="{{ url('#') }}">Kizumonogatari III: Reiket su-hen</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                        <div class="product__sidebar__comment__item">
                            <div class="product__sidebar__comment__item__pic">
                                <img src="{{ asset('/anime/img/sidebar/comment-4.jpg') }}" alt="">
                            </div>
                            <div class="product__sidebar__comment__item__text">
                                <ul>
                                    <li>Active</li>
                                    <li>Movie</li>
                                </ul>
                                <h5><a href="{{ url('#') }}">Monogatari Series: Second Season</a></h5>
                                <span><i class="fa fa-eye"></i> 19.141 Viewes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->
@endsection
