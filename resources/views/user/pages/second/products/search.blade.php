<?php
function generateQueryString($queryName, $keyValue)
{
    $queryString = "";
    $requestString = Request::all();

    foreach ($requestString as $key => $value) {
        if ($queryName != $key) {
            $queryString = $queryString . makeURL($queryString, $key, $value);
        }
    }
    $queryString = $queryString . makeURL($queryString, $queryName, $keyValue);
    return $queryString;
}

function makeURL($queryString, $key, $value)
{
    if ($queryString == "") {
        return $queryString = "?" . $key . "=" . $value;
    } else {
        return $queryString = "&" . $key . '=' . $value;
    }
}

?>

<!--products-area start-->
<div class="shop-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-2 col-lg-3">
                <div class="sidebar">

                    <div class="price_filter mt-40">
                        <div class="section-title">
                            <h3>Filter by price</h3>
                        </div>
                        <div class="price_slider_amount">
                            <form method="get" action="{{route('product.search')}}">
                                 <input type="hidden" name="min" id="hdnMinPrice">
                                <input type="hidden" name="max" id="hdnMaxPrice">
                                <input type="hidden" name="color" value="{{request()->query('brand') ?? request()->query('brand')}}">
                                <input type="hidden" name="page_size" value="{{request()->query('page_size') ?? request()->query('page_size')}}">
                                <input type="hidden" name="brand" value="{{request()->query('brand') ?? request()->query('brand')}}">
                                <input type="hidden" name="order" value="{{request()->query('order') ?? request()->query('order')}}">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <input type="text" id="amount" placeholder="Add Your Price"/>
                                </div>
                                <div class="col-lg-6">
                                    <button>Filter</button>
                                </div>
                            </div>

                            </form>
                        </div>
                        <div id="slider-range"></div>
                    </div>
                    @if($categories)
                    <div class="vertical-menu">
                        
                        <ul>
                           @foreach($categories as $category)
                            @foreach($category->childrens as $submenu)
                            @if($submenu->childrens->count() > 0)
                            <li><a href="{{route('product.index', $submenu->slug)}}">{{$submenu->category_name}}</a>
                                <ul>
                                    @foreach($submenu->childrens as $lastItem)
                                    <li><a href="{{route('product.index', $lastItem->slug)}}">{{$lastItem->category_name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @else
                            <li><a href="{{route('product.index', $submenu->slug)}}"">{{$submenu->category_name}}</a></li>
                            @endif
                            @endforeach
                           @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="list-filter mt-43">
                        <div class="section-title">
                            <h3>Brands</h3>
                        </div>
                        <ul class="list-none mt-25">
                            @foreach($brands as $brand)
                            <li>
                                <a href="{{route('product.search').generateQueryString('brand', $brand->id)}}">{{$brand->name}}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="list-filter mt-43">
                        <div class="section-title">
                            <h3>Colors</h3>
                        </div>
                        <ul class="list-none mt-25">
                            @foreach($colors as $color)
                                <li>
                                    <a href="{{route('product.search').generateQueryString('color', $color->id)}}">{{$color->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!--latest-products-->
                    <div class="products-list mt-30">
                        <div class="section-title mb-30">
                            <h3>Latest Items</h3>
                        </div>
                        <div class="one-carousel dots-none">
                            <div>
                                <ul class="list-none">
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/1.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/2.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/3.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <ul class="list-none">
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/1.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/2.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="product-single style-2">
                                            <div class="row align-items-center m-0">
                                                <div class="col-lg-4 p-0">
                                                    <div class="product-thumb">
                                                        <a href="#"><img src="/user/assets/images/products/latest/3.jpg"
                                                                         alt=""/></a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 p-0">
                                                    <div class="product-title">
                                                        <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                                    </div>
                                                    <div class="product-price-rating">
                                                        <span>$195.00</span>
                                                        <del>$229.99</del>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9">
                <div class="row align-items-center">

                    <div class="col-lg-2 col-md-6">
                        <div class="section-title">
                            <h3>Shop Grid 05 Col</h3>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="products-sort short-dropdown">
                            <label>Short by : Default</label>
                            <ul>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('order',0)}}">Default
                                        Sorting</a></li>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('order',1)}}">Sort
                                        by A - Z</a></li>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('order',2)}}">Sort
                                        Price Low - High</a></li>
                            </ul>
                        </div>
                        <div class="products-sort short-dropdown">
                            <label>Show : {{request()->query('page_size') ? request()->query('page_size') : 15}} Items</label>
                            <ul>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('page_size',15)}}">15</a>
                                </li>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('page_size',25)}}">25</a>
                                </li>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('page_size',40)}}">40</a>
                                </li>
                                <li>
                                    <a href="{{route('product.search').generateQueryString('page_size',60)}}">60</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="site-pagination pull-right">
                            <ul>
                                <li><a href="#" class="active">1</a></li>
                                <li>of</li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-view-system pull-right" role="tablist">
                            <ul class="nav nav-tabs">
                                <li><a class="active" data-toggle="tab" href="#grid-products"><img
                                            src="/user/assets/images/icons/icon-grid.png" alt=""/></a></li>
                                <li><a data-toggle="tab" href="#list-products"><img
                                            src="/user/assets/images/icons/icon-list.png" alt=""/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="grid-products" class="tab-pane active">
                        <div class="row">

                            @foreach($products as $product)

                                <div class="col-xl-3 col-md-4 col-sm-6">
                                    <div class="product-single">
                                        <div class="product-title">
                                            <small><a href="#">Aquaracer</a></small>
                                            <h4><a href="#">{{$product->title}}</a></h4>
                                        </div>
                                        <div class="product-thumb">
                                            <a href="#"><img src="{{$product->featured_image}}" alt=""/></a>
                                            <div class="product-quick-view">
                                                <a href="{{route('product.search.show', $product->slug)}}">View
                                                    Product</a>
                                            </div>
                                        </div>
                                        <div class="product-price-rating">
                                            <div class="pull-left">
                                                <span>${{$product->new_price}}</span>
                                            </div>
                                            <div class="pull-right">
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span class="rating-quantity">(0)</span>
                                            </div>
                                        </div>
                                        <div class="product-action">
                                            <a href="javascript:void(0);" class="product-compare"><i
                                                    class="ti-control-shuffle"></i></a>
                                            <a href="javascript:void(0);" class="add-to-cart">Add to Cart</a>
                                            <a href="javascript:void(0);" class="product-wishlist"><i
                                                    class="ti-heart"></i></a>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        </div>
                    </div>
                    <div id="list-products" class="tab-pane">
                        @foreach($products as $product)
                                <div class="product-single wide-style">
                                    <div class="row align-items-center">
                                        <div class="col-xl-3 col-lg-6 col-md-6">
                                            <div class="product-thumb">
                                                <a href="#"><img src="{{$product->featured_image}}"
                                                                 alt="{{$product->title}}"/></a>
                                                <div class="product-quick-view">
                                                    <a href="{{route('product.search.show', $product->slug)}}">View
                                                        Product</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                            <a href="#" class="add-to-wishlist"><i class="icon_heart_alt"></i></a>
                                            <div class="product-title">
                                                <small><a
                                                        href="">Hi</a></small>
                                                <h4><a href="#">{{$product->title}}</a></h4>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <span>(5)</span>
                                            </div>
                                            <div class="product-text">
                                                {{$product->short_description}}
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-4 col-md-4">
                                            <div class="product-action stuck text-left">
                                                <div class="free-delivery">
                                                    <a href="#"><i class="ti-truck"></i> Free Delivery</a>
                                                </div>
                                                <div class="product-price-rating">
                                                    <div>
                                                        <del>{{$product->old_price}}</del>
                                                    </div>
                                                    <span>{{$product->new_price}}</span>
                                                </div>
                                                <div class="product-stock">
                                                    <p>Avability: <span>In stock</span></p>
                                                </div>
                                                <a href="#" class="add-to-cart">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                    </div>
                </div>
                <div class="row align-items-center mt-30">
                    <div class="col-lg-6">
                        <div class="site-pagination">
                            {{$products->links()}}
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-results pull-right">
                            <span>Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}} results</span>
                        </div>
                    </div>
                </div>
                <!--recently-viewed-products-start-->
                <div class="recent-viewed-products mt-50">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title">
                                <h3>Recently Viewed Products</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row recent-products mlr-minus-12">
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/2.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/4.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/21.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/23.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/9.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/12.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/4.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/4.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/5.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/5.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/6.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--single-product-->
                            <div class="product-single style-2">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 p-0">
                                        <div class="product-thumb">
                                            <a href="#"><img src="/user/assets/images/products/6.jpg" alt=""/></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 p-0">
                                        <div class="product-title">
                                            <small><a href="#">Electronics</a></small>
                                            <h4><a href="#">Vantech VP-153C Camera</a></h4>
                                        </div>
                                        <div class="product-price-rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="product-price-rating">
                                            <span>$195.00</span>
                                            <del>$229.99</del>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--recently-viewed-products-end-->
            </div>
        </div>
    </div>
</div>
<!--products-area end-->

<!--brands-area start-->
<div class="container-fluid mt-60">
    <div class="brands-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="brand-items">
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/1.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/2.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/3.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/4.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/5.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/6.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/7.jpg" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="/user/assets/images/brands/8.jpg" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brands-area end-->


<script type="text/javascript">
    $(document).ready(function(){
        var minPrice = "{{request()->query('min') ? request()->query('min') : 10}}";
        var maxPrice = "{{request()->query('max') ? request()->query('max') : 30000}}";
        
$( "#slider-range" ).slider({
    range: true,
    min: 10,
    max: 30000,
    values: [ minPrice, maxPrice ],
    slide: function( event, ui ) {
    $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
    $( "#hdnMinPrice" ).val(ui.values[ 0 ] );
    $( "#hdnMaxPrice" ).val(ui.values[ 1 ] );
    }
});
$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
" - $" + $( "#slider-range" ).slider( "values", 1 ) );

$( "#hdnMinPrice" ).val($( "#slider-range" ).slider( "values", 0 ));
$( "#hdnMaxPrice" ).val($( "#slider-range" ).slider( "values", 1 ));

    })
</script>