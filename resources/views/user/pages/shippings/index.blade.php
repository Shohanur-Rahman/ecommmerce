@extends('user.layouts.layout-third')

@section('content')
    <div class="container-fluid ">
        <div class="row mt-3 ">

            @include('user.pages.profiles.partial.sidebar')
            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3 pb-4">

                @include('user.pages.profiles.partial.details')

                <div class="card">

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
                                   value="{{old('phone')}}"
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
                            <input class="form-control" type="number" name="postcode" id="postcode"
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


    <script>
        $(document).ready(function () {
            $('.phone-formate')

                .on('keypress', function (e) {
                    var key = e.charCode || e.keyCode || 0;

                    var phone = $(this);
                    if (phone.val().length === 0) {
                        phone.val(phone.val() + '(');
                    }

                    // Auto-format- do not expose the mask as the user begins to type
                    if (key !== 8 && key !== 9) {
                        if (phone.val().length === 4) {
                            phone.val(phone.val() + ')');
                        }
                        if (phone.val().length === 5) {
                            phone.val(phone.val() + ' ');
                        }
                        if (phone.val().length === 9) {
                            phone.val(phone.val() + '-');
                        }
                        if (phone.val().length >= 14) {
                            phone.val(phone.val().slice(0, 13));
                        }
                    }

                    return (key == 8 ||
                        key == 9 ||
                        key == 46 ||
                        (key >= 48 && key <= 57)
                    );

                })
                .on('focus', function () {
                    phone = $(this);

                    if (phone.val().length === 0) {
                        phone.val('(');
                    } else {
                        var val = phone.val();
                        phone.val('').val(val); // Ensure cursor remains at the end
                    }
                })

                .on('blur', function () {
                    $phone = $(this);

                    if ($phone.val() === '(') {
                        $phone.val('');
                    }
                });
        })
    </script>

@endsection
