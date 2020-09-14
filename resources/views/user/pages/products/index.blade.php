@extends('user.layouts.user')
@section('title', $categoryDetails->category_name)
@section('content')

    @include('user.pages.second.products.index', $products);

@endsection
