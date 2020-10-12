@extends('user.layouts.layout-third')
@section('title', "HOBO")
@section('content')
    <!--about-area start-->
    <div class="faq-area mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="accordion">
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingOne">
                                <h5 class="mb-0">
                                    <a href="#collapseOne" class="btn btn-link" data-toggle="collapse" aria-expanded="true" aria-controls="collapseOne">
                                        Is there anything I should bring?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingTwo">
                                <h5 class="mb-0">
                                    <a href="#collapseTwo" class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Where can I find market research reports?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card single-faq">
                            <div class="card-header faq-heading" id="headingThree">
                                <h5 class="mb-0">
                                    <a href="#collapseThree" class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Where can I find the Wall Street Journal ?
                                        <i class="fa fa-plus-circle pull-right"></i>
                                        <i class="fa fa-minus-circle pull-right"></i>
                                    </a>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    <p>The graphical control element accordion is a vertically stacked list of items, such as labels or thumbnails. Each item can be "expanded" or "stretched" to reveal the content associated with that item. There can be zero expanded items, exactly one, or more than one item expanded at a time, depending on the configuration stacked list of items, such as labels or thumbnails.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--faq-area end-->

@endsection
