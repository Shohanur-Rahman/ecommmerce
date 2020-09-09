@extends('admin.layouts.admin') @section('title', "New Product") @section('content') @include('admin.partials.partial_assets.kendo')

<div class="row">
    <form method="post" action="{{route('save_tag')}}" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Product</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon
                        which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="new-checkbox">
                                    <!-- Rectangular switch -->
                                    <div class="inline-widged">
                                        <label for="is_published" class="single-label">Published</label>
                                        <label class="switch">
                                            <input type="checkbox" id="is_published" name="is_published" checked="checked" />
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="inline-widged">
                                        <label for="is_new" class="single-label">Is New?</label>
                                        <label class="switch">
                                            <input type="checkbox" id="is_new" name="is_new" />
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="inline-widged">
                                        <label for="show_on_home" class="single-label">Show on Home</label>
                                        <label class="switch">
                                            <input type="checkbox" id="show_on_home" name="show_on_home" />
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    <div class="inline-widged">
                                        <label for="allow_review" class="single-label">Allow Review?</label>
                                        <label class="switch">
                                            <input type="checkbox" id="allow_review" name="allow_review" checked="checked" />
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" placeholder="Product title" name="title" required="required" data-parsley-error-message="Product title is required" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="old_price">Old Price</label>
                                            <input class="currancy_touchspin" type="text" name="old_price" id="old_price" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="new_price">New Price</label>
                                            <input class="currancy_touchspin" type="text" name="new_price" id="new_price" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="sku">Stock keeping unit</label>
                                            <input class="form-control" type="text" name="sku" id="sku" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="available_start_date">Available On</label>
                                            <input class="form-control rounded-0 form-control-md" type="date" id="available_start_date" name="available_start_date" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="available_end_date">Available End</label>
                                            <input class="form-control rounded-0 form-control-md" type="date" id="available_end_date" name="available_end_date" />
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="form-label">Featured Image</label>
                                            <label for="imgInp" class="upload-preview">
                                                <img src="{{asset('images/noimage.PNG')}}" id="uploadPreview" />
                                            </label>
                                            <input type="file" name="imgInp" class="hdn-uploder" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload featured image" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="name">Sort Description</label>
                                <textarea class="form-control rounded-0 form-control-md" rows="6" id="name" placeholder="Sort Description" name="name" required="required" data-parsley-error-message="Enter product short description">
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="name">Product Description</label>
                                <textarea class="kendo_editor" rows="6" id="name" placeholder="Sort Description" name="name" required="required" data-parsley-error-message="Enter product description"> </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-5">
            <div class="card card-body">
                <h4 class="card-title">Product Inventory</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@include('admin.partials.partial_assets.kendo_init') @include('admin.partials.partial_assets.touchspin') @endsection
