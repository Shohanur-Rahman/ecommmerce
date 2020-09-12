@extends('user.layouts.user')
@section('title', "Home")
@section('content')

	@include('user.partials.widget.main_slider')
	
	
	<!--banner-area start-->
	<div class="banner-area mt-30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-sm-6 hover-effect">
					<div class="banner-square">
						<a href="#"><img src="{{asset('user/assets/images/banners/md/6.jpg')}}" alt="" /></a>
						<div class="banner-caption">
							<h2>WOMEN'S</h2>
							<h3>Collection 2019</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 d-none d-lg-block">
					<div class="banner-square hover-effect">
						<img src="{{asset('user/assets/images/banners/md/7.jpg')}}" alt="" />
						<div class="banner-caption style-2 pt-20">
							<h2><strong>Kid’s</strong> Collection</h2>
						</div>
					</div>
					<div class="banner-square hover-effect mt-30">
						<img src="{{asset('user/assets/images/banners/md/8.jpg')}}" alt="" />
						<div class="banner-caption style-2">
							<h2><strong>Acessories</strong> Collection</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 mt-sm-20">
					<div class="banner-square hover-effect">
						<img src="{{asset('user/assets/images/banners/md/9.jpg')}}" alt="" />
						<div class="banner-caption">
							<h2>Men’s</h2>
							<h3>Collection 2019</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner-area end-->
	
	<!--products-area start-->
	<div class="products-area mt-55">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--products-tab-->
					<div class="products-tab">
						<div class="product-nav-tabs style-2 text-center">
							<ul class="nav nav-tabs">
								<?php $arrivalTabs = App\Models\Settings\NewArrivalTab::where('is_published', true)->get(); ?>
								<li><a class="active" data-toggle="tab" href="#all-products">all products</a></li>
								@foreach($arrivalTabs as $tab)
								<li><a data-toggle="tab" href="#arrivalTab{{$tab->id}}">{{$tab->category->category_name}}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="tab-content">
							<div id="all-products" class="tab-pane fade in show active">
								<div class="row four-items cv-visible">

									@include('user.partials.widget.product_list')

									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="men" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="women" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="kid" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="accessories" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
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
	</div>
	<!--products-area end-->
	
	<!--store-supports-area start-->
	<div class="store-supports-area bg-lightblue pd-20 mt-30 mt-sm-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-loan.png" alt="" />
						</div>
						<div class="support-text">
							<strong>Free Delivery</strong>
							<p>For all order over 99$</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-liquidity.png" alt="" />
						</div>
						<div class="support-text">
							<strong>30 Days Return</strong>
							<p>If goods have Problems</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-credit-card.png" alt="" />
						</div>
						<div class="support-text">
							<strong>Secure Payment</strong>
							<p>100% secure payment</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="store-support style-3">
						<div class="support-icon">
							<img src="assets/images/icons/bank-support.png" alt="" />
						</div>
						<div class="support-text">
							<strong>24/7 Support</strong>
							<p>Dedicated support</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--store-supports-area end-->
	
	<!--products-area start-->
	<div class="products-area mt-55">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<h2>Features Products</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<!--products-tab-->
					<div class="products-tab">
						<div class="product-nav-tabs style-2 text-center">
							<ul class="nav nav-tabs">
								<li><a class="active" data-toggle="tab" href="#all-products2">all products</a></li>
								<li><a data-toggle="tab" href="#men2">men’s</a></li>
								<li><a data-toggle="tab" href="#women2">women’s</a></li>
								<li><a data-toggle="tab" href="#kid2">kid’s</a></li>
								<li><a data-toggle="tab" href="#accessories2">accessories</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div id="all-products2" class="tab-pane fade in show active">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="men2" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="women2" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="kid2" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="accessories2" class="tab-pane fade">
								<div class="row four-items cv-visible">
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Manaco</a></small>
												<h4><a href="#">The timeless classic worn by Steve</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/26.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$95.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Iphone</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/27.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<div class="pull-left">
													<span>$95.00</span>
												</div>
												<div class="pull-right">
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
													<i class="fa fa-star-o"></i>
												</div>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">TAG Heuer </a></small>
												<h4><a href="#">iPATROL Riley V2 Bonus Bundle - WiFi</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/10.jpg" alt="" /></a>
												<div class="downsale">SALE</div>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$195.00</span>
												<del>229.99</del>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
											</div>
										</div>
									</div>
									<div class="col-lg-3">
										<!--single-product-->
										<div class="product-single">
											<div class="product-title">
												<small><a href="#">Aquaracer</a></small>
												<h4><a href="#">Samsung CF591 Series Curved</a></h4>
											</div>
											<div class="product-thumb">
												<a href="#"><img src="assets/images/products/9.jpg" alt="" /></a>
												<div class="product-quick-view">
													<a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">quick view</a>
												</div>
											</div>
											<div class="product-price-rating">
												<span>$525.00</span>
											</div>
											<div class="product-action">
												<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
												<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
												<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
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
	</div>
	<!--products-area end-->
	
	<!--product-offer-area start-->
	<div class="product-offer-area mt-30 mt-sm-50">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6 col-md-6">
					<div class="product-offer-left">
						<img src="{{asset('user/assets/images/offers/1.jpg')}}" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="text-block text-center">
						<h3>Shop Events & Save Up To 65% OFF!</h3>
						<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut <br/> aliquip ex ea commodo consequat.</p>
						<div class="product-countdown style-2 mt-30">
							<div data-countdown="2019/05/01"></div>
						</div>
						<a href="#" class="btn-common mt-50">Shop now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--product-offer-area end-->
	
	<!--brands-area start-->
	<div class="container-fluid">
		<div class="brands-area br-none">
			<div class="row">
				<div class="col-lg-12">
					<div class="brand-items">
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/1.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/2.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/3.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/4.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/5.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/6.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/7.jpg" alt="" />
							</a>
						</div>
						<div class="brand-item">
							<a href="#">
								<img class="brand-static" src="assets/images/brands/8.jpg" alt="" />
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--brands-area end-->

@endsection