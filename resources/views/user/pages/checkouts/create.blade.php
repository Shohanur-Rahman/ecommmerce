@extends('user.layouts.layout-third')
@section('title', 'My Cart')
@section('content')




    <!--shopping-cart area-->
    <form action="{{route('payments.create')}}" method="post" data-parsley-validate>
        @csrf

        <div class="mm-page mm-slideout mb-5" id="mm-0">
            <div class="shopping-cart-steps">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cart-steps">
                                <ul class="clearfix">
                                    <li class="">
                                        <div class="inner">
                                            <span class="step">01</span> <span class="inner-step">Shopping Cart</span>
                                        </div>
                                    </li>
                                    <li class="active">
                                        <div class="inner">
                                            <span class="step">02</span> <span class="inner-step">Checkout </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="inner">
                                            <span class="step">03</span> <span
                                                class="inner-step">Order Completed </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkout-area mt-15">
                <div class="container">
                    <div class="row mt-10">
                        <div class="col-lg-8">
                            <div class="billing-form">
                                <h4>Billing Address</h4>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>USERNAME *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" placeholder="Enter your name" name="name"
                                               value="{{$user->name ?? old('name')}}" maxlength="100" required
                                               data-parsley-required-message="Name filed is required">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>EMAIL ADDRESS *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="email" name="email" value="{{$user->email ?? old('email')}}"
                                               placeholder="Enter your email address" maxlength="100" required
                                               data-parsley-required-message="Email filed is required"/>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>PHONE *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="phone"
                                               value="{{$user->userProfile->phone ?? old('phone')}}"
                                               placeholder="Enter your phone number" maxlength="15" required
                                               data-parsley-required-message="Phone filed is required">
                                    </div>
                                </div>

                                <div class="row">
                                    @include('user.pages.common.countries.edit',['presentCountry'=>$user->userProfile,'col3'=>'col-lg-3 text-uppercase','col9'=>'col-lg-9'])
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>ADDRESS *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="state"
                                               value="{{$user->userProfile->state ?? old('state')}}"
                                               placeholder="Street Address" maxlength="50" required
                                               data-parsley-required-message="Address filed is required">
                                        <input type="text" name="house"
                                               value="{{$user->userProfile->house ?? old('house')}}"
                                               placeholder="Apartment (optinal)"
                                               class="mt-sm-30">
                                        <input type="text" name="road"
                                               value="{{$user->userProfile->road ?? old('road')}}"
                                               placeholder="Road (optinal)"
                                               class="mt-sm-30">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>TOWN / CITY *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="text" name="city"
                                               value="{{$user->userProfile->city ?? old('city')}}" class="mt-sm-30"
                                               maxlength="50" required
                                               data-parsley-required-message="City filed is required">

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3">
                                        <label>POSTCODE / ZIP *</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <input type="number" name="postcode"
                                               value="{{$user->userProfile->postcode ?? old('postcode')}}"
                                               class="mt-sm-30" maxlength="50" required
                                               data-parsley-required-message="Postcode filed is required">
                                    </div>
                                </div>
                            </div>


                            <div class=" mt-5">
                                <h4>Shipping Address</h4>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-4 align-items-center">
                                            <label>Choose Shipping Address *</label>
                                        </div>
                                        <div class="col-lg-8">
                                            <select name="shipping_id" class="form-control" required
                                                    data-parsley-required-message="please select a shipping address or create new shipping address">
                                                <option value="">Select Shipping Address</option>
                                                @foreach($user->shippingAddresses as $shippingAddress)
                                                    @php $id = Session::has('shipping_id') @endphp
                                                    <option
                                                        value="{{$shippingAddress->id}}" {{( $id|| $id ==$shippingAddress->id) ? 'selected' : '' }}>
                                                        {{$shippingAddress->title}}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>

                                    </div>
                                    <div class="d-flex justify-content-between align-items-lg-baseline">
                                        {{--  <div class="place-order text-center ">
                                              <a href="#" class="btn-common width-180">Submit</a>
                                          </div>--}}
                                        <a href="{{route('new-shipping-address.create')}}" class="h6 text-success">New
                                            Shipping Address</a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-4">
                            <div class="order-details mt-0">
                                <h4>Your Order</h4>
                                <div class="order-details-inner">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>PRODUCT</th>
                                            <th>TOTAL</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php $totalPrice = 0 ;$shippingCharge = 0;@endphp
                                        @foreach($cartItems as $cartItem)
                                            <tr>
                                                <td>{{Str::limit($cartItem->product->title,20)}}</td>
                                                <td>{{$cartItem->product->new_price}} x {{$cartItem->quantity}}</td>
                                            </tr>
                                            @php
                                                $totalPrice = ($totalPrice + ($cartItem->product->new_price * $cartItem->quantity));
                                                $shippingCharge += $cartItem->product->shipping_charge;
                                            @endphp
                                        @endforeach

                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td><strong>{{$totalPrice}}</strong></td>
                                        </tr>
                                        <tr>
                                            <td>Shipping and Handling</td>
                                            <td>@if($shippingCharge <= 0)  Free Shipping : @else
                                                    <b>${{$shippingCharge}}</b> @endif</td>
                                        </tr>
                                        <tr>
                                            <td>ORDER TOTAL</td>
                                            <td><strong>${{$totalPrice + $shippingCharge}}</strong></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <span id="error-message"></span>
                                </div>
                                <div class="place-order text-center pb-3">
                                    <button id="submitForm" class="btn paypal-btn"></button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </form>

    <script>
       /* $('#submitForm').click(function () {
            if ($('#Paypal').is(':checked') || $('#Cod').is(':checked')) {
                return true;
            } else {
                $('#error-message').html('<font class="text-danger">Please Select a Payment Method</font>');
                return false;
            }

        });*/
    </script>
@endsection
