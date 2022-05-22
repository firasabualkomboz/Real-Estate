{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Register') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if ($errors->any())--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone">--}}

{{--                                @error('phone')--}}
{{--                                <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}


<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 9 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Metronic | Login Page 6</title>
    <meta name="description" content="Login page example"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('assets_dashboard')}}/assets/css/pages/users/login-6.css" rel="stylesheet" type="text/css"/>
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('assets_dashboard')}}/assets/plugins/global/plugins.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets_dashboard')}}/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{asset('assets_dashboard')}}/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('assets_dashboard')}}/assets/media/logos/favicon.ico"/>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body"
      class="header-mobile-fixed subheader-enabled aside-enabled aside-fixed aside-secondary-enabled page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-6 login-signin-on d-flex flex-column flex-lg-row flex-row-fluid bg-white" id="kt_login">
        <!--begin::Aside-->
        <div
            class="login-aside order-2 order-lg-1 d-flex flex-column-fluid flex-lg-row-auto bgi-size-cover bgi-no-repeat p-7 p-lg-10">
            <!--begin: Aside Container-->
            <div class="d-flex flex-row-fluid flex-column justify-content-between">
                <!--begin::Aside body-->
                <div class="d-flex flex-column-fluid flex-column flex-center mt-5 mt-lg-0">
                    <a href="#" class="mb-15 text-center">
                        <img src="{{asset('assets_dashboard')}}/assets/media/logos/logo-letter-1.png" class="max-h-75px"
                             alt=""/>
                    </a>
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <div class="text-center mb-10 mb-lg-20">
                            <h2 class="font-weight-bold">Sign Up</h2>
                            <p class="text-muted font-weight-bold">Enter your username and password</p>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate">
                            <div class="form-group py-3 m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Email"
                                       placeholder="Email" name="username" autocomplete="off"/>
                            </div>

                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="phone"
                                       placeholder="Phone" name="phone"/>
                            </div>

                            <div class="form-group py-3 border-top m-0">
                                <label>Type Account</label>

                                <div class="radio-inline">

                                    <label class="radio radio-rounded radio-success">
                                        <input type="radio" value="0" name="type" checked="checked">tenant
                                        <span></span></label>

                                    <label class="radio radio-rounded radio-success">
                                        <input value="2" name="type" type="radio">Owner
                                        <span></span></label>

                                </div>

                            </div>


                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password"
                                       placeholder="Password" name="password"/>
                            </div>

                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password"
                                       placeholder="Password" name="password"/>
                            </div>


                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                                <label class="checkbox checkbox-outline m-0 text-muted">
                                    <input type="checkbox" name="remember"/>Remember me
                                    <span></span></label>
                                <a href="javascript:;" id="kt_login_forgot" class="text-muted text-hover-primary">Forgot
                                    Password ?</a>
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-2">
                                <div class="my-3 mr-2">
                                    <span class="text-muted mr-2">Do you have an account? </span>
                                    <a href="javascript:;" id="kt_login_signup" class="font-weight-bold">Signin</a>
                                </div>
                                <button id="kt_login_signin_submit"
                                        class="btn btn-primary font-weight-bold px-9 py-4 my-3">Sign Up
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                    <div class="login-form login-signup">
                        <div class="text-center mb-10 mb-lg-20">
                            <h3 class="">Sign Up</h3>
                            <p class="text-muted font-weight-bold">Enter your details to create your account</p>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate">
                            <div class="form-group py-3 m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="text"
                                       placeholder="Fullname" name="fullname" autocomplete="off"/>
                            </div>
                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password"
                                       placeholder="Email" name="email" autocomplete="off"/>
                            </div>
                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password"
                                       placeholder="Password" name="password" autocomplete="off"/>
                            </div>
                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="password"
                                       placeholder="Confirm password" name="rpassword" autocomplete="off"/>
                            </div>
                            <div class="form-group mt-5">
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" name="agree"/>I Agree the
                                    <a href="#">terms and conditions</a>.
                                    <span></span></label>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center">
                                <button id="kt_login_signup_submit"
                                        class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit
                                </button>
                                <button id="kt_login_signup_cancel"
                                        class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signup-->
                    <!--begin::Forgot-->
                    <div class="login-form login-forgot">
                        <div class="text-center mb-10 mb-lg-20">
                            <h3 class="">Forgotten Password ?</h3>
                            <p class="text-muted font-weight-bold">Enter your email to reset your password</p>
                        </div>
                        <!--begin::Form-->
                        <form class="form" novalidate="novalidate">
                            <div class="form-group py-3 border-bottom mb-10">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="email"
                                       placeholder="Email" name="email" autocomplete="off"/>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center">
                                <button id="kt_login_forgot_submit"
                                        class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">Submit
                                </button>
                                <button id="kt_login_forgot_cancel"
                                        class="btn btn-light-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Forgot-->
                </div>
                <!--end::Aside body-->
                <!--begin: Aside footer for desktop-->
                <div class="d-flex flex-column-auto justify-content-between mt-15">
                    <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2020 Metronic</div>
                    <div class="d-flex order-1 order-sm-2 my-2">
                        <a href="#" class="text-muted text-hover-primary">Privacy</a>
                        <a href="#" class="text-muted text-hover-primary ml-4">Legal</a>
                        <a href="#" class="text-muted text-hover-primary ml-4">Contact</a>
                    </div>
                </div>
                <!--end: Aside footer for desktop-->
            </div>
            <!--end: Aside Container-->
        </div>
        <!--begin::Aside-->
        <!--begin::Content-->
        <div class="order-1 order-lg-2 flex-column-auto flex-lg-row-fluid d-flex flex-column p-7"
             style="background-image: url({{asset('assets_dashboard')}}/assets/media/bg/bg-4.jpg);">
            <!--begin::Content body-->
            <div class="d-flex flex-column-fluid flex-lg-center">
                <div class="d-flex flex-column justify-content-center">
                    <h3 class="display-3 font-weight-bold my-7 text-white">Welcome to Metronic!</h3>
                    <p class="font-weight-bold font-size-lg text-white opacity-80">The ultimate Bootstrap, Angular 8,
                        React &amp; VueJS admin theme
                        <br/>framework for next generation web apps.</p>
                </div>
            </div>
            <!--end::Content body-->
        </div>
        <!--end::Content-->
    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = {
        "breakpoints": {"sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200},
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#1BC5BD",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#6993FF",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#1BC5BD",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#E1E9FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('assets_dashboard')}}/assets/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('assets_dashboard')}}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{asset('assets_dashboard')}}/assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets_dashboard')}}/assets/js/pages/custom/login/login.js"></script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
