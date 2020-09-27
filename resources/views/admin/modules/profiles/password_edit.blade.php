@extends('admin.layouts.admin')
@section('title', "E-com Setting")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-2">Change Password</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling
                        to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which
                        plug-ins can built.
                    </p>

                    <section id="steps-uid-1-p-0" role="tabpanel" aria-labelledby="steps-uid-1-h-0" class="body current" aria-hidden="false">
                        <h3>Account</h3>
                        <div class="form-group">
                            <label for="userName">User name *</label>
                            <input id="userName" name="userName" type="text" class="required form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Password *</label>
                            <input id="password" name="password" type="password" class="required form-control">
                        </div>
                        <div class="form-group">
                            <label for="confirm">Confirm Password *</label>
                            <input id="confirm" name="confirm" type="password" class="required form-control">
                            <small>(*) Mandatory</small>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    @include('admin.partials.partial_assets.datatable')

@endsection
