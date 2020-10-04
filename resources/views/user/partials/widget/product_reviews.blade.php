<div class="row show m-2">
    <div class="col-7  product-comments mt-0">
        <div>
            <ul class="list-none">
                @foreach($productReviews as $productReview)
                    <li>
                        <div class="comment-avatar text-center">
                            @if(Auth()->user()->userProfile->avatar != null)
                                <img  src="{{asset(Auth()->user()->userProfile->avatar)}}" alt="">
                            @else
                                <img  src="{{asset('user/assets/images/avatar.png')}}" alt="">
                            @endif

                            <img src="{{asset('user/assets/images/blog/comment/4.jpg')}}" alt="">

                            <div id="dataReadonlyReview"
                                 data-rating-stars="5"
                                 data-rating-readonly="true"
                                 data-rating-half="true"
                                 data-rating-value="{{$productReview->rating}}"
                                 data-rating-input="#dataReadonlyInput">
                            </div>
                        </div>
                        <div class="comment-desc">
                            <span>{{$productReview->created_at->format('d M Y')}}</span>
                            <h4>{{$productReview->name}}</h4>
                            <p>{{$productReview->comment}} </p>
                        </div>
                    </li>

                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-5 blog-comment-form product-comment-form ">
        <div class="">
            <h4>Add Review</h4>
            <form action="{{route('product-reviews.store',$product->id)}}" method="post">
                <div class="row mt-10">
                    @csrf
                    <div class="col-sm-12 mb-3">
                        <div class="product-rating style-2 mb-0" id="halfstarsReview">
                            <input type="hidden" name="rating" value="" id="ratingValue">
                            <span>Your Rating:</span>
                        </div>
                        @error('rating')
                        <span class="text-danger text-sm-center">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="col-sm-12">
                        <textarea placeholder="Messages" name="comment"></textarea>

                        @error('comment')
                        <span class="text-danger text-sm-center">{{$message}}</span>
                        @enderror
                    </div>
                    @auth()
                        <div class="col-sm-12">
                            <button class="btn-common mt-25">Submit</button>
                        </div>
                    @else
                        <div class="col-sm-12">
                            <p class="text-success mt-25">Please sign in and review this product</p>
                        </div>
                    @endauth
                </div>
            </form>
        </div>
    </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<script src="{{asset('user/assets/js/rating.js')}}"></script>

<script>
    $("#halfstarsReview").rating({
        "half": true,
        "click": function (e) {
            $('#ratingValue').val(e.stars)
        },


    });


</script>
