@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="card">
	        <div class="card-body">
	            <h4 class="card-title mb-2">Edit Tag</h4>
	            <p class="text-muted font-14 mb-4">
	                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
	                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
	            </p>

                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{route('update_tag', $tag->id)}}" enctype="multipart/form-data" data-parsley-validate>
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter tag name" name="name" required="required" value="{{$tag->name}}" data-parsley-error-message="Enter tag name">
                            </div>
                            
                            <button type="submit" class="btn btn-primary mr-2">Update</button>
                            <a href="{{route('tags')}}" class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                </div>

            </div>
        </div>
	</div>
</div>


@endsection