@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    @php
        $allSliders = \App\models\MainSlider::all();

        $allProductCategory = \App\Models\ProductCategory::all();

    @endphp

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 wow fadeIn">

                @php
                    $maleSlider = $allSliders->where('category_id',14)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $maleSlider])

            </div>
        </div>
    @endif

    <div class="row male-products">
        <?php
        $maleProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 14)
            ->take(50)
            ->get();

            $maleProductCategory = $allProductCategory->where('category_name', 'Male')->first();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $maleProducts, 'productCategory' =>$maleProductCategory ])
    </div>

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $femaleSlider = $allSliders->where('category_id',15)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $femaleSlider])
            </div>
        </div>
    @endif

    <div class="row female-products">
        <?php
        $feMaleProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 15)
            ->take(50)
            ->get();

        $femaleProductCategory = $allProductCategory->where('category_name', 'Female')->first();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $feMaleProducts, 'productCategory' =>$femaleProductCategory ])
    </div>

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $kidsSlider = $allSliders->where('category_id',16)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $kidsSlider])
            </div>
        </div>

    @endif

    <div class="row">
        <?php
        $kidsProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 16)
            ->take(50)
            ->get();

        $kidsProductCategory = $allProductCategory->where('category_name', 'Kids')->first();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $kidsProducts, 'productCategory' =>$kidsProductCategory ])
    </div>


    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $otherslider = $allSliders->where('category_id',17)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $otherslider])
            </div>
        </div>
    @endif

    <div class="row">
        <?php
        $othersProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 17)
            ->take(50)
            ->get();

        $othersProductCategory = $allProductCategory->where('category_name', 'Others')->first();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $othersProducts, 'productCategory' =>$othersProductCategory ])
    </div>


@endsection

