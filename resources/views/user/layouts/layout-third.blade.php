<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('user.partials.layout.third.resources')
</head>

<body>

<!--header-area start-->
@include('user.partials.layout.third.header')
<!--header-area end-->




<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-10 col-xs-10 ">
            @yield('content')
        </div>
        <div class="col-xl-2 col-lg-3 ">
            @include('user.partials.layout.third.menu')
        </div>

    </div>
</div>

<!--footer-area start-->
@include('user.partials.layout.third.footer')

</body>

</html>
