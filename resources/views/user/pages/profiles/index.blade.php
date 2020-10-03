@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-12 col-xs-12 pb-4">
                <x-inform-users></x-inform-users>

                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase">My Dashboard</h3>
                        @if($user->user_type == 'Super-admin' or $user->user_type == 'Admin')
                            <a class="text-white" href="{{route('dashboard')}}">
                                <button class="btn btn-primary w-100 my-2">Go to Seller Dashboard</button>
                            </a>
                        @else
                            {{--@if($fillUp)
                                @if($user->applyVendor)
                                    @if($user->applyVendor->is_approve == 1)
                                        <a class="text-white" href="{{route('dashboard')}}"><button class="btn btn-primary w-100 my-2">Go to Seller Dashboard</button></a>
                                    @else
                                        <a class="text-white" href="javascript:"><button class="btn btn-secondary disabled w-100 my-2">Your Request is Pending</button></a>
                                    @endif
                                @else
                                    <form action="{{route('verify-email.store')}}" method="post">
                                        @csrf
                                        <button class="btn btn-primary w-100 my-2">Apply For Seller</button>
                                    </form>
                                @endif
                            @else
                                <a class="text-white" href="{{route('profiles.edit')}}"><button class="btn btn-primary w-100 my-2">Fill Up Your Profile </button></a>
                            @endif--}}
                        @endif

                    </div>
                    <div class="dashboard">
                        <div class="welcome-msg"><strong class=" text-black font-weight-bold">Hello, {{$user->name}}
                                !</strong>
                            <p class="text-black-50">From your My Account Dashboard you have the ability to view a
                                snapshot of your recent
                                account activity and update your account information. Select a link below to view or
                                edit information.</p>
                        </div>
                        <div class="recent-orders">
                            <div class="d-flex justify-content-between">
                                <div class="text-black h6"><strong>Recent Orders</strong></div>
                                <a class="text-success" href="{{route('orders-details.index')}}">View All </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="my-orders-table">
                                    <thead>
                                    <tr class="first last">
                                        <th>Order ID#</th>
                                        <th>Date</th>
                                        <th>Ship to</th>
                                        <th><span class="nobr">Order Total</span></th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders->take(3) as $order)
                                        <tr class="first odd">
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->created_at->format('d m Y')}}</td>
                                            <td>{{$order->shippingAddress->name}}</td>
                                            <td><span class="price">${{$order->total_amount}}</span></td>
                                            <td><em>{{$order->status}}</em></td>
                                            <td class="a-center last">
                                                    <span class="nobr">
                                                        <a class="text-success"
                                                           href="{{route('orders-details.show',$order->id)}}">View Order</a>
                                                    </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card border-0">
                            <div class="">
                                <h3>Account Information</h3>
                            </div>
                            <div class="d-flex justify-content-between flex-wrap">
                                <div class="">
                                    <h5>Contact Information</h5>
                                    <a class="text-success" href="{{route('profiles.edit')}}">Edit</a>
                                    <p> {{$user->name}}<br>
                                        {{$user->email}}!<br>
                                        <a class="text-success" href="{{route('change-password.edit')}}">Change
                                            Password</a></p>
                                </div>
                                <div class="">
                                    <h5>Newsletters</h5>
                                    <a class="text-success" href="#">Edit</a>
                                    <p> You are currently not subscribed to any newsletter. </p>
                                </div>
                            </div>
                            <div class="">
                                <h4>Address Book</h4>
                                <div class="manage_add"><a class="text-success"
                                                           href="{{route('shipping-address.create')}}">New Shipping
                                        Addresses</a></div>
                                <div class="d-flex justify-content-between flex-wrap">
                                    @foreach($shippingAddresses as $shippingAddress)
                                        <div class="">
                                            <h5>Primary Billing Address</h5>
                                            <address>
                                                {{$shippingAddress->title}}<br>
                                                {{$shippingAddress->name}}<br>
                                                {{$shippingAddress->email}}<br>
                                                {{$shippingAddress->city}}<br>
                                                {{$shippingAddress->house}}
                                                ,{{$shippingAddress->road}},{{$shippingAddress->state}}<br>
                                                {{$shippingAddress->country}}<br>
                                                Phone: {{$shippingAddress->phone}}<br>
                                                Describe Address: {{$shippingAddress->describe_address}}<br>
                                                <a class="text-success"
                                                   href="{{route('shipping-address.edit',$shippingAddress->id)}}">Edit
                                                    Address</a>
                                            </address>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
