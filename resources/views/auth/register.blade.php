@extends('anim_category.header')

@section('anim_category')
@section('tittle')
    AnimKU
@endsection


<!-- Normal Breadcrumb Begin -->
<section class="normal-breadcrumb set-bg" data-setbg="{{ url('anime/img/normal-breadcrumb.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="normal__breadcrumb__text">
                    <h2>Sign Up</h2>
                    <p>Welcome to the official Anime blog.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Normal Breadcrumb End -->

<!-- Signup Section Begin -->
<section class="signup spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login__form">
                    <h3>Sign Up</h3>
                    <form action="{{ route('register') }}" method="post">
                        @csrf

                        <!-- username -->
                        <div class="input__item">
                            <input-label for="name" :value="__('Name')" />
                            <input type="text" placeholder="Your Name" name="name" :value="old('name')"
                                autofocus autocomplete="name" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <span class="icon_profile"></span>
                        </div>
                        <!-- username_End -->

                        <!-- Email -->
                        <div class="input__item">
                            <input-label for="email" :value="__('Email')" />
                            <input type="email" placeholder="Email address" name="email" :value="old('email')"
                                required autocomplete="username" required>
                            <span class="icon_mail"></span>
                        </div>
                        <!-- Email_End -->


                        <div class="input__item">
                            <input-label for="password" :value="__('Password')" />
                            <input type="password" placeholder="Password" name="password" required
                                autocomplete="new-password">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <span class="icon_lock"></span>
                        </div>
                        <div class="input__item">
                            <input-label for="password_confirmation" :value="__('Confirm Password')" />
                            <input type="password" placeholder="Password" name="password_confirmation" required
                                autocomplete="new-password" required>
                            <input-error :messages="$errors - > get('password_confirmation')" class="mt-2" />
                            <span class="icon_lock"></span>
                        </div>
                        <button type="submit" class="site-btn">Login Now</button>
                    </form>
                    <h5>Already have an account? <a href="{{ route('login') }}">Log In!</a></h5>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login__social__links">
                    <h3>Login With:</h3>
                    <ul>
                        <li><a href="{{ url('#') }}" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a>
                        </li>
                        <li><a href="{{ url('#') }}" class="google"><i class="fa fa-google"></i> Sign in With
                                Google</a></li>
                        <li><a href="{{ url('#') }}" class="twitter"><i class="fa fa-twitter"></i> Sign in With
                                Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Signup Section End -->
@endsection
