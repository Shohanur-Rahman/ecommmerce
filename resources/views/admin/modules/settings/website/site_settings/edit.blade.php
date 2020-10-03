@extends('admin.layouts.admin')
@section('title', "Edit Site Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Edit Site Setting</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('site-settings.update', $siteSetting->id)}}" class="d-inline" enctype="multipart/form-data" data-parsley-validate>
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Site Setting Name" name="name" data-parsley-trigger="change" required="required" data-parsley-required-message="Enter Site Setting  name" value="{{$siteSetting->name ?? old('name')}}">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Site Setting Email" name="email"  data-parsley-trigger="change" required="required" data-parsley-required-message="Enter Site Setting  Email" value="{{$siteSetting->email ?? old('email')}}">
                                </div>

                                <div class="form-group">
                                    <label for="Phone">Phone</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="Enter Site Setting Phone" name="phone" data-parsley-trigger="change" required="required" data-parsley-required-message="Enter Site Setting Phone" value="{{$siteSetting->phone ?? old('phone')}}">
                                </div>

                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Site Setting Address" name="address" data-parsley-trigger="change" required="required" data-parsley-required-message="Enter Site Setting Address" value="{{$siteSetting->address ?? old('address')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea
                                        class="form-control rounded-0 form-control-md"
                                        id="description"
                                        placeholder="Sort Description"
                                        name="description"
                                        required="required"
                                        data-parsley-error-message="Enter E-commerce Support description"
                                    >{{$siteSetting->description ?? old('description')}}</textarea>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image Url</label>
                                    <label for="imgInp" class="upload-preview">
                                        <img src="{{$siteSetting->logo_url ? asset($siteSetting->logo_url) : asset('images/noimage.PNG') }}" id="uploadPreview" />
                                    </label>
                                    <input type="file" name="logo_url" class="hdn-uploder" id="imgInp" {{ $siteSetting->logo_url? '' : 'required="required"'}} accept="image/*" data-parsley-error-message="Upload E-commerce Support image"/>
                                </div>


                                <button type="submit" class="btn btn-success mr-2 float-right">Site Setting Update</button>
                            </form>

                            <a href="{{route('dashboard')}}" class="btn btn-danger float-left">Back to Dashboard</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script>
        $(document).ready(function(){

            $("#imgInp").change(function () {
                readURL(this);
            });
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $("#uploadPreview").attr("src", e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
