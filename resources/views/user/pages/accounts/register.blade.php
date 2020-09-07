@extends('user.layouts.user')
@section('title', "Register")
@section('content')

    <div class="container h-100 mt-80 mb-30">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-md-8 col-lg-5">
              <x-inform-users></x-inform-users>
                <div class="middle-box">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="font-24 mb-30">Create account.</h4>

                            <form action="{{route('register.store')}}" method="post" data-parsley-validate>
                                @csrf
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input class="form-control "  type="text" name="name" id="username" placeholder="Enter your name" value="{{old('name')}}" autocomplete="name" required="required" data-parsley-error-message="Enter your name">

                                    @error('name')
                                    <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" type="email" name="email" id="email" placeholder="Enter your email" value="{{old('email')}}" autocomplete="email" required="required" data-parsley-error-message="Enter your email">

                                    @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input class="form-control" type="password" name="password"  id="password" placeholder="Enter your password" required="required" data-parsley-error-message="Enter your password">

                                    @error('password')
                                    <span class="text-danger">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="confirm-password">Password</label>
                                    <input class="form-control" type="password" name="password_confirmation"  id="password_confirmation" placeholder="Enter your password" required="required" data-parsley-error-message="Please confirm your password" data-parsley-equalto="#password">
                                </div>

                                <div class="form-group mb-0 mt-15">
                                    <button class="btn btn-primary btn-block" type="submit">Create my account</button>
                                </div>

                                <div class="text-center mt-15"><span class="mr-2 font-13 font-weight-bold">Already have an account?</span><a class="font-13 font-weight-bold" href="{{route('login')}}">Sign in</a></div>

                            </form>

                            <!-- end card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
