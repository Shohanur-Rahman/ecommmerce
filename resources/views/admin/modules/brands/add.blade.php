@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-body">
	            <h4 class="card-title mb-2">New Brand</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" data-parsley-validate>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter brand name" name="name" required="required" data-parsley-error-message="Enter brand name">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Featured Image</label>
                                <label for="imgInp" class="upload-preview">
                                    <img src="{{asset('images/noimage.PNG')}}" id="uploadPreview" />
                                </label>
                                <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload featured image"/>
                            
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


@endsection