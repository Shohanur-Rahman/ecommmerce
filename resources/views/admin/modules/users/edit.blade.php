@extends('admin.layouts.admin')
@section('title', "Home")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">New {{$user->user_type}}</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-xs-12">
                            <form method="post" action="{{route('users.update',[$user->user_type,$user->id])}}" class="d-inline">
                                @method('PATCH')
                                @csrf
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" value="{{$user->name ?? old('name')}}" placeholder="Enter User name" name="name" required="required" data-parsley-error-message="Enter User name">
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" value="{{$user->email }}" placeholder="Enter User email" name="email" required="required" data-parsley-error-message="Enter User email">
                                </div>

                                <div class="form-group">
                                    <label for="user_type">User Type</label>
                                    <select class="form-control" name="user_type" id="">
                                        <option value="">Select User Type</option>
                                        @foreach($types as $type)
                                            <option {{($user->user_type === $type->user_type) ? 'selected' : ''}} value="{{$type->user_type}}">{{$type->user_type}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="checkbox d-inline">
                                        <input type="checkbox" name="is_active" id="checkbox-14" value="1" {{($user->is_active===1) ? 'checked' : ''}}>
                                        <label for="checkbox-14" class="cr">Is Active</label>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="admin_comment">Admin Comments</label>
                                    <input type="text" class="form-control" id="admin_comment" value="{{$user->admin_comments ?? old('admin_comment')}}" placeholder="Enter Admin Comments" name="admin_comment"  data-parsley-error-message="Enter Admin Comments">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </form>

                            <a href="{{route('users.index',strtolower($user->user_type))}}" class="btn btn-danger">Back to Warehouses</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
