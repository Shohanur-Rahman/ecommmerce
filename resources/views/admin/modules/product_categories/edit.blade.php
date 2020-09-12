@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New Category</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('product-categories.update',$productCategory->id)}}" class="d-inline">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Category Name</label>
                                    <input type="text" class="form-control" value="{{$productCategory->category_name ?? old('product_name')}}" id="name" placeholder="Enter Category name" name="category_name" required="required" data-parsley-error-message="Enter Category name">

                                </div>

                                <div class="form-group">
                                    <div class="checkbox d-inline">
                                        <select name="parent_id" id="" class="form-control">
                                            <option value="">Selection Category</option>
                                            @foreach($Categories as $category)
                                                <option value="{{$category->id}}" {{($category->id === $productCategory->parent_id) ? 'selected' : ''}}>{{$category->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>

                                                @foreach($category->childrens as $children)
                                                    <option value="{{$children->id}}" {{($children->id === $productCategory->parent_id) ? 'selected' : ''}}> ->{{$children->category_name}} <b class="text-black-50">({{$category->user->user_type}})</b></option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox d-inline">
                                        <input type="checkbox" name="is_top_menu" id="checkbox-14" value="1" {{($productCategory->is_top_menu===1) ? 'checked' : ''}}>
                                        <label for="checkbox-14" class="cr">Show On Top Menu</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>

                            </form>

                            <a href="{{route('product-categories.index')}}" class="btn btn-danger">Back to Categories</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
