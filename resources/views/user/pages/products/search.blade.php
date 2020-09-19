@extends('user.layouts.user')
@section('title', 'Search results for '.request()->query('s'))
@section('content')

    @include('user.pages.second.products.search');

@endsection
