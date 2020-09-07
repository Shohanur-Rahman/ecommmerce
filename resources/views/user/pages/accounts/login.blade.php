<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/antina/minimalistic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 05:44:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Antina - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="admin/img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">

</head>

<body class="login-area">

<!-- Preloader -->
<div id="preloader">
    <div class="preloader-load"></div>
</div>
<!-- Preloader -->

<!-- ======================================
******* Page Wrapper Area Start **********
======================================= -->
<div class="main-content- h-100vh py-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
                <!-- Middle Box -->
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">

                            <x-inform-users></x-inform-users>
                            <h4 class="font-24 mb-1">Login.</h4>
                            <p class="mb-30">Sign in to your account to continue.</p>

                            <form action="{{route('login')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="float-left" for="email">Email address</label>
                                    <input class="form-control" type="email" name="email" id="email" value="{{old('email')}}" required="" placeholder="Enter your email">

                                    @error('email')
                                    <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <a href="forget-password.html" class="text-dark float-right"></a>
                                    <label class="float-left" for="password">Password</label>
                                    <input class="form-control" type="password" name="password" value="{{old('email')}}" required="" id="password" placeholder="Enter your password">

                                    @error('email')
                                    <span class="text-danger">
                                                    <strong>{{ $message }}</strong>
                                            </span>
                                    @enderror
                                </div>

                                <div class="form-group d-flex justify-content-between align-items-center mb-3">
                                    <div class="checkbox d-inline mb-0">
                                        <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                        <label for="checkbox-8" class="cr mb-0">Remember me</label>
                                    </div>
                                    <span class="font-13 text-primary"><a href="forget-password.html">Forgot your password?</a></span>
                                </div>

                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block" type="submit"> Log In </button>
                                </div>

                                <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">Don't have an account?</span><a class="font-13 font-weight-bold" href="{{route('register')}}">Sign up</a></div>

                            </form>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======================================
********* Page Wrapper Area End ***********
======================================= -->

<!-- Must needed plugins to the run this template -->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/js/popper.min.js')}}"></script>
<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/js/bundle.js')}}"></script>

<!-- Active JS -->
<script src="{{asset('admin/js/default-assets/active.js')}}"></script>

</body>


<!-- Mirrored from demo.riktheme.com/antina/minimalistic/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Apr 2020 05:44:29 GMT -->
</html>
