@extends('user.layouts.user')

@section('content')
    <div class="container ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 pb-4">
                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Update Shipping Address</h3>
                    </div>
                    <form class="py-3 row" action="{{route('shipping-address.update',$shippingAddress->id)}}" method="post" data-parsley-validate>
                        @method('PATCH')
                        @csrf

                        <div class="form-group col-12">
                            <label class="float-left" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{$shippingAddress->title ?? old('title')}}"
                                   placeholder="Enter your title" required="required" data-parsley-error-message="Enter your title">

                        </div>


                        <div class="form-group col-12">
                            <label class="float-left" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$shippingAddress->name ?? old('name')}}"
                                   placeholder="Enter your name" required="required" data-parsley-error-message="Enter your name">

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="email">Email</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{$shippingAddress->email ?? old('email')}}"
                                   placeholder="Enter Email Address" required="required" data-parsley-error-message="Enter Email Address">

                            @error('email')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control" type="number" name="phone" id="phone" value="{{$shippingAddress->phone ?? old('phone')}}"
                                   placeholder="Enter your Secondary Phone" required="required" data-parsley-error-message="Enter Phone Number">
                        </div>


                        <div class="form-group col-6">
                            <label class="float-left" for="house">House</label>
                            <input class="form-control" type="text" name="house" id="house" value="{{$shippingAddress->house ?? old('house')}}"
                                   placeholder="Enter House Number" data-parsley-error-message="Enter House Number">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="road">Road</label>
                            <input class="form-control" type="text" name="road" id="road" value="{{$shippingAddress->road ??  old('road')}}"
                                   placeholder="Enter Road Number" required="required" data-parsley-error-message="Enter Road Number">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">PostCode</label>
                            <input class="form-control" type="number" name="postcode" id="postcode" value="{{$shippingAddress->postcode ?? old('postcode')}}"
                                   placeholder="Enter PostCode Number" required="required" data-parsley-error-message="Enter PostCode Number">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{$shippingAddress->state ?? old('state')}}"
                                   placeholder="Enter State Name" required="required" data-parsley-error-message="Enter State Name">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{$shippingAddress->city ?? old('city')}}"
                                   placeholder="Enter City Name" required="required" data-parsley-error-message="Enter City Name">
                        </div>

                        <div class="form-group col-12">
                            @include('user.pages.common.countries.edit',['presentCountry'=>$shippingAddress])

                        </div>



                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols="" rows="6">{{$shippingAddress->describe_address ?? old('describe_address')}}</textarea>
                            <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                        </div>

                        <div class="form-group col-12">
                            <button class="btn btn-primary " type="submit"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
