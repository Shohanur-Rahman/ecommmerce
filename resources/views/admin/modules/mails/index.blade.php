@extends('admin.modules.mails.layout.layout')
@section('title', "sendMail")
@section('mail-content')
    <div class="row">
        <div class="col-md-12">
            <x-inform-users></x-inform-users>
        </div>
    </div>

    @include('admin.modules.mails.layout.common.header')

    <div class="admi-mail-list mb-30">
        <div class="admi-mail-item">
            <div class="admi-mail-checkbox">
                <div class="form-group mb-0">
                    <div class="checkbox d-inline">
                        <input type="checkbox" name="checkbox-1" id="checkbox-2">
                        <label for="checkbox-2" class="cr"></label>
                    </div>
                </div>
            </div>

            <a href="mail-view.html">

                <div class="admi-mail-body d-flex align-items-center mr-3">
                    <div class="div">
                        <div class="admi-mail-from">Jhon Monino</div>
                        <div class="admi-mail-subject">
                            <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                        </div>
                    </div>
                </div>
            </a>
            <div class="admi-mail-date">11:30am</div>
        </div>
    </div>

@endsection
