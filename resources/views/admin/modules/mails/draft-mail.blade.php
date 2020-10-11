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
            @foreach($mail->mailAddresses as $mailAddress)
                @if($mailAddress->status == 0)
                <div class="admi-mail-item">
                    <!-- Admi-mail-checkbox -->
                    <div class="admi-mail-checkbox">
                        <div class="form-group mb-0 mt-2">
                            <div class="checkbox d-inline">
                                <input type="checkbox" name="checkbox-1" id="checkbox-{{$mail->id}}">
                                <label for="checkbox-{{$mail->id}}" class="cr"></label>
                            </div>
                        </div>
                    </div>
                    <!-- Admi-mail-star -->

                    <a href="{{route('draft-mail.edit',$mail->id)}}">
                        <!-- Admi-mail-body -->
                        <div class="admi-mail-body d-flex align-items-center mr-3">
                            <div class="div">
                                <div class="admi-mail-subject">
                                    <p class="mb-0 mail-subject--text--">
                                        {{$mail->subject}} <span>{{Str::limit(strip_tags(htmlspecialchars_decode($mail->description)),220)}}</span></p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="admi-mail-date">{{$mailAddress->created_at->format('H:m:A')}}</div>
                </div>
            @endif
            @endforeach
        @endforeach
    </div>

@endsection
