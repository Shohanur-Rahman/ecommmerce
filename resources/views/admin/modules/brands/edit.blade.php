@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-body">
	            <h4 class="card-title mb-2">Edit Brand</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{route('update_brand', $brand->id)}}" enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter brand name" name="name" required="required" data-parsley-error-message="Enter brand name" value="{{$brand->name}}">
                            </div>
                            <div class="form-group">
                                @if($brand->image)
                                <label class="form-label">Featured Image</label>
                                <label for="imgInp" class="upload-preview">
                                    <img src="{{asset($brand->image)}}" id="uploadPreview" />
                                </label>
                                <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" accept="image/*" data-parsley-error-message="Upload featured image"/>
                                @else
                                <label class="form-label">Featured Image</label>
                                <label for="imgInp" class="upload-preview">
                                    <img src="{{asset('images/noimage.PNG')}}" id="uploadPreview" />
                                </label>
                                <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload featured image"/>
                                @endif
                            </div>
                            
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>


<script type="text/javascript">
    $(document).ready(function () {
        
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