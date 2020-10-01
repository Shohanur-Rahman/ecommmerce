<!doctype html>
<html class="no-js" lang="zxx">

<head>
    @include('user.partials.layout.third.resources')

</head>

<body>

<!--header-area start-->
@include('user.partials.layout.third.header')
<!--header-area end-->

<section class="">
    @yield('content')
</section>

<!--footer-area start-->
@include('user.partials.layout.third.footer')

</body>

</html>
