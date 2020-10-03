<!--footer-area start-->
<footer class="footer-area mt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="company-info">
                    <img src="{{$siteSetting != null ? asset($siteSetting->logo_url) : asset('user/assets/images/logos/logo-blue.png')}}" alt="logo" />
                    <p>{{$siteSetting != null ? $siteSetting->address : 'Address 1, city 1, country'}}</p>
                    <p>Phone: {{$siteSetting != null ? $siteSetting->phone : 'XXX XXXX XXXX'}}</p>
                    <p>Email: {{$siteSetting !=null ? $siteSetting->email : 'email@email.com'}}</p>
                </div>
                <div class="copyright">
                    <p>Copyright {{ date('Y') }} &copy; <a href="#">HOBO</a>. All rights reserved.</p>
                </div>
                <div class="payment-gateways">
                    <img src="{{asset('user/assets/images/footer/p1.png')}}" alt="" />
                    <img src="{{asset('user/assets/images/footer/p2.png')}}" alt="" />
                    <img src="{{asset('user/assets/images/footer/p3.png')}}" alt="" />
                    <img src="{{asset('user/assets/images/footer/p4.png')}}" alt="" />
                    <img src="{{asset('user/assets/images/footer/p5.png')}}" alt="" />
                    <img src="{{asset('user/assets/images/footer/p6.png')}}" alt="" />
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="fooer-widget">
                    <h4>Find It Fast</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Laptop & Computers</a></li>
                            <li><a href="#">Smart Phone & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                            <li><a href="#">Cameras & Photography</a></li>
                            <li><a href="#">Gadgets</a></li>
                            <li><a href="#">Car Electronic & GP5</a></li>
                            <li><a href="#">Accesories</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Information</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Find a Store</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Delivery information</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Gift Cards</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3 mt-sm-45">
                <div class="fooer-widget">
                    <h4>Customer Care</h4>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order History</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Service</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-45">
                <div class="footer-widget">
                    <div class="subscribe-form">
                        <h3>Sign Up to <strong>Newsletter</strong></h3>
                        <p>Subscribe our newsletter gor get notification about information discount.</p>
                        <form class="custom-validate" action="javascript:" method="post" >
                            @csrf
                            <input type="email" name="email" id="email" placeholder="Your email address" />
                            @auth()
                                <button type="submit" onclick="subscribe()">Subscribe</button>
                                <span class="error text-danger"></span>
                                <span class="success text-success"></span>
                            @else
                                <button :disabled  class="disabled">login first</button>
                            @endauth
                        </form>
                    </div>
                    <div class="social-icons style-2">
                        <strong>GET IN TOUCH !</strong>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--footer-area end-->


<script>

    $('#email').keydown(function () {
        $('.error').text('');
        $('.success').text('');

    });


    function subscribe(){
        var email = $('#email').val();

        if(email == ''){
            return false;
        }

        $.ajax({
            type:'post',
            data:{email:email},
            url:'newsletter',

            success:function (resp) {
                if(resp == 'success'){
                    $('.success').html('Subscribed Successfully');
                    $('.error').text('');

                }
            },

            error: function(xhr, status, error) {
               /* alert(xhr.responseText);*/
                $('.error').html(xhr.responseJSON.errors.email[0])
            }
        })
    }

</script>

<!-- main js -->
<script src="{{asset('user/assets/js/main.js')}}"></script>
<script src="{{asset('user/assets/js/custom.js')}}"></script>
