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
        <!-- Single Mail -->
        @foreach($mails as $mail)
            <div class="admi-mail-item">
                <!-- Admi-mail-checkbox -->
                <div class="admi-mail-checkbox">
                    <div class="form-group mb-0">
                        <div class="checkbox d-inline">
                            <input type="checkbox" name="checkbox-1" id="checkbox-2">
                            <label for="checkbox-2" class="cr"></label>
                        </div>
                    </div>
                </div>
                <!-- Admi-mail-star -->

                <a href="mail-view.html">
                    <!-- Admi-mail-body -->
                    <div class="admi-mail-body d-flex align-items-center mr-3">
                        <div class="mail-thumb flex-40-thubm mr-3">
                            <img class="border-radius-50" src="img/member-img/1.png" alt="">
                        </div>
                        <div class="div">
                            <div class="admi-mail-from">Jhon Monino</div>
                            <div class="admi-mail-subject">
                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="admi-mail-date">{{$mail->created_at->format('H:m:A')}}</div>
            </div>
        @endforeach
    </div>

@endsection
