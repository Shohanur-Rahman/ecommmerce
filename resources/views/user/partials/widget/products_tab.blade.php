@foreach($tabItemList as $aTab)

<div id="{{$tabId.$aTab}}" class="tab-pane fade  in show active">
	<div class="row four-items cv-visible">
		<?php $productItems = App\Models\Products::where(["is_published" => true, "show_on_home" => true,])->get(); ?>

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

@endForeach