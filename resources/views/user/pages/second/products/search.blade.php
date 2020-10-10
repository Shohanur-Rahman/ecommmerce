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
<div class="shop-area pt-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-3 col-lg-3">
                <div class="sidebar">

                    <div class="price_filter mt-40">
                        <div class="section-title">
                            <h3>Filter by price</h3>
                        </div>
                        <div class="price_slider_amount">
                            <form method="get" action="{{route('product.search')}}">
                                <input type="hidden" name="min" id="hdnMinPrice">
                                <input type="hidden" name="max" id="hdnMaxPrice">
                                <input type="hidden" name="color"
                                       value="{{request()->query('brand') ?? request()->query('brand')}}">
                                <input type="hidden" name="page_size"
                                       value="{{request()->query('page_size') ?? request()->query('page_size')}}">
                                <input type="hidden" name="brand"
                                       value="{{request()->query('brand') ?? request()->query('brand')}}">
                                <input type="hidden" name="order"
                                       value="{{request()->query('order') ?? request()->query('order')}}">
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
                    {{--@if($categories)
                        <div class="vertical-menu">

                            <ul>
                                @foreach($categories as $category)
                                    @foreach($category->childrens as $submenu)
                                        @if($submenu->childrens->count() > 0)
                                            <li>
                                                <a href="{{route('product.index', $submenu->slug)}}">{{$submenu->category_name}}</a>
                                                <ul>
                                                    @foreach($submenu->childrens as $lastItem)
                                                        <li>
                                                            <a href="{{route('product.index', $lastItem->slug)}}">{{$lastItem->category_name}}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @else
                                            <li>
                                                <a href="{{route('product.index', $submenu->slug)}}">{{$submenu->category_name}}</a>
                                            </li>
                                        @endif
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                    @endif--}}
                    <div class="list-filter mt-43">
                        <div class="section-title">
                            <h3>Brands</h3>
                        </div>
                        <ul class="list-none mt-25">
                            <li>
                                <a href="{{route('product.search').generateQueryString('brand', 0)}}">All Brands</a>
                            </li>
                            @foreach($brands as $brand)
                                <li>
                                    <a href="{{route('product.search').generateQueryString('brand', $brand->id)}}">{{$brand->name}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                {{--<div class="list-filter mt-43">
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
                </div>--}}
                <!--latest-products-->
                </div>
            </div>
            <div class="col-xl-9 col-lg-9">
                <div class="row align-items-center">

                    <div class="col-lg-5 col-md-6">

                        <div class="dropdown filter-box">
                            <button class="btn-filter" type="button" id="shortByDropDown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Short By : {{$sortText}} <i class="glyphicon glyphicon-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu filter-dropdown" aria-labelledby="shortByDropDown">
                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('order',0)}}">Default
                                    Sorting</a>
                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('order',1)}}">Sort
                                    by A - Z</a>

                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('order',2)}}">Sort
                                    by Z - A</a>

                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('order',3)}}">Sort
                                    Price Low - High</a>

                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('order',4)}}">Sort
                                    Price High - Low</a>
                            </div>
                        </div>

                        <div class="dropdown filter-box">
                            <button class="btn-filter" type="button" id="pagerDropdown" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                Show : {{request()->query('page_size') ? request()->query('page_size') : 15}} <i
                                    class="glyphicon glyphicon-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu filter-dropdown" aria-labelledby="pagerDropdown">

                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('page_size',15)}}">15</a>

                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('page_size',25)}}">25</a>
                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('page_size',40)}}">40</a>
                                <a class="dropdown-item"
                                   href="{{route('product.search').generateQueryString('page_size',60)}}">60</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-5 col-md-12 pt-3">
                        <div class="site-pagination pull-right">
                            <span class="pt-5">Showing {{$products->firstItem()}}–{{$products->lastItem()}} of {{$products->total()}} results</span>
                        </div>
                        <div class="product-view-system pull-right" role="tablist">
                            <ul class="nav nav-tabs">
                                <li><a class="active" data-toggle="tab" href="#grid-products"><img
                                            src="{{asset('user/assets/images/icons/icon-grid.png')}}" alt=""/></a></li>
                                <li><a data-toggle="tab" href="#list-products"><img
                                            src="{{asset('user/assets/images/icons/icon-list.png')}}" alt=""/></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="grid-products" class="tab-pane active">
                        <?php $itemCount = 1; ?>
                        <div class="row">

                            @foreach($products as $product)
                                @php
                                    $rating = \App\Models\Products::rating($product->id);
                                    $ratingCount = \App\Models\Products::ratingCount($product->id)
                                @endphp
                                <div
                                    class="col-xl-4 col-md-4 col-sm-6 product-item wow {{ ($itemCount % 2) != 0 ?'slideInDown': 'slideInUp'}}">
                                    <div class="product-single">
                                        <div class="product-title">
                                            <h4>
                                                <a href="{{route('product.search.show', $product->slug)}}">{{$product->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="product-thumb">
                                            <a href="{{route('product.search.show', $product->slug)}}"><img
                                                    class="product-item-listed-image"
                                                    src="{{asset($product->featured_image)}}" alt=""/></a>
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
                                                <div title="{{$rating > 0 ? $rating : 'No rating yet'}}"   id="dataReadonlyReview"
                                                      data-rating-stars="5"
                                                      data-rating-readonly="true"
                                                      data-rating-half="true"
                                                      data-rating-value="{{$rating}}"
                                                      data-rating-input="#dataReadonlyInput">
                                            </div>

                                        </div>
                                        </div>
                                        <div class="product-action">
                                            {{--<a href="javascript:void(0);" class="product-compare"><i
                                                    class="ti-control-shuffle"></i></a>--}}
                                            <form class="d-inline" id="cartForm_{{$product->id}}_list"
                                                  action="javascript:void(0)"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="product_price"
                                                       value="{{$product->new_price}}">
                                                <input type="hidden" value="1" name="quantity"/>
                                                <button type="submit" frm="#cartForm_{{$product->id}}_list"
                                                        class="btn btn-success add-to-cart dummy_cart_btn"
                                                        url="{{route('product.add_to_cart')}}"
                                                        id="cart_btn_{{$product->id}}_list">Add to Cart
                                                </button>
                                            </form>
                                            <form class="d-inline" action="javascript:void(0)" method="post">
                                                @csrf
                                                <a id="{{$product->id}}" href="javascript:void(0)" class="product-wishlist product-id"><i class="ti-heart"></i></a>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <?php $itemCount += 1; ?>

                            @endforeach
                        </div>
                    </div>
                    <div id="list-products" class="tab-pane">
                        @foreach($products as $product)
                            @php
                                $rating = \App\Models\Products::rating($product->id);
                                $ratingCount = \App\Models\Products::ratingCount($product->id)
                            @endphp

                            <div class="product-single wide-style">
                                <div class="row align-items-center">
                                    <div class="col-xl-3 col-lg-6 col-md-6">
                                        <div class="product-thumb">
                                            <a href="{{route('product.search.show', $product->slug)}}"><img
                                                    src="{{asset($product->featured_image)}}"
                                                    alt="{{$product->title}}"/></a>

                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-8 col-md-8 product-desc mt-md-50 sm-mt-50">
                                        <form class="d-inline" action="javascript:void(0)" method="post">
                                            @csrf
                                            <a id="{{$product->id}}" href="javascript:void(0)" class="product-wishlist product-id add-to-wishlist"><i class="ti-heart"></i></a>
                                        </form>
                                        <div class="product-title">
                                            <h4>
                                                <a href="{{route('product.search.show', $product->slug)}}">{{$product->title}}</a>
                                            </h4>
                                        </div>
                                        <div class="product-rating">
                                            <div title="{{$rating > 0 ? $rating : 'No rating yet'}}"   id="dataReadonlyReview"
                                                  data-rating-stars="5"
                                                  data-rating-readonly="true"
                                                  data-rating-half="true"
                                                  data-rating-value="{{$rating}}"
                                                  data-rating-input="#dataReadonlyInput">
                                            </div>
                                            {{--<span>({{$ratingCount}})</span>--}}
                                        </div>
                                        <div class="product-text">
                                            {{$product->short_description}}
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-4 col-md-4">
                                        <div class="product-action stuck text-left">
                                            <div class="product-price-rating">
                                                <div>
                                                    <del>{{$product->old_price}}</del>
                                                </div>
                                                <span>{{$product->new_price}}</span>
                                            </div>
                                            <form class="d-inline" id="cartForm_{{$product->id}}_grid" action="{{route('product.add_to_cart')}}"
                                                  method="post">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="product_price"
                                                       value="{{$product->new_price}}">
                                                <input type="hidden" value="1" name="quantity"/>
                                                <button type="submit" frm="#cartForm_{{$product->id}}_grid"
                                                        class="btn btn-success add-to-cart dummy_cart_btn"
                                                        url="{{route('product.add_to_cart')}}"
                                                        id="cart_btn_{{$product->id}}_grid">Add to Cart
                                                </button>
                                            </form>
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
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/1.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/2.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/3.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/4.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/5.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/6.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/7.jpg')}}" alt=""/>
                        </a>
                    </div>
                    <div class="brand-item">
                        <a href="#">
                            <img class="brand-static" src="{{asset('/user/assets/images/brands/8.jpg')}}" alt=""/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--brands-area end-->



<script type="text/javascript">
    $(document).ready(function () {
        var minPrice = "{{request()->query('min') ? request()->query('min') : 10}}";
        var maxPrice = "{{request()->query('max') ? request()->query('max') : 30000}}";

        $("#slider-range").slider({
            range: true,
            min: 10,
            max: 30000,
            values: [minPrice, maxPrice],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                $("#hdnMinPrice").val(ui.values[0]);
                $("#hdnMaxPrice").val(ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));

        $("#hdnMinPrice").val($("#slider-range").slider("values", 0));
        $("#hdnMaxPrice").val($("#slider-range").slider("values", 1));


    });



</script>
