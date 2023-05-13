{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Metronic - Bootstrap 5 HTML, VueJS, React, Angular & Laravel Admin Dashboard Theme
Purchase: https://1.envato.market/EA4JP
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
    <!--begin::Head-->
    <head><base href="../../../">
        <!-- <title>{{ config('app.name', 'Adaro') }}</title> -->
        <title>Asset Management System</title>
        <meta charset="utf-8" />
        <meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
        <meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
        <meta property="og:url" content="https://keenthemes.com/metronic" />
        <meta property="og:site_name" content="Keenthemes | Metronic" />
        <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
        <!--begin::Fonts-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Global Stylesheets Bundle(used by all pages)-->
        <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

        <style type="text/css">
            @media (min-width: 992px){
                .flex-center {
                    align-items: inherit;
                }
                .p-lg-15 {
                    padding:64px 3.75rem!important;
                    background-color: white;
                    width: 50px;
                }

                .mx-auto {
                    margin-right: 0px!important;
                    margin-left: auto!important;
                    margin-top: 0px!important;
                }

                .w-lg-500px {
                    width: 370px!important;
                    margin: 0px;
                    height: 100vh;
                }

                .row>* {
                    padding-right: 0px;
                }

                .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
                    padding: 0 10px;
                }
            }
        </style>
    </head>
    <!--end::Head-->
    <!--begin::Body-->
    <body id="kt_body" class="bg-body">
        <!--begin::Main-->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Authentication - Sign-in -->
            <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-size: cover; background-repeat: no-repeat; background-position: 50% 50%; background-image: url(assets/media/logos/login_background.svg">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                                <!--begin::Content-->
                                <div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20" style="margin-left: 80px; margin-top: 65px;">
                                    <!--begin::Logo-->
                                    <!-- <a href="../../demo1/dist/index.html" class="py-9 mb-5">
                                        <img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-60px" />
                                    </a> -->
                                    <!--end::Logo-->
                                    <!--begin::Title-->
                                    <h1 class="fw-bolder pb-5 pb-md-10" style="font-weight: 700; font-size: 34px; line-height: 130%; text-align: left; color: #F8FAF9">Asset Management System</h1>
                                    <!--end::Title-->
                                    <!--begin::Description-->
                                    <p class="" style="text-align: left; color: #F8FAF9; font-size: 16px; line-height: 28.8px">Fixed Asset Management System Application consists of <br> Main Modules, including:</p>
                                    <!--end::Description-->
                                    <div style="margin:30px 10px">
                                        <p style="font-weight: 400; font-size: 16px; color: #F8FAF9; text-align: left">
                                            <i style="font-size: 20px; color: #F8FAF9; margin-right: 15px" class="fa-solid fa-circle-check"></i>
                                            Fixed Asset Master Data
                                        </p>
                                        <p style="font-weight: 400; font-size: 16px; color: #F8FAF9; text-align: left">
                                            <i style="font-size: 20px; color: #F8FAF9; margin-right: 15px" class="fa-solid fa-circle-check"></i>
                                            Audit Fixed Asset
                                        </p>
                                        <p style="font-weight: 400; font-size: 16px; color: #F8FAF9; text-align: left">
                                            <i style="font-size: 20px; color: #F8FAF9; margin-right: 15px" class="fa-solid fa-circle-check"></i>
                                            Maintenance Order
                                        </p>
                                    </div>
                                </div>
                                <!--end::Content-->
                                <!--begin::Illustration-->
                                <!-- <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(assets/media/illustrations/sketchy-1/13.png"></div> -->
                                <!--end::Illustration-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <div class="col-lg-4">
                            <!--begin::Wrapper-->
                            <div class="w-lg-500px p-10 p-lg-15 mx-auto full-height">
                                <!--begin::Form-->
                                <form method="POST" action="{{ route('password.email') }}" class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="#">
                                    @csrf
                                    @if (session('status'))
                                        <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    <!--begin::Heading-->
                                    <div class="text-center mb-10">
                                        <!--begin::Title-->
                                        <!-- <span style="float: left; margin-top: 5%;"><h1 class="text-dark mb-3" style="font-size: 26px">Sign In</h1></span> -->
                                        <span style="text-align: center"><img alt="Logo" src="assets/media/logos/AdaroMineralColour.png" class="h-50px logo" /></span>
                                        <div style="clear:both;"></div><div class="clear"></div>

                                        <!--end::Title-->
                                        <!--begin::Link-->

                                        <!--end::Link-->
                                    </div>
                                    <!--begin::Heading-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <!--begin::Label-->
                                        <label class="form-label fs-6 fw-bolder text-dark"><h2>Forgot Password</h2></label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-lg form-control-solid @error('email') is-invalid @enderror" style="padding: 16px 25px;background-color: #FBFBFB;border-color: #CDCDCD" type="text" name="email" autocomplete="off" placeholder="Email" value="{{ old('email') }}"/>

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <!--begin::Submit button-->
                                        <button type="submit" style="background-color: #009D50" class="btn btn-lg btn-primary w-100 mb-5">
                                            <span class="indicator-label">{{ __('Send Password Reset Link') }}</span>
                                            <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </div>
                </div>
                <!--end::Content-->
            </div>
            <!--end::Authentication - Sign-in-->
        </div>
        <!--end::Root-->
        <!--end::Main-->
        <!--begin::Javascript-->
        <script>var hostUrl = "assets/";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="assets/plugins/global/plugins.bundle.js"></script>
        <script src="assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Page Custom Javascript(used by this page)-->
        <script src="assets/js/custom/authentication/sign-in/general.js"></script>
        <!--end::Page Custom Javascript-->
        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>

