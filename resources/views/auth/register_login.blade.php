@extends('layout')

@section('content')

    <div class="breadcrumb-area section-padding-1 mt-80 bg-gray breadcrumb-ptb-1">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <h2>Login / Register</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="login-register-wrap">
                        <h3><i class="fa fa-user-o"></i> ورود</h3>
                        <div class="login-register-form">
                            <form action="{{route('login')}}" method="post">
                                {{csrf_field()}}
                                @include("errors")
                                <div class="sin-login-register">
                                    <input type="text" name="email" placeholder="ایمیل... *">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" name="password" placeholder="رمز عبور... *">
                                </div>
                                <div class="login-register-btn">
                                    <button class="login" type="submit">ورود</button>
                                    <button class="login-fb" type="submit">ورود با حساب فیسبوک</button>
                                </div>
                                <div class="remember-lost-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox">
                                        <label>مرابخاطر داشته‌باش</label>
                                    </div>
                                    <div class="lost-wrap">
                                        <a href="#">فراموشی رمز‌عبور</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="login-register-wrap">
                        <h3><i class="fa fa-user-o"></i> <a class="register-active" href="#">ساخت حساب‌کاربری</a></h3>
                        <div class="login-register-form register-form-wrap">
                            <form action="{{route('register')}}" method="post">
                                {{csrf_field()}}
                                <div class="sin-login-register">
                                    <input type="email" value="{{old('email')}}" name="email" placeholder="ایمیل خود را وارد کنید*">
                                </div>
                                <div class="sin-login-register">
                                    <input type="text" value="{{old('mobile')}}" name="mobile" placeholder="شماره موبایل خود را وارد کنید*">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" value="{{old('password')}}" name="password" placeholder="پسورد خود را وارد کنید*">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" value="{{old('password_confirmation')}}" name="password_confirmation" placeholder="پسورد خود را تکرار کنید*">
                                </div>
                                <div class="login-register-btn">
                                    <button class="login" type="submit">ثبت‌نام</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="subscribe-area bg-black pt-70 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="subscribe-title">
                        <h3>Stay in touch</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="mc_embed_signup" class="subscribe-form subscribe-mrg-1">
                        <form id="mc-embedded-subscribe-form" class="validate subscribe-form-style" novalidate="" target="_blank" name="mc-embedded-subscribe-form" method="post" action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef">
                            <div id="mc_embed_signup_scroll" class="mc-form">
                                <input class="email" type="email" required="" placeholder="Enter your email address..." name="EMAIL" value="">
                                <div class="mc-news" aria-hidden="true">
                                    <input type="text" value="" tabindex="-1" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef">
                                </div>
                                <div class="clear">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Subscribe">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
