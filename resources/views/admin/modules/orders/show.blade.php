@extends('admin.layouts.admin')
@section('title', "User Edit")
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body ml-3">
                    <h4 class="card-title mb-2">Order ID #{{$order->id}}</h4>
                    <p class="text-muted font-14 mb-4">
                        The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                        that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>

                </div>


               <div class="row">
                   <div class="col-xl-6 ">
                       <div class="card">
                           <div class="card-body">
                               <div class="template-demo">
                                   <table class="table mb-0">
                                       <thead>
                                       <tr>
                                           <th colspan="2"> <h4 class="card-title mb-0">Ordered Details</h4></th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                           <td>Ordered Date</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->created_at->format('d F Y')}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Ordered Status</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Ordered Amount</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Shipping Charge</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Coupon Code </td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Coupon Amount</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Transaction Id</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Payment Method</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->status}}</div>
                                           </td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>

                       <div class="card">
                           <div class="card-body ml-3">
                               <div class="template-demo">
                                   <h4 class="card-title mb-3">Billing Address</h4>

                                   <address class="font-16">
                                       {{$order->user->name}}<br>
                                       {{$order->user->email}}<br>
                                       {{$order->user->userProfile->city}}<br>
                                       {{$order->user->userProfile->house}},{{$order->user->userProfile->road}},{{$order->user->userProfile->state}}<br>
                                       {{$order->user->userProfile->country}}<br>
                                       Phone: {{$order->user->userProfile->phone}}<br>
                                       Describe Address: {{$order->user->userProfile->describe_address}}<br>
                                   </address>
                               </div>
                           </div>
                       </div>
                   </div>

                   <div class="col-xl-6 ">
                       <div class="card">
                           <div class="card-body">
                               <div class="template-demo">
                                   <table class="table mb-0">
                                       <thead>
                                       <tr>
                                           <th colspan="2"> <h4 class="card-title mb-0">Customer Details</h4></th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr>
                                           <td>Customer Name</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->user->name}}</div>
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Customer Email</td>
                                           <td class=" text-right">
                                               <div class="badge badge-primary badge-pill">{{$order->user->email}}</div>
                                           </td>
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>

                       <div class="card">
                           <div class="card-body ml-3">
                               <div class="template-demo">

                                   <h4 class="card-title mb-3">Ordered Status</h4>
                                   <form action="">
                                       <div class="form-group">
                                           <div class="new-checkbox">
                                               <!-- Rectangular switch -->
                                               <div class="inline-widged">
                                                   <label for="new" class="single-label">New</label>
                                                   <label class="switch">
                                                       <input class="status-list" type="checkbox" id="new" name="status" checked="checked" />
                                                       <span class="slider round"></span>
                                                   </label>
                                               </div>
                                               <div class="inline-widged">
                                                   <label for="pending" class="single-label">Pending</label>
                                                   <label class="switch">
                                                       <input class="status-list" type="checkbox" id="pending" name="status" />
                                                       <span class="slider round"></span>
                                                   </label>
                                               </div>
                                               <div class="inline-widged">
                                                   <label for="delivered" class="single-label">Delivered</label>
                                                   <label class="switch">
                                                       <input class="status-list" type="checkbox" id="delivered" name="status" />
                                                       <span class="slider round"></span>
                                                   </label>
                                               </div>
                                               <div class="inline-widged">
                                                   <label for="cancel" class="single-label">Cancel</label>
                                                   <label class="switch">
                                                       <input class="status-list" type="checkbox" id="cancel" name="status" />
                                                       <span class="slider round"></span>
                                                   </label>
                                               </div>

                                           </div>
                                       </div>
                                   </form>

                               </div>
                           </div>
                       </div>

                       <div class="card">
                           <div class="card-body ml-3">
                               <div class="template-demo">
                                   <h4 class="card-title mb-3">Shipping Address</h4>

                                       <address class="font-16">
                                           {{$order->shippingAddress->name}}<br>
                                           {{$order->shippingAddress->email}}<br>
                                           {{$order->shippingAddress->city}}<br>
                                           {{$order->shippingAddress->house}},{{$order->shippingAddress->road}},{{$order->shippingAddress->state}}<br>
                                           {{$order->shippingAddress->country}}<br>
                                           Phone: {{$order->shippingAddress->phone}}<br>
                                           Describe Address: {{$order->shippingAddress->describe_address}}<br>
                                       </address>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xl-12 ">
            <div class="card ">
                <div class="card-body ml-3">
                    <div class="">
                        <h4 class="card-title mb-4">Ordered Product</h4>
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th>Product Name </th>
                                <th>Product SKU </th>
                                <th>Product Size</th>
                                <th>Product Color</th>
                                <th>Product Quantity</th>
                                <th>Product price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order->orderProducts as $orderProduct)
                                <tr>
                                    <td>{{$orderProduct->product->title}}</td>
                                    <td>{{$orderProduct->product->sku}}</td>
                                    <td>{{($orderProduct->product->size) ? $orderProduct->product->size->size : ''}}</td>
                                    <td>{{($orderProduct->product->color) ? $orderProduct->product->size->color : ''}}</td>
                                    <td>{{$orderProduct->quantity}}</td>
                                    <td>{{$orderProduct->product->new_price}}</td>

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $('.status-list').on('change', function() {
            $('.status-list').not(this).prop('checked', false);
        });
    </script>
@endsection
