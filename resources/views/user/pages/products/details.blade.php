@extends('user.layouts.user')
@section('title', $product->title)
@section('content')

    @include('user.pages.second.details', $product);

@endsection
