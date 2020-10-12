@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 pb-4">
                <x-inform-users></x-inform-users>
                @include('user.pages.profiles.partial.details')

                <div class="card px-3 py-3 mt-3">
                    <div class="row">
                        @foreach($shippingAddresses as $shippingAddress)
                            <div class="col-md-4 col-xl-3 col-sm-6 address-height">
                                <h5>{!!html_entity_decode($shippingAddress->title ? $shippingAddress->title . '' : '')!!}</h5>
                                <address>
                                    {{--{!!html_entity_decode($shippingAddress->name ? $shippingAddress->name . '<br/>' : '')!!}
                                    {!!html_entity_decode($shippingAddress->email ? $shippingAddress->email . '<br/>' : '')!!}--}}
                                    {!!html_entity_decode($shippingAddress->city ? $shippingAddress->city . '<br/>' : '')!!}
                                    {!!html_entity_decode($shippingAddress->house ? $shippingAddress->house . ',' : '')!!}
                                    {!!html_entity_decode($shippingAddress->road ? $shippingAddress->road . ',' : '')!!}
                                    {!!html_entity_decode($shippingAddress->state ? $shippingAddress->state . '<br/>' : '')!!}
                                    {!!html_entity_decode($shippingAddress->country ? $shippingAddress->country . '<br/>' : '')!!}
                                    {!!html_entity_decode($shippingAddress->phone ? 'Phone: ' . $shippingAddress->phone . '<br/>' : '')!!}
                                    {!!html_entity_decode($shippingAddress->line1 ? $shippingAddress->line1 . ', ' : '')!!}
                                    {!!html_entity_decode($shippingAddress->line2 ? $shippingAddress->line2 . ',' : '')!!}
                                    {!!html_entity_decode($shippingAddress->postcode ? $shippingAddress->postcode . ',' : '')!!}
                                    {!!html_entity_decode($shippingAddress->describe_address ? 'Describe Address: ' . $shippingAddress->describe_address . '<br/>' : '')!!}

                                    <a class="text-success"
                                       href="{{route('shipping-address.edit',$shippingAddress->id)}}">Edit
                                        Address</a>
                                </address>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card border-0 pt-5">
                    <div class="bg-white">
                        <h3 class="text-uppercase font-weight-bold h5">Create New Shipping Address</h3>
                    </div>
                    <form class="py-3 row" action="{{route('shipping-address.store')}}" method="post"
                          data-parsley-validate>
                        @csrf
                        <input type="hidden" name="ship_form" value="profile" readonly="readonly">

                        <div class="form-group col-6">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control phone-formate" type="text" name="phone" id="phone"
                                   value="{{$authUser->userProfile->phone}}"
                                   placeholder="(123) 345-3455" required="required"
                                   data-parsley-error-message="Enter Phone Number">
                        </div>


                        <div class="form-group col-6">
                            <label class="float-left" for="line1">Line 1</label>
                            <input class="form-control" type="text" name="line1" id="line1" value="{{old('line1')}}"
                                   placeholder="Address line 1" data-parsley-error-message="Enter address line 1"
                                   required>
                        </div>
                        <div class="form-group col-6">
                            <label class="float-left" for="line2">Line 2</label>
                            <input class="form-control" type="text" name="line2" id="line2" value="{{old('line2')}}"
                                   placeholder="Address line 2" data-parsley-error-message="Enter address line 2"
                                   required>
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">zipcode</label>
                            <input class="form-control zipcode" type="text" name="postcode" id="postcode"
                                   value="{{old('postcode')}}"
                                   placeholder="Enter PostCode Number" required="required"
                                   data-parsley-error-message="Enter PostCode Number">
                        </div>


                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>
                            <textarea class="form-control" name="describe_address" id="full_address" cols=""
                                      rows="2">{{old('describe_address')}}</textarea>
                            <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                        </div>

                        <div class="form-group col-12">
                            <button class="btn btn-primary" type="submit"> Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
