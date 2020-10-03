
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
@include('user.partials.widget.product_reviews')
