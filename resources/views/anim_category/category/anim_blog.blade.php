@extends('anim_category.header')

@section('anim_category')
@section('tittle')
    AnimKU
@endsection


<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
                <div class="blog__details__title">
                    <h6>Action, Magic <span>- March 08, 2020</span></h6>
                    <h2>Anime for Beginners: 20 Pieces of Essential Viewing</h2>
                    <div class="blog__details__social">
                        <a href="{{ url('#') }}" class="facebook"><i class="fa fa-facebook-square"></i> Facebook</a>
                        <a href="{{ url('#') }}" class="pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                        <a href="{{ url('#') }}" class="linkedin"><i class="fa fa-linkedin-square"></i>
                            Linkedin</a>
                        <a href="{{ url('#') }}" class="twitter"><i class="fa fa-twitter-square"></i> Twitter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="blog__details__pic">
                    <img src="{{ asset('/anime/img/blog/details/blog-details-pic.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="blog__details__content">
                    <div class="blog__details__text">
                        <p>As a result the last couple of eps haven’t been super exciting for me, because they’ve
                            been more like settling into a familiar and comfortable routine.  We’re seeing character
                            growth here but it’s subtle (apart from Shouyou, arguably).  I mean, Tobio being an
                            asshole is nothing new – it’s kind of the foundation of his entire character arc.
                            Confronting whether his being an asshole is a problem for the Crows this directly is a
                            bit of an evolution, and probably an overdue one at that, but the overall dynamic with
                            Kageyama is basically unchanged.</p>
                    </div>
                    @foreach ($bloganimeku as $row)
                        <div class="blog__details__item__text">
                            <h4>{{ $row->nama_anime }}</h4>
                            <img src="{{ \Illuminate\Support\Facades\Storage::url($row->gambar_anime_coming_soon) }}"
                                alt="">
                            <p>{{ $row->deskripsi_anime_coming_soon }}</p>
                        </div>
                    @endforeach



                    <div class="blog__details__btns">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__btns__item">
                                    <h5><a href="{{ url('#') }}"><span class="arrow_left"></span> Building a
                                            Better LiA...</a>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__btns__item next__btn">
                                    <h5><a href="{{ url('#') }}">Mugen no Juunin: Immortal – 21 <span
                                                class="arrow_right"></span></a></h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog__details__form">
                        <h4>Leave A Commnet</h4>
                        <div class="alert alert-success alert-dismissible fade show d-none my-alert" role="alert">
                            <strong>Terima Kasih!</strong> Pesan Anda Sudah Di Terima.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>

                        <form name="data-comment-animeku">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" id="name" name="nama" placeholder="Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-lg-12">
                                    <textarea id="message" placeholder="Message" name="pesan"></textarea>
                                    <button type="submit" id="submit" class="btn-kirim site-btn">Send
                                        Message</button>
                                    <button class="btn btn-loading site-btn d-none" type="button" disabled>
                                        <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                                        <span role="status">Loading...</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbznNsYu40cB6r9-fZOm-yHCZ4EEiroZjyTScp1pZgbdLRnuVZE_4eiPpvuwrH348z-l/exec'
    const form = document.forms['data-comment-animeku'];

    const btnkirim = document.querySelector('.btn-kirim');
    const btnLoading = document.querySelector('.btn-loading');
    const myAlert = document.querySelector('.my-alert');


    form.addEventListener('submit', (e) => {
        e.preventDefault();
        // ketika tombol submit diklik
        // tapilkan tombol loading tampilkan tombol loading
        btnkirim.classList.toggle('d-none');
        btnLoading.classList.toggle('d-none');
        fetch(scriptURL, {
                method: 'POST',
                body: new FormData(form)
            })
            .then((response) => {
                // tapilkan tombol kirim tampilkan tombol kirim
                btnLoading.classList.toggle('d-none');
                btnkirim.classList.toggle('d-none');

                //alertt
                myAlert.classList.toggle('d-none');

                // reset  form 
                form.reset();


                console.log('Succcess!', response);
            })
            .catch((error) => console.error('Error!', error.massage));
    });
</script>


<!-- Blog Details Section End -->
@endsection
