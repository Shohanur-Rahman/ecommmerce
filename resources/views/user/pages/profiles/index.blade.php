@extends('user.layouts.user')

@section('content')
    <div class="container ">
        <div class="row mt-3 " >
            <aside class="col-md-3">
                <div class="card ">
                    <div class="card-header bg-white font-weight-bold h5">My Account</div>
                    <div class="card-body">
                        <ul class="list-unstyled ProfileCategory">
                            <li class=" " ><a href=""> <i class="fa fa-angle-right mr-2" aria-hidden="true"></i>Account Dashboard</a></li>
                            <li ><i class="fa fa-angle-right mr-2" aria-hidden="true"></i></i><a href="http://demo.magentomagik.com/computerstore/customer/account/edit/">Account Information</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/customer/address/">Address Book</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/sales/order/history/">My Orders</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/sales/billing_agreement/">Billing Agreements</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/sales/recurring_profile/">Recurring Profiles</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/review/customer/">My Product Reviews</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/tag/customer/">My Tags</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/wishlist/">My Wishlist</a></li>
                            <li><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/downloadable/customer/products/">My Downloadable</a></li>
                            <li class="last"><i class="fa fa-angle-right mr-2" aria-hidden="true"></i><a href="http://demo.magentomagik.com/computerstore/newsletter/manage/">Newsletter Subscriptions</a></li>
                        </ul>
                    </div>
                </div>
            </aside>

            <div class="col-md-9 col-sm-8 col-xs-12 col-sm-push-4 col-md-push-3">

                        <div class="card border-0">
                            <div class="bg-white">
                                <h3 class="uppercase-text">My Dashboard</h3>
                            </div>
                            <div class="dashboard">
                                <div class="welcome-msg"> <strong class=" text-black font-weight-bold">Hello, John Doe!</strong>
                                    <p class="text-black-50">From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                                </div>
                                <div class="recent-orders">
                                   <div class="d-flex justify-content-between">
                                       <div class="text-black h6"><strong>Recent Orders</strong> </div>
                                       <a class="text-success" href="#">View All </a>
                                   </div>
                                    <div class="table-responsive">
                                        <table class="table" id="my-orders-table">
                                            <thead>
                                            <tr class="first last">
                                                <th>Order #</th>
                                                <th>Date</th>
                                                <th>Ship to</th>
                                                <th><span class="nobr">Order Total</span></th>
                                                <th>Status</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr class="first odd">
                                                <td>500000002</td>
                                                <td>9/9/10 </td>
                                                <td>John Doe</td>
                                                <td><span class="price">$5.00</span></td>
                                                <td><em>Pending</em></td>
                                                <td class="a-center last"><span class="nobr"> <a class="text-success" href="#">View Order</a> <span class="separator">|</span> <a class="text-success" href="#">Reorder</a> </span></td>
                                            </tr>
                                            <tr class="last even">
                                                <td>500000001</td>
                                                <td>9/9/10 </td>
                                                <td>John Doe</td>
                                                <td><span class="price">$1,397.99</span></td>
                                                <td><em>Pending</em></td>
                                                <td class="a-center last"><span class="nobr"> <a class="text-success" href="#">View Order</a> <span class="separator">|</span> <a class="text-success" href="#">Reorder</a> </span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card border-0">
                                    <div class="">
                                        <h3>Account Information</h3>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="">
                                            <h5>Contact Information</h5>
                                            <a class="text-success" href="#">Edit</a>
                                            <p> John Doe<br>
                                                jone-doe@example.com<br>
                                                <a class="text-success" href="#">Change Password</a> </p>
                                        </div>
                                        <div class="">
                                            <h5>Newsletters</h5>
                                            <a class="text-success" href="#">Edit</a>
                                            <p> You are currently not subscribed to any newsletter. </p>
                                        </div>
                                    </div>
                                    <div class="">
                                        <h4>Address Book</h4>
                                        <div class="manage_add"><a class="text-success" href="#">Manage Addresses</a> </div>
                                        <div class="d-flex justify-content-between">
                                            <div class="">
                                                <h5>Primary Billing Address</h5>
                                                <address>
                                                    John Doe<br>
                                                    USA<br>
                                                    Anytown,  Alabama, 46532<br>
                                                    United States<br>
                                                    T: 454541 <br>
                                                    <a class="text-success" href="#">Edit Address</a>
                                                </address>
                                            </div>
                                            <div class="">
                                                <h5>Primary Shipping Address</h5>
                                                <address>
                                                    John Doe<br>
                                                    USA<br>
                                                    Anytown,  Alabama, 46532<br>
                                                    United States<br>
                                                    T: 454541 <br>
                                                    <a class="text-success" href="#">Edit Address</a>
                                                </address>
                                            </div>
                                            <div class="">
                                                <h5>Primary Shipping Address</h5>
                                                <address>
                                                    John Doe<br>
                                                    USA<br>
                                                    Anytown,  Alabama, 46532<br>
                                                    United States<br>
                                                    T: 454541 <br>
                                                    <a class="text-success" href="#">Edit Address</a>
                                                </address>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
@endsection
