@extends('admin.layouts.admin') @section('title', "New Product") @section('content') @include('admin.partials.partial_assets.kendo')


<div class="row">
    <div class="col-md-9">
        <div class="tab-content pt-0">
            <div class="tab-pane active" id="tabProductOverview">
                <div class="card mb-30">
                    <div class="card-body py-3">
                        <div class="d-flex align-items-center pb-3">
                            <div class="icon font-30 text-primary">
                                <i class="fa fa-ravelry" aria-hidden="true"></i>
                            </div>
                            <div class="icon-text pl-4">
                                <h5 class="mb-0">Product Details</h5>
                            </div>
                        </div>

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
                        </div>

                        <div class="row">
                            <div class="col-md-12">
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
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Sort Description</label>
                                    <textarea
                                        class="form-control rounded-0 form-control-md"
                                        rows="6"
                                        id="name"
                                        placeholder="Sort Description"
                                        name="name"
                                        required="required"
                                        data-parsley-error-message="Enter product short description"
                                    ></textarea>
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
            <div class="tab-pane" id="tabMapping"></div>
            <div class="tab-pane" id="tabInventory"></div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="position-fixed form-tab">
            <div class="card mb-30" align="center">
                <div class="card-body py-3">
                    <div class="d-flex align-items-center pb-4">
                        <div class="icon font-30 text-primary">
                            <i class="fa fa-ravelry" aria-hidden="true"></i>
                        </div>
                        <div class="icon-text pl-4">
                            <h5 class="mb-0">Fill up all field</h5>
                        </div>
                    </div>

                    <div class="list-group pb-4">
                        <a href="#tabProductOverview" data-toggle="tab" aria-expanded="false" class="list-group-item list-group-item-action nav-link active">
                            Product Details
                        </a>
                        <a href="#tabMapping" data-toggle="tab" aria-expanded="true" class="list-group-item list-group-item-action nav-link">
                            Mapping
                        </a>
                        <a href="#tabInventory" data-toggle="tab" aria-expanded="false" class="list-group-item list-group-item-action nav-link">
                            Inventory
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
