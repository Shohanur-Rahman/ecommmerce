@extends('admin.layouts.admin')
@section('title', "MainSlider Edit")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Main Slider</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('main-sliders.update',$mainSlider->id)}}" class="d-inline" enctype="multipart/form-data">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Slider Name</label>
                                    <input type="text" class="form-control" value="{{$mainSlider->name ?? old('name')}}" id="name" placeholder="Enter Slider name" name="name" required="required" data-parsley-error-message="Enter Slider name">
                                </div>

                                <div class="form-group">
                                    <label for="caption">Caption</label>
                                    <input type="text" class="form-control" value="{{$mainSlider->caption ?? old('caption')}}" id="caption" placeholder="Enter Slider Caption" name="caption" required="required" data-parsley-error-message="Enter Slider Caption">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Image Url</label>
                                    <label for="imgInp" class="upload-preview">
                                        @if($mainSlider->image_url)
                                            <img src="{{asset($mainSlider->image_url)}}" id="uploadPreview" />
                                        @else
                                            <img src="{{asset('images/noimage.PNG')}}" id="uploadPreview" />
                                        @endif
                                    </label>
                                    <input type="file" name="image_url" class="hdn-uploder" id="imgInp"  accept="image/*" data-parsley-error-message="Upload Main Slider image" {{ $mainSlider->image_url? '' : 'required="required"'}}/>
                                </div>

                                <div class="form-group">
                                    <label for="categoryId">Select Category Name</label>
                                    <select {{($mainSlider->category_id) ? '' : 'disabled'}} name="category_id" class="form-control" id="categoryId" required data-parsley-trigger="change" data-parsley-error-message="Enter Slider category_id">
                                        <option value="">Select Category Name</option>
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}" {{($category->id===$mainSlider->category_id) ? 'selected' : ''}}>{{$category->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="productId">Select Product Id</label>
                                    <select {{($mainSlider->product_id) ? '' : 'disabled'}}  name="product_id" class="form-control" id="productId" required data-parsley-trigger="change" data-parsley-error-message="Enter Slider product_id">
                                        <option value="">Select Product Id</option>
                                        @foreach($products as $product)
                                            <option value="{{$product->id}}" {{($product->id===$mainSlider->product_id) ? 'selected' : ''}}>{{$product->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-success mr-2 float-right">Update Main Slider</button>
                            </form>

                            <a href="{{route('main-sliders.index')}}" class="btn btn-danger float-left">Back to Main Sliders</a>
                        </div>
                    </div>

                </div><script>
                    $(document).ready(function(){
                        $("#imgInp").change(function () {
                            readURL(this);
                        });

                        $("#categoryId").click(function(){
                            var categoryVal = $(this).val();

                            if(categoryVal.length>=1){
                                $('#productId').prop('disabled', 'disabled');
                                $('#productId').removeAttr('required');
                            }else{
                                $('#productId').removeAttr('disabled');
                            }
                        });

                        $("#productId").click(function(){
                            var productVal = $(this).val();

                            if(productVal.length>=1){
                                $('#categoryId').prop('disabled', 'disabled');
                                $('#categoryId').removeAttr('required');
                            }else{
                                $('#categoryId').removeAttr('disabled');
                            }
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
            </div>
        </div>
    </div>

@endsection
