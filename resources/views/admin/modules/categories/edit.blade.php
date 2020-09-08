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
                            <form method="post" action="{{route('categories.update',$category->id)}}">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="category_name">Category Name</label>
                                    <input type="text" class="form-control" id="category_name" value="{{old('name') ?? $category->category_name}}" placeholder="Enter Category name" name="category_name" required="required" data-parsley-error-message="Enter Category name">

                                    @error('category_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <div class="checkbox d-inline">
                                        <input type="checkbox" name="menu" {{$category->menu == 1 ? 'checked' : ''}} id="checkbox-13" value="1">
                                        <label for="checkbox-13" class="cr">Show On Menu</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox d-inline">
                                        <input type="checkbox" name="top_menu" {{$category->top_menu == 1 ? 'checked' : ''}} id="checkbox-14" value="1">
                                        <label for="checkbox-14" class="cr">Show On Top Menu</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Update</button>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
