
<!--product-details-area start-->
<div class="product-details-area mt-20">
    <div class="container-fluid">
        <div class="product-details">
            <div class="row">
                <div class="col-lg-1 col-md-2">
                    <ul class="nav nav-tabs products-nav-tabs">
                        <?php $tabCount = 0;?>
                        @foreach($galleries as $gallery)
                        <li><a class="{{$tabCount < 1 ? 'active': ''}}" data-toggle="tab" href="#product-{{$gallery->id}}"><img src="{{asset($gallery->thumb_url)}}" alt="{{$product->title}}" /></a></li>
                        <?php $tabCount+=2; ?>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="tab-content">
                        <?php $tabCount = 0;?>
                        @foreach($galleries as $gallery)
                        <div id="product-{{$gallery->id}}" class="tab-pane fade {{$tabCount < 1 ? 'in show active': ''}}">
                            <div class="product-details-thumb">
                                <a class="venobox" data-gall="myGallery" href="{{asset($gallery->image_url)}}"><i class="fa fa-search-plus"></i></a>
                                <img src="{{asset($gallery->image_url)}}" alt="" />
                            </div>
                        </div>
                        <?php $tabCount+=2; ?>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-7 mt-sm-50">
                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="product-details-desc">
                                <h2>{{$product->title}}</h2>
                                <div class="sort-description">
                                    {{$product->short_description}}
                                </div>
                                <div class="product-meta">
                                    <ul class="list-none">
                                        <li>SKU: 00012 <span>|</span></li>
                                        <li>Categories:

                                            @foreach($categoryList as $aCategory)
                                                <a href="{{route('product.index', $aCategory->category->slug)}}">{{$aCategory->category->category_name}}</a> &nbsp;
                                            @endforeach
                                            <span>|</span>
                                        </li>
                                        <li>Tags:
                                            <?php $tagList = App\Models\ProductTagMap::where('product_id', $product->id)->get(); ?>
                                            @foreach($tagList as $aTag)
                                            <a href="#">{{$aTag->tag->name}}</a>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                                <div class="social-icons style-5">
                                    <span>Share Link:</span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-rss"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5">
                            <div class="product-action stuck text-left">

                                <div class="product-price-rating">
                                    <div>
                                        <del>629.99</del>
                                    </div>
                                    <span>$495.00</span>
                                    <div class="pull-right">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </div>
                                <form action="{{route('product.add_to_cart')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{$product->id}}">
                                    <input type="hidden" name="product_price" value="{{$product->new_price}}">
                                    <div class="product-quantity mt-15">
                                    <label>Quatity:</label>
                                    <input type="number" value="1" name="quantity" />
                                    </div>
                                    <div class="add-to-get mt-50">
                                        <button type="submit" class="btn btn-success add-to-cart">Add to Cart</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="product-description">
                        {!!html_entity_decode($product->description)!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--product-details-area end-->

<!--products-area start-->
<div class="best-sellers mt-45">
    <div class="container-fluid fix">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Latest Products</h3>
                </div>
            </div>
        </div>
        <div class="row four-items cv-visible">
            <div class="col-lg-3">
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">iPATROL RILEY - WiFi Enabled Mobilized Home Monitoring Robot</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/1.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$395.00</span>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Iphone</a></small>
                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/2.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Macbook</a></small>
                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Aquaracer</a></small>
                        <h4><a href="#">DYMO LabelWriter 450 Turbo Thermal Label Printer</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/5.jpg" alt="" /></a>
                        <div class="downsale"><span>-</span>$35</div>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$395.00</span>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Iphone</a></small>
                        <h4><a href="#">Samsung CF591 Series Curved 27-Inch FHD Monitor</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/6.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Camera</a></small>
                        <h4><a href="#">Blue Yeti USB Microphone Blackout Edition</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/3.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$345.00</span>
                            <del>429.99</del>
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
                <div class="product-single">
                    <div class="product-title">
                        <small><a href="#">Macbook</a></small>
                        <h4><a href="#">iNewby 3.3mm Lens 720P HD WiFi Smart</a></h4>
                    </div>
                    <div class="product-thumb">
                        <a href="#"><img src="assets/images/products/shop/4.jpg" alt="" /></a>
                        <div class="product-quick-view">
                            <a href="#">quick view</a>
                        </div>
                    </div>
                    <div class="product-price-rating">
                        <div class="pull-left">
                            <span>$495.00</span>
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
        </div>
    </div>
</div>
<!--products-area end-->

@include('user.partials.widget.product_reviews');
