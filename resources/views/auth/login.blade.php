@extends('anim_category.header')

@section('anim_category')

@section('tittle')
AnimKU
@endsection  


    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="{{ url("anime/img/normal-breadcrumb.jpg") }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Anime blog.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <!-- Email -->
                            <div class="input__item">
                                <input-label for="email" :value="__('Email')" />
                                <input type="email" name="email" requiredautofocus autocomplete="username" :value="old('email')" placeholder="Email address">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                <span class="icon_mail"></span>
                            </div>
                            <!-- Email_End -->

                            <!-- Password -->
                            <div class="input__item">
                                <input-label for="password" :value="__('Password')" />
                                <input type="password" placeholder="Password" name="password" id="inputPassword" required>
                                <x-input-error :messages="$errors->get('password')" class="mt-2" /> 
                                <span class="icon_lock"></span>
                            </div>
                            <!-- Password_End -->

                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forget_pass">{{ __('Forgot your password?') }}</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <h3>Dont’t Have An Account?</h3>
                        <a href="{{ route("register") }}" class="primary-btn">Register Now</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <span>or</span>
                            <ul>
                                <li><a href="{{ url("#") }}" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="{{ url("#") }}" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="{{ url("#") }}" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Login Section End -->


@endsection