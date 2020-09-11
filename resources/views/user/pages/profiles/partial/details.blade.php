<div class="d-flex justify-content-between">
    <div class="d-flex flex-column justify-content-center">
        <div class="d-flex">
            @If(Auth()->user()->userProfile->avatar != null)
                <img class="rounded-circle" src="{{asset(Auth()->user()->userProfile->avatar)}}" id="uploadPreview"   style="width: 120px;height: 120px" alt="">
            @else
                <img class="rounded-circle" src="{{asset('user/assets/images/avatar.png')}}" id="uploadPreview"   style="width: 120px;height: 120px" alt="">
            @endif

            <div class="form-group col-3" style="margin-top: -10px">
                <form action="{{route('avatar.update')}}" method="post" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <label for="imgInp" class="upload-preview">
                        <img src="{{asset('images/noimage.PNG')}}" />
                    </label>

                    <input type="file"  name="avatar" class="hdn-uploder d-none" id="imgInp" required="required" accept="image/*" data-parsley-error-message="Upload Main Slider image"/>
                    <button class="btn btn-primary btn-sm ml-4"><small>Upload</small></button>
                </form>
            </div>
        </div>

        <span class="text-black-50 font-weight-bold mt-2">{{Auth::user()->name}}</span>
        <span>{{Auth::user()->email}}</span>
    </div>
    <div class="align-content-sm-end ml-auto mt-3">
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
<script>
    $(document).ready(function(){
        $("#imgInp").change(function () {
            readURL(this);
        });

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $("#uploadPreview").attr("src", e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
