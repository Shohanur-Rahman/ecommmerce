@extends('admin.layouts.admin')
@section('title', "Mail")
@section('content')
    <script src="{{asset('admin/css/email.multiple.css')}}"></script>

<div class="inbox-area">
    <div class="row">
        <div class="col-12 box-margin">
            <div class="card">
                <div class="card-body pb-0">
                    <div class="d-sm-flex">
                        @include('admin.modules.mails.layout.partial.sidebar')

                        <div class="mail-body--area">

                            @yield('mail-content')
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('admin/js/jquery.email.multiple.js')}}"></script>
@endsection
