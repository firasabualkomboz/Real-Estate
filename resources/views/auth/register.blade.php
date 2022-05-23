<html lang="en">
<!--begin::Head-->
<head>
    <base href="../../../">
    <meta charset="utf-8"/>
    <title>Real Estate | Register</title>
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
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="POST" action="{{ route('register') }}" class="form">
                            @csrf
                            <div class="form-group py-3 m-0">
                                <input
                                    class="form-control @error('name') is-invalid @enderror h-auto border-0 px-0 placeholder-dark-75"
                                    type="text"
                                    placeholder="Name" name="name"/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="form-group py-3 border-top m-0">
                                <input
                                    class="form-control @error('email') is-invalid @enderror h-auto border-0 px-0 placeholder-dark-75"
                                    type="Email"
                                    placeholder="Email" name="email" autocomplete="off"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group py-3 border-top m-0">
                                <input
                                    class="form-control @error('phone') is-invalid @enderror h-auto border-0 px-0 placeholder-dark-75"
                                    type="phone"
                                    placeholder="Phone" name="phone"/>
                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
                                    @error('type')
                                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                    @enderror


                                </div>
                            </div>

                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password"
                                       placeholder="Password" name="password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group py-3 border-top m-0">
                                <input class="form-control h-auto border-0 px-0 placeholder-dark-75" type="Password"
                                       placeholder="Confirm Password" name="password_confirmation" required
                                       autocomplete="new-password"/>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="form-group mt-5">
                                <label class="checkbox checkbox-outline">
                                    <input type="checkbox" name="agree"/>I Agree the
                                    <a href="#">terms and conditions</a>.
                                    <span></span></label>
                            </div>
                            <div class="form-group d-flex flex-wrap flex-center">
                                <button type="submit" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-2">
                                    Submit
                                </button>
                                <button id="kt_login_signup_cancel"
                                        class="btn btn-outline-primary font-weight-bold px-9 py-4 my-3 mx-2">Cancel
                                </button>
                            </div>
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->

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
