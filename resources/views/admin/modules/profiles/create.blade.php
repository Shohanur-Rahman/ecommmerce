@extends('admin.layouts.admin')
@section('title', "E-com Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Profile</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <div class="form-row">
                                <div class="form-group col-md-6 d-flex">
                                    @if(Auth()->user()->userProfile->avatar != null)
                                        <img class="rounded-circle" src="{{asset(Auth()->user()->userProfile->avatar)}}" id="uploadPreview"   style="width: 120px;height: 120px" alt="">
                                    @else
                                        <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}" id="uploadPreview"   style="width: 120px;height: 120px" alt="">
                                    @endif


                                    <form action="{{route('admin-avatar.update')}}" method="post" enctype="multipart/form-data">
                                        @method('PATCH')
                                        @csrf
                                       <div class="d-flex flex-column">
                                           <label  for="imgInp" class="upload-preview ml-4">
                                               <img src="{{asset('images/noimage.PNG')}}"/>
                                           </label>

                                           <input type="file"  name="avatar" class="hdn-uploder d-none" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload Profile image"/>
                                           <button class="btn btn-primary btn-sm ml-4"><small>Upload</small></button>
                                       </div>
                                    </form>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="">
                                        <h5>Account Information</h5>
                                        <address>
                                            {{Auth::user()->name}}<br>

                                            @if(Auth::user()->userProfile != null)
                                                {{Auth::user()->userProfile->city}}<br>
                                                {{Auth::user()->userProfile->house}}, {{Auth::user()->userProfile->road}}, {{Auth::user()->userProfile->state}}<br>
                                                {{Auth::user()->userProfile->country}}<br>
                                                {{Auth::user()->userProfile->describe_address}}<br>
                                                Phone: {{Auth::user()->userProfile->phone}} <br>
                                            @endif
                                        </address>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form action="{{route('admin-profiles.update')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-12" >
                                        <label for="name">Username</label>
                                        <input class="form-control" type="text" name="name" id="name" value="{{Auth::user()->name ?? old('name')}}"
                                               placeholder="Enter your name" required="required" data-parsley-error-message="Enter your name">

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Secondary Email</label>
                                    <input class="form-control" type="text" name="secondary_email" id="email" value="{{$userProfile->secondary_email ?? old('secondary_email')}}"
                                           placeholder="Enter your Secondary Email" required="required" data-parsley-error-message="Enter your Secondary Email">

                                    @error('secondary_email')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="dob">Date Of Birth</label>
                                    <input class="form-control" type="date" name="dob" id="dob" value="{{$userProfile->dob ?? old('dob')}}"
                                           placeholder="Enter your Date Of Birth" required="required" data-parsley-required-message="Enter Your Date Of Birth">
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label class="float-left" for="nid">Enter Your NID Number && NID Photo</label>
                                        <input class="form-control" type="number" name="nid" id="nid" value="{{$userProfile->nid ?? old('nid')}}"
                                               placeholder="Enter Your NID Number" required="required" data-parsley-required-message="Enter Your NID Number">

                                        @error('nid')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="nidImg" class="upload-preview">
                                            @if($userProfile->nid_image)
                                                <img src="{{asset($userProfile->nid_image)}}" id="PreviewImage" style="width: 80px;height: 80px"/>
                                            @else
                                                <img src="{{asset('images/noimage.PNG')}}" id="PreviewImage" style="width: 80px;height: 80px"/>
                                            @endif

                                        </label>

                                        <input type="file"  name="nid_image" class="hdn-uploder d-none" id="nidImg" {{$userProfile->nid_image ? '' : 'required'}} accept="image/*" data-parsley-error-message="Upload NID image"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input class="form-control" type="text" name="phone" id="phone" value="{{$userProfile->phone ?? old('phone')}}"
                                           placeholder="Enter your Secondary Phone" required="required" data-parsley-error-message="Enter your Secondary Phone">
                                </div>


                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label  for="house">House</label>
                                        <input class="form-control" type="text" name="house" id="email" value="{{$userProfile->house ?? old('house')}}"
                                               placeholder="Enter your House" data-parsley-error-message="Enter your House">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label  for="road">Road</label>
                                        <input class="form-control" type="text" name="road" id="road" value="{{$userProfile->road ?? old('road')}}"
                                               placeholder="Enter your Road" required="required" data-parsley-error-message="Enter your Road">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="postcode">PostCode</label>
                                        <input class="form-control" type="number" name="postcode" id="postcode" value="{{$userProfile->postcode ?? old('postcode')}}"
                                               placeholder="Enter your PostCode" required="required" data-parsley-error-message="Enter your PostCode">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="state">State</label>
                                        <input class="form-control" type="text" name="state" id="state" value="{{$userProfile->state ?? old('state')}}"
                                               placeholder="Enter your State" required="required" data-parsley-error-message="Enter your State">
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label  for="city">City</label>
                                        <input class="form-control" type="text" name="city" id="city" value="{{$userProfile->city ?? old('city')}}"
                                               placeholder="Enter your City" required="required" data-parsley-error-message="Enter your City">
                                    </div>
                                </div>

                                <div class="form-group">
                                    @include('user.pages.common.countries.edit',['presentCountry'=>$userProfile])
                                </div>

                                <div class="form-group">
                                    <label  for="full_address">Full Address</label>

                                    <textarea class="form-control" name="describe_address" id="full_address" cols="" rows="6">{{$userProfile->describe_address ?? old('describe_address')}}</textarea>
                                    <span>Give us your full location address so we can find you and deliver your order accurately.</span>
                                </div>

                                <button type="submit" class="btn btn-primary float-left">Update Profile</button>

                            </form>
                            <a href="{{route('dashboard')}}" class="btn btn-danger float-right">Back to Dashboard</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function(){
            $("#imgInp").change(function () {
                readProfileImage(this);
            });

        });

        function readProfileImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#uploadPreview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

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
