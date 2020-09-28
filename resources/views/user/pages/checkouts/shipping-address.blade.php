@extends('user.layouts.user')

@section('content')
    <div class="container ">
        <div class="row mt-3 ">
            <div class="col-12 justify-content-center mb-5">
                <div class="billing-form">
                    <h4>Billing Address</h4>
                    <form action="{{route('new-shipping-address.store')}}" method="post" data-parsley-validate>
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <label>Title *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" placeholder="Enter your shipping title" name="title" value="{{old('title')}}" maxlength="100" required
                                       data-parsley-required-message="Shipping title filed is required" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>USERNAME *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" placeholder="Enter your name" name="name" value="{{old('name')}}" maxlength="100" required
                                       data-parsley-required-message="Username filed is required" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>EMAIL ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="email" name="email" value="{{old('email')}}" maxlength="150" required
                                       data-parsley-required-message="Email filed is required" placeholder="Enter your email address" />
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>PHONE *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" name="phone" value="{{ old('phone')}}"
                                       placeholder="Enter your phone number" maxlength="100" required data-parsley-required-message="Phone filed is required">
                            </div>
                        </div>

                        <div class="row">
                           @include('user.pages.common.countries.create',['col3'=>'col-lg-3 text-uppercase','col9'=>'col-lg-9'])

                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>ADDRESS *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="state" value="{{old('state')}}" placeholder="Street Address" maxlength="50" required
                                       data-parsley-required-message="Address filed is required">
                                <input type="text" name="house" value="{{old('house')}}" placeholder="Apartment (optinal)"
                                       class="mt-sm-30">
                                <input type="text" name="road" value="{{old('road')}}" placeholder="Road (optinal)"
                                       class="mt-sm-30">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>TOWN / CITY *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="text" name="city" value="{{old('city')}}" class="mt-sm-30 " required
                                       data-parsley-required-message="Town/City filed is required">

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <label>POSTCODE / ZIP *</label>
                            </div>
                            <div class="col-lg-9">
                                <input type="number" name="postcode" value="{{old('postcode')}}" class="mt-sm-30" required
                                       data-parsley-required-message="Postcode filed is required">
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-lg-9">
                                <button class="btn btn-success text-white btn-common width-180">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
@endsection
