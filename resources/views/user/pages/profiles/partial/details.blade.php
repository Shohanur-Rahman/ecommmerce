<div class="d-flex justify-content-between">
    <div class="">
        <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}" style="width: 120px;height: 120px" alt="">
    </div>
    <div class="align-content-sm-end ml-auto">
        <div class="">
            <h5>Account Information</h5>
            <address>
                {{Auth::user()->name}}<br>

                @if(Auth::user()->userProfile != null)
                    {{Auth::user()->userProfile->city}}<br>
                    {{Auth::user()->userProfile->house}}, {{Auth::user()->userProfile->road}}, {{Auth::user()->userProfile->state}}<br>
                    {{Auth::user()->userProfile->country}}<br>
                    {{Auth::user()->userProfile->describe_address}}<br>
                    Phone: {{Auth::user()->userProfile->phone}} <br>
                @endif
            </address>
        </div>
    </div>
    <div>
    </div>
</div>
