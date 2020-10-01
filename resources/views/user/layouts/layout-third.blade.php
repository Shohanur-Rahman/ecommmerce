<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <title>@yield('title')</title>
    @include('user.partials.layout.third.resources')

</head>

<body>

<!--header-area start-->
@include('user.partials.layout.third.header')
<!--header-area end-->




<div class="container-fluid">
    <div class="row ">
        <div class="col-lg-9 col-sm-12 col-xs-12 col-md-12 col-xl-1o">
            @yield('content')
        </div>
        <div class="col-xl-2 col-lg-3 col-md-3 ">
            @include('user.partials.layout.third.menu')
        </div>

    </div>
</div>

<!--footer-area start-->
@include('user.partials.layout.third.footer')

</body>

</html>
