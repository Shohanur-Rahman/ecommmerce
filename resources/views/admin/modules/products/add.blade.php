@extends('admin.layouts.admin') @section('title', "New Product") @section('content') @include('admin.partials.partial_assets.kendo')

<div class="row">
    <form method="post" action="{{route('save_tag')}}" enctype="multipart/form-data" data-parsley-validate>
        @csrf
        <div class="col-md-12">
            <input type="hidden" name="categories" id="categories" />
            <input type="hidden" name="hdnTagsId" id="hdnTagsId" />
        </div>
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
                <h4 class="card-title">Mapping</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="mltCategories" class="col-form-label">Categories</label>
                            <select id="mltCategories" class="form-control" data-placeholder="Select at least one category" required="required" data-parsley-error-message="Choose at least one category">
                                @foreach($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label for="mltTags" class="col-form-label">Tags</label>
                            <select id="mltTags" class="form-control" data-placeholder="Select at least one tag" required="required" data-parsley-error-message="Choose at least one tag">
                                @foreach($tags as $cat)
                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                @endforeach
                            </select>
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
                        <div class="new-checkbox">
                            <!-- Rectangular switch -->
                            <div class="inline-widged">
                                <label for="is_inventory" class="single-label">Track Inventory</label>
                                <label class="switch">
                                    <input type="checkbox" id="is_inventory" name="is_inventory" />
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <div class="row mt-5">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="inventory_qty">QTY</label>
                                    <input class="number_touchspin" type="text" name="inventory_qty" id="inventory_qty" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="minimum_inventory_qty">Minimum Inventory</label>
                                    <input class="number_touchspin" type="text" name="minimum_inventory_qty" id="minimum_inventory_qty" />
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="notify_low_inventory" class="single-label">Notify Low Store</label>
                                            <label class="switch">
                                                <input type="checkbox" id="notify_low_inventory" name="notify_low_inventory" />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="Warehouse_id">Minimum Inventory</label>
                                    <select id="Warehouse_id" class="form-control" data-placeholder="Select at least one category" required="required" data-parsley-error-message="Choose your store id">
                                        <option value="">-- Select One --</option>
                                        @foreach($warehouses as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="new-checkbox">
                                        <div class="inline-widged">
                                            <label for="show_availability" class="single-label">Show Availability</label>
                                            <label class="switch">
                                                <input type="checkbox" id="show_availability" name="show_availability" />
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="availability_id">Available for</label>
                                    <select id="availability_id" class="form-control" data-placeholder="Select at least one category" required="required" data-parsley-error-message="Choose your store id">
                                        <option value="">-- Select One --</option>
                                        @foreach($avalabilitites as $cat)
                                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="minimum_cart_qty">Minimum QTY</label>
                                    <input class="number_touchspin" type="text" name="minimum_cart_qty" id="minimum_cart_qty" value="1" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@include('admin.partials.partial_assets.kendo_init') @include('admin.partials.partial_assets.touchspin')

<script type="text/javascript">
    var mltCategories;
    var mltTags;

    $(document).ready(function () {
        mltCategories = $("#mltCategories").kendoMultiSelect().data("kendoMultiSelect");
        mltTags = $("#mltTags").kendoMultiSelect().data("kendoMultiSelect");

        mltCategories.bind("change", function () {
            if (mltCategories.selectedIndex === -1 && mltCategories.value()) {
                $("#categories").val("");
            } else {
                var cID = mltCategories.value();
                $("#categories").val(cID);
            }
        });

        mltTags.bind("change", function () {
            if (mltTags.selectedIndex === -1 && mltTags.value()) {
                $("#hdnTagsId").val("");
            } else {
                var cID = mltTags.value();
                $("#hdnTagsId").val(cID);
            }
        });

        mltCategories.value("");
        mltTags.value("");

        $("#imgInp").change(function () {
            readURL(this);
        });

        $("#is_inventory").change(function () {
            if (this.checked) {
                alert("checked");
            } else {
                alert("Not checked");
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

@endsection
