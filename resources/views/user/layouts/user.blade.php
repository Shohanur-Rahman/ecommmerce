<!doctype html>
<html class="no-js" lang="zxx">

<head>
	@include('user.partials.layout.resources')
	
</head>

<body>
	<!--[if lte IE 9]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!--header-area start-->
	@include('user.partials.layout.header_second')
	<!--header-area end-->
	
	<section class="app_content_area">
		@yield('content')
	</section>
	
	<!--footer-area start-->
	@include('user.partials.layout.footer_second')
  
</body>

</html>
