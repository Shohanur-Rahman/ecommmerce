@extends('user.layouts.layout-third')

@section('content')

    <div class="col-12 justify-content-center mb-5">
        <div class="billing-form">
            <h4>Shipping Address</h4>
            <form action="{{route('new-shipping-address.store')}}" method="post" data-parsley-validate>
                @csrf
                <div class="row">
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
                </div>

                <div class="row">

                    <div class="col-lg-9">
                        <button class="btn btn-success text-white btn-common width-180">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>

@endsection
