@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')

    @php
        $allSliders = \App\models\MainSlider::all();

        $allProductCategory = \App\Models\ProductCategory::all();
    $maleProductCategory = $allProductCategory->where('category_name', 'Male')->first();
    $femaleProductCategory = $allProductCategory->where('category_name', 'Female')->first();
    $kidsProductCategory = $allProductCategory->where('category_name', 'Kids')->first();
    $othersProductCategory = $allProductCategory->where('category_name', 'Others')->first();

    @endphp

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 wow fadeIn">

                @php
                    $maleSlider = \App\models\MainSlider::with('category')->where('category_id',$maleProductCategory->id)->get();
                @endphp

                @include('user.partials.widget.category_slider', ['sliders' => $maleSlider])

            </div>
        </div>
    @endif

    <div class="row male-products row-eq-height">
        <?php




        if ($maleProductCategory) {

            $maleProducts = Illuminate\Support\Facades\DB::table('products')
                ->join('product_category_maps', 'products.id', '=', 'product_category_maps.product_id')
                ->select('products.*')
                ->where('product_category_maps.is_published', 1)
                ->where('products.show_on_home', 1)
                ->where('product_category_maps.cat_id', $maleProductCategory->id)
                ->take(50)
                ->get();
        }



        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $maleProducts, 'productCategory' =>$maleProductCategory ])


    </div>

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $femaleSlider = \App\models\MainSlider::with('category')->where('category_id',$femaleProductCategory->id)->get();
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
            ->where('product_category_maps.cat_id', $femaleProductCategory->id)
            ->take(50)
            ->get();


        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $feMaleProducts, 'productCategory' =>$femaleProductCategory ])
    </div>

    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $kidsSlider = \App\models\MainSlider::with('category')->where('category_id',$kidsProductCategory->id)->get();
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
            ->where('product_category_maps.cat_id', $kidsProductCategory->id)
            ->take(50)
            ->get();


        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $kidsProducts, 'productCategory' =>$kidsProductCategory ])
    </div>


    @if(count($allSliders) > 0 )
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                @php
                    $otherslider = \App\models\MainSlider::with('category')->where('category_id',$othersProductCategory->id)->get();
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
            ->where('product_category_maps.cat_id', $othersProductCategory->id)
            ->take(50)
            ->get();


        ?>

        @include('user.partials.widget.product_items', ['categoryProducts' => $othersProducts, 'productCategory' =>$othersProductCategory ])
    </div>


@endsection

