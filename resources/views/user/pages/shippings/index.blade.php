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

                        <div class="form-group col-12">
                            <label class="float-left" for="title">Title</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{old('title')}}"
                                   placeholder="Enter your title" required="required"
                                   data-parsley-error-message="Enter your title">

                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{old('name')}}"
                                   placeholder="Enter your name" required="required"
                                   data-parsley-error-message="Enter your name">

                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="email">Email</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{old('email')}}"
                                   placeholder="Enter Email Address" required="required"
                                   data-parsley-error-message="Enter Email Address">

                            @error('email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control phone-formate" type="text" name="phone" id="phone" value="{{old('phone')}}"
                                   placeholder="Enter your Secondary Phone" required="required"
                                   data-parsley-error-message="Enter Phone Number">
                        </div>


                        <div class="form-group col-6">
                            <label class="float-left" for="house">House</label>
                            <input class="form-control" type="text" name="house" id="house" value="{{old('house')}}"
                                   placeholder="Enter House Number" data-parsley-error-message="Enter House Number">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="road">Road</label>
                            <input class="form-control" type="text" name="road" id="road" value="{{ old('road')}}"
                                   placeholder="Enter Road Number" required="required"
                                   data-parsley-error-message="Enter Road Number">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">PostCode</label>
                            <input class="form-control" type="number" name="postcode" id="postcode"
                                   value="{{old('postcode')}}"
                                   placeholder="Enter PostCode Number" required="required"
                                   data-parsley-error-message="Enter PostCode Number">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{old('state')}}"
                                   placeholder="Enter State Name" required="required"
                                   data-parsley-error-message="Enter State Name">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{old('city')}}"
                                   placeholder="Enter City Name" required="required"
                                   data-parsley-error-message="Enter City Name">
                        </div>


                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols=""
                                      rows="6">{{old('describe_address')}}</textarea>
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
