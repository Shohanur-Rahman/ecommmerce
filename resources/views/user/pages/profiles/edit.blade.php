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
                    <form class="row py-3" action="{{route('profiles.update')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @method('PATCH')
                        @csrf
                        <div class="form-group col-12">
                            <label class="float-left" for="name">Username</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{Auth::user()->name ?? old('name')}}"
                                   placeholder="Enter your name" required="required" data-parsley-error-message="Enter your name">

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="email">Secondary Email</label>
                            <input class="form-control" type="text" name="secondary_email" id="email" value="{{$userProfile->secondary_email ?? old('secondary_email')}}"
                                   placeholder="Enter your Secondary Email" required="required" data-parsley-error-message="Enter your Secondary Email">

                            @error('secondary_email')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="dob">Date Of Birth</label>
                            <input class="form-control" type="date" name="dob" id="dob" value="{{$userProfile->dob ?? old('dob')}}"
                                   placeholder="Enter your Date Of Birth" required="required" data-parsley-required-message="Enter Your Date Of Birth">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="nid">Enter Your NID Number && NID Photo</label>
                            <input class="form-control" type="number" name="nid" id="nid" value="{{$userProfile->nid ?? old('nid')}}"
                                   placeholder="Enter Your NID Number" required="required" data-parsley-required-message="Enter Your NID Number">
                        </div>

                        <div class="form-group col-6">


                            <label for="nidImg" class="upload-preview">
                                @if($userProfile->nid_image)
                                    <img src="{{asset($userProfile->nid_image)}}" id="PreviewImage" style="width: 80px;height: 80px"/>
                                @else
                                    <img src="{{asset('images/noimage.PNG')}}" id="PreviewImage" style="width: 80px;height: 80px"/>
                                @endif

                            </label>

                            <input type="file"  name="nid_image" class="hdn-uploder d-none" id="nidImg" {{$userProfile->nid_image ? '' : 'required'}} accept="image/*" data-parsley-error-message="Upload NID image"/>

                        </div>

                        <div class="form-group col-12">
                            <label class="float-left" for="phone">Phone</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{$userProfile->phone ?? old('phone')}}"
                                   placeholder="Enter your Secondary Phone" required="required" data-parsley-error-message="Enter your Secondary Phone">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="house">House</label>
                            <input class="form-control" type="text" name="house" id="email" value="{{$userProfile->house ?? old('house')}}"
                                   placeholder="Enter your House" data-parsley-error-message="Enter your House">
                        </div>

                        <div class="form-group col-6">
                            <label class="float-left" for="road">Road</label>
                            <input class="form-control" type="text" name="road" id="road" value="{{$userProfile->road ?? old('road')}}"
                                   placeholder="Enter your Road" required="required" data-parsley-error-message="Enter your Road">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="postcode">PostCode</label>
                            <input class="form-control" type="number" name="postcode" id="postcode" value="{{$userProfile->postcode ?? old('postcode')}}"
                                   placeholder="Enter your PostCode" required="required" data-parsley-error-message="Enter your PostCode">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="state">State</label>
                            <input class="form-control" type="text" name="state" id="state" value="{{$userProfile->state ?? old('state')}}"
                                   placeholder="Enter your State" required="required" data-parsley-error-message="Enter your State">
                        </div>

                        <div class="form-group col-4">
                            <label class="float-left" for="city">City</label>
                            <input class="form-control" type="text" name="city" id="city" value="{{$userProfile->city ?? old('city')}}"
                                   placeholder="Enter your City" required="required" data-parsley-error-message="Enter your City">
                        </div>



                        <div class="form-group col-12">
                           @include('user.pages.common.countries.edit',['presentCountry'=>$userProfile])
                        </div>




                        <div class="form-group col-12">
                            <label class="float-left" for="full_address">Full Address</label>

                            <textarea class="form-control" name="describe_address" id="full_address" cols="" rows="6">{{$userProfile->describe_address ?? old('describe_address')}}</textarea>
                            <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                        </div>

                        <div class="form-group col-12">
                            <button class="btn btn-primary " type="submit"> Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>





    <script>
        $(document).ready(function(){
            $("#nidImg").change(function () {
                readURL(this);
            });

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#PreviewImage").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>


@endsection
