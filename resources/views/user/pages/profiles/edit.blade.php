@extends('user.layouts.user')

@section('content')
    <div class="container ">

        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')

            <div class="col-md-9">

                @include('user.pages.profiles.partial.details')

                <div class="card border-0">
                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Update User Profile</h3>
                    </div>
                    <form class="row py-3" action="{{route('profiles.update',$user->id)}}" method="post" data-parsley-validate>
                        @method('PATCH')
                        @csrf
                        <div class="form-group col-12">
                            <label class="float-left" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{$user->name ?? old('name')}}"
                                   placeholder="Enter your name" required="required" data-parsley-error-message="Enter your name">

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="email">Secondary Email</label>
                            <input class="form-control" type="text" name="secondary_email" id="email" value="{{$user->secondary ?? old('secondary_email')}}"
                                   placeholder="Enter your Secondary Email" required="required" data-parsley-error-message="Enter your Secondary Email">

                            @error('secondary_email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{$user->phone ?? old('phone')}}"
                                   placeholder="Enter your Secondary Phone" required="required" data-parsley-error-message="Enter your Secondary Phone">
                        </div>


                        <div class="form-group col-6">
                            <label class="float-left" for="house">House</label>
                            <input class="form-control" type="text" name="house" id="email" value="{{$user->house ?? old('house')}}"
                                   placeholder="Enter your House" data-parsley-error-message="Enter your House">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="road">Road</label>
                            <input class="form-control" type="text" name="road" id="road" value="{{$user->road ?? old('road')}}"
                                   placeholder="Enter your Road" required="required" data-parsley-error-message="Enter your Road">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">PostCode</label>
                            <input class="form-control" type="number" name="postcode" id="postcode" value="{{$user->postcode ?? old('postcode')}}"
                                   placeholder="Enter your PostCode" required="required" data-parsley-error-message="Enter your PostCode">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{$user->state ?? old('state')}}"
                                   placeholder="Enter your State" required="required" data-parsley-error-message="Enter your State">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{$user->city ?? old('city')}}"
                                   placeholder="Enter your City" required="required" data-parsley-error-message="Enter your City">
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="country">Country</label>
                            <input class="form-control" type="text" name="country" id="country" value="{{$user->country ?? old('country')}}"
                                   placeholder="Enter your Country" required="required" data-parsley-error-message="Enter your Country">
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols="" rows="6">{{$user->describe_address ?? old('describe_address')}}</textarea>
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
