<?php $tabCount = 0;?>

@foreach($tabItemList as $aTab)


<div id="{{$tabId.$aTab->id}}" class="tab-pane fade {{$tabCount < 1 ? 'in show active': ''}}">
	<div class="row four-items cv-visible">
		<?php

            $productItems = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('is_published', 1)
            ->where('show_on_home', 1)
            ->where($filter_key, 1)
            ->where('product_category_maps.cat_id', $aTab->cat_id)
            ->take($aTab->no_of_product)
            ->get();
        $tabCount+=2;
		?>

        @foreach($productItems as $item)

		<div class="col-lg-3">
			<!--single-product-->
			<div class="product-single">
				<div class="product-title">
					<h4><a href="#">{{$item->title}}</a></h4>
				</div>
				<div class="product-thumb">
					<a href="#"><img src="{{asset($item->featured_image)}}" alt="" /></a>
					<div class="product-quick-view">
						<a href="{{route('product.details', ["category" => $aTab->category->slug ,"slug" => $item->slug])}}">View Product</a>
					</div>
				</div>
				<div class="product-price-rating">

					<span>$ {{$item->new_price}}</span>
				</div>
				<div class="product-action">
					<a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>
					<a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
					<a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
				</div>
			</div>
		</div>

       @endforeach
	</div>
</div>

@endForeach
