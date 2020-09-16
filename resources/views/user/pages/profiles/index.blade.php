@extends('user.layouts.user')

@section('content')
    <div class="container ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 pb-4">
                <x-inform-users></x-inform-users>

                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase">My Dashboard</h3>
                        @if($fillUp)
{{--                            <a class="text-white" href="{{route('dashboard')}}"><button class="btn btn-primary w-100 my-2">Apply For Seller</button></a>--}}
                            <form action="{{route('verify-email.store')}}" method="post">
                                @csrf
                                <button class="btn btn-primary w-100 my-2">Apply For Seller</button>
                            </form>
                        @else
                            <a class="text-white" href="{{route('profiles.edit')}}"><button class="btn btn-primary w-100 my-2">Fill Up Your Profile </button></a>
                        @endif

                    </div>
                    <div class="dashboard">
                        <div class="welcome-msg"><strong class=" text-black font-weight-bold">Hello, {{$user->name}}!</strong>
                            <p class="text-black-50">From your My Account Dashboard you have the ability to view a snapshot of your recent
                                account activity and update your account information. Select a link below to view or edit information.</p>
                        </div>
                        <div class="recent-orders">
                            <div class="d-flex justify-content-between">
                                <div class="text-black h6"><strong>Recent Orders</strong></div>
                                <a class="text-success" href="#">View All </a>
                            </div>
                            <div class="table-responsive">
                                <table class="table" id="my-orders-table">
                                    <thead>
                                    <tr class="first last">
                                        <th>Order #</th>
                                        <th>Date</th>
                                        <th>Ship to</th>
                                        <th><span class="nobr">Order Total</span></th>
                                        <th>Status</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="first odd">
                                        <td>500000002</td>
                                        <td>9/9/10</td>
                                        <td>John Doe</td>
                                        <td><span class="price">$5.00</span></td>
                                        <td><em>Pending</em></td>
                                        <td class="a-center last"><span class="nobr"> <a class="text-success" href="#">View Order</a> <span
                                                    class="separator">|</span> <a class="text-success" href="#">Reorder</a> </span></td>
                                    </tr>
                                    <tr class="last even">
                                        <td>500000001</td>
                                        <td>9/9/10</td>
                                        <td>John Doe</td>
                                        <td><span class="price">$1,397.99</span></td>
                                        <td><em>Pending</em></td>
                                        <td class="a-center last"><span class="nobr"> <a class="text-success" href="#">View Order</a> <span
                                                    class="separator">|</span> <a class="text-success" href="#">Reorder</a> </span></td>
                                    </tr>
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
                                        <a class="text-success" href="{{route('change-password.edit')}}">Change Password</a></p>
                                </div>
                                <div class="">
                                    <h5>Newsletters</h5>
                                    <a class="text-success" href="#">Edit</a>
                                    <p> You are currently not subscribed to any newsletter. </p>
                                </div>
                            </div>
                            <div class="">
                                <h4>Address Book</h4>
                                <div class="manage_add"><a class="text-success" href="{{route('shipping-address.create')}}">New Shipping Addresses</a></div>
                                <div class="d-flex justify-content-between flex-wrap">
                                    @foreach($shippingAddresses as $shippingAddress)
                                        <div class="">
                                            <h5>Primary Billing Address</h5>
                                            <address>
                                                {{$shippingAddress->name}}<br>
                                                {{$shippingAddress->email}}<br>
                                                {{$shippingAddress->city}}<br>
                                                {{$shippingAddress->house}},{{$shippingAddress->road}},{{$shippingAddress->state}}<br>
                                                {{$shippingAddress->country}}<br>
                                                Phone: {{$shippingAddress->phone}}<br>
                                                Describe Address: {{$shippingAddress->describe_address}}<br>
                                                <a class="text-success" href="{{route('shipping-address.edit',$shippingAddress->id)}}">Edit Address</a>
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
@endsection
