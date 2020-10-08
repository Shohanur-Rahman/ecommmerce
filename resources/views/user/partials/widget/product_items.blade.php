<?php $itemCount = 1; ?>
@foreach($categoryProducts as $product)
    @php
        $rating = \App\Models\Products::rating($product->id);
        $ratingCount = \App\Models\Products::ratingCount($product->id)
    @endphp
    <div class="col-xl-3 col-md-4 col-sm-6 product-item wow {{ ($itemCount % 2) != 0 ?'slideInDown': 'slideInUp'}}">
        <div class="product-single">
            <div class="product-title">
                <h4>
                    <a href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}">{{$product->title}}</a>
                </h4>
            </div>
            <div class="product-thumb">
                <a href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}"><img
                        class="product-item-listed-image" src="{{asset($product->featured_image)}}"
                        alt="{{$product->title}}" title="{{$product->title}}"/></a>
                <div class="product-quick-view">
                    <a href="{{route('product.details', ["category" => $productCategory->slug ,"slug" => $product->slug])}}">View
                        Product</a>
                </div>
            </div>
            <div class="product-price-rating">
                <div class="product-price-rating">
                    <span>$ {{$product->new_price}}</span>
                </div>
                <div class="pull-right d-flex">
                    <div  id="dataReadonlyReview"
                          data-rating-stars="5"
                          data-rating-readonly="true"
                          data-rating-half="true"
                          data-rating-value="{{$rating}}"
                          data-rating-input="#dataReadonlyInput">
                    </div>
                    <span>({{$ratingCount}})</span>
                </div>
                <div class="product-action">
                    <a href="javascript:void(0);" class="product-compare"><i class="ti-control-shuffle"></i></a>

                    <form class="d-inline" action="{{route('product.add_to_cart')}}" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <input type="hidden" name="product_price" value="{{$product->new_price}}">
                        <input type="hidden" value="1" name="quantity"/>
                        <button type="submit" class="btn btn-success add-to-cart">Add to Cart</button>
                    </form>

                    <a href="javascript:void(0);" class="product-wishlist"><i class="ti-heart"></i></a>
                </div>
            </div>
        </div>
    </div>

    <?php $itemCount += 1; ?>
@endforeach
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="{{asset('user/assets/js/rating.js')}}"></script>
