@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            @php
                $maleSlider = \App\models\MainSlider::with('category')->where('category_id',14)->get();
            @endphp

            @include('user.partials.widget.category_slider', ['sliders' => $maleSlider])

        </div>
    </div>

    <div class="row">
        <?php
        $maleProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 14)
            ->take(50)
            ->get();

        $maleProductCategory = App\models\ProductCategory::where('id', 14)->firstOrFail();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $maleProducts, 'productCategory' =>$maleProductCategory ])
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            @php
                $femaleSlider = \App\models\MainSlider::with('category')->where('category_id',15)->get();
            @endphp

            @include('user.partials.widget.category_slider', ['sliders' => $femaleSlider])
        </div>
    </div>

    <div class="row">
        <?php
        $feMaleProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 15)
            ->take(50)
            ->get();

        $femaleProductCategory = App\models\ProductCategory::where('id', 15)->firstOrFail();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $feMaleProducts, 'productCategory' =>$femaleProductCategory ])
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            @php
                $kidsSlider = \App\models\MainSlider::with('category')->where('category_id',16)->get();
            @endphp

            @include('user.partials.widget.category_slider', ['sliders' => $kidsSlider])
        </div>
    </div>

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

        $kidsProductCategory = App\models\ProductCategory::where('id', 15)->firstOrFail();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $kidsProducts, 'productCategory' =>$kidsProductCategory ])
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            @php
                $otherslider = \App\models\MainSlider::with('category')->where('category_id',17)->get();
            @endphp

            @include('user.partials.widget.category_slider', ['sliders' => $otherslider])
        </div>
    </div>

    <div class="row">
        <?php
        $othersProducts = Illuminate\Support\Facades\DB::table('products')
            ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
            ->select('products.*')
            ->where('product_category_maps.is_published', 1)
            ->where('products.show_on_home', 1)
            ->where('product_category_maps.cat_id', 16)
            ->take(50)
            ->get();

        $othersProductCategory = App\models\ProductCategory::where('id', 15)->firstOrFail();
        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $othersProducts, 'productCategory' =>$othersProductCategory ])
    </div>
@endsection
