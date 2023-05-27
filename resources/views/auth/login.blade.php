
<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from salreo.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 15:46:29 GMT -->
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:title" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:description" content="Salreo : Crypto Trading UI Admin  Bootstrap 5 Template" >
    <meta property="og:image" content="social-image.png" >
    <meta name="format-detection" content="telephone=no">
    <!-- PAGE TITLE HERE -->
    <title>Login | {{ env('APP_NAME') }}</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png" >
    <link href="{{ asset('client/vendor/wow-master/css/libs/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css') }}">
    <link rel="stylesheet" href="{{ asset('client/vendor/jquery-nice-select/css/nice-select.css') }}">
    <!--swiper-slider-->
    <link rel="stylesheet" href="{{ asset('client/vendor/swiper/css/swiper-bundle.min.css') }}">
    <link href="{{ asset('client/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
    <!-- Style css -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">

</head>

<body class="body  h-100">
<div class="container-fluid h-100">
    <div class="row h-100 align-items-center justify-contain-center">
        <div class="col-xl-12">
            <div class="card main-width">
                <div class="card-body  p-0">
                    <div class="row m-0">
                        <div class="col-xl-6 offset-xl-3 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <a href="{{ route('index') }}">
                                            <h3 style="color: black; font-weight: bolder; text-transform: capitalize">{{ env('APP_NAME') }}</h3>
                                        </a>
                                    </div>
                                    <h2>Hi,Welcome Back!</h2>
                                    <form class="mt-4" method="POST" action="{{ route('login') }}">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group mb-4">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Email">
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mb-4 flex-wrap">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label font-w400" for="exampleCheck1">keep me signed in</label>
                                            </div>
                                            <span>
                                                @if (Route::has('password.request'))
                                                    <a class="text-primary font-w500 c-pointer" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Password?') }}
                                                    </a>
                                                @endif
                                            </span>
                                        </div>
                                        <button type="submit"  class="btn btn-primary btn-block mb-4"><i class="fa-solid fa-lock text-white me-2"></i>Submit</button>

                                    </form>
                                    <div class="position-relative social-log text-center mb-4">
                                        <span>Don't have an account?</span>
                                        <span class="mt-xl-0 mt-3"><a href="{{ route('register') }}" class="text-primary font-w500">Sign Up</a></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{ asset('client/vendor/global/global.min.js') }}"></script>



</body>

<!-- Mirrored from salreo.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 26 May 2023 15:46:32 GMT -->
</html>


