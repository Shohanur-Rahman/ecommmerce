@extends('admin.layouts.admin')
@section('title', "Mail")
@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="inbox-area">
                <div class="row">
                    <div class="col-md-12">
                        <x-inform-users></x-inform-users>
                    </div>


                    <div class="col-12 box-margin">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-sm-flex">
                                    <div class="mail-side-menu mb-30">
                                        <div class="ibox-content mailbox-content">
                                            <div class="file-manager clearfix">
                                                <a class="btn btn-primary d-block" href="compose-mail.html">Compose</a>
                                                <!-- Title -->
                                                <div class="folder-title mt-50">
                                                    <h6 class="mb-3 primary-color-text">Folders</h6>
                                                </div>
                                                <ul class="folder-list">
                                                    <li class="active"><a href="#"> <i class="ti-email"></i> Inbox <span class="badge badge-pill badge-primary inbox ml-2">25</span> </a></li>
                                                    <li><a href="#"> <i class="ti-share"></i> Send Mail</a></li>
                                                    <li><a href="#"> <i class="fa fa-certificate"></i> Important</a></li>
                                                    <li><a href="#"> <i class="fa fa-file-text-o"></i> Drafts <span class="badge badge-pill badge-warning inbox ml-2">3</span></a></li>
                                                    <li><a href="#"> <i class="fa fa-trash-o"></i> Trash <span class="badge badge-pill badge-danger inbox ml-2">4</span></a></li>
                                                </ul>
                                                <!-- Title -->
                                                <div class="categori-title mt-30">
                                                    <h6 class="mb-3 primary-color-text">Labels</h6>
                                                </div>
                                                <!-- List -->
                                                <ul class="category-list">
                                                    <li><a href="#"> <i class="fa fa-circle text-navy"></i> Clients</a></li>
                                                    <li><a href="#"> <i class="fa fa-circle text-danger"></i> Important</a></li>
                                                    <li><a href="#"> <i class="fa fa-circle text-primary"></i> Social</a></li>
                                                    <li><a href="#"> <i class="fa fa-circle text-info"></i> Other</a></li>
                                                </ul>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-body--area">
                                        <div class="mail-box-header">
                                            <div class="mail-title-search-area d-md-flex align-items-center justify-content-between">
                                                <!-- Title -->
                                                <div class="inbox-title mb-15">
                                                    <h2>Inbox</h2>
                                                </div>
                                                <div class="search-wrapper mb-15">
                                                    <form action="#" method="get">
                                                        <input type="search" name="search" class="form-control mb-0 inbox-mail" placeholder="Search...">
                                                        <button type="submit" class="d-none"></button>
                                                    </form>
                                                </div>
                                            </div>

                                            <!-- Tools -->
                                            <div class="mail-tools tooltip-demo d-flex align-items-center mb-15 justify-content-between">
                                                <div class="mail-btn-group d-flex align-items-center mb-15">
                                                    <a href="#" class="btn"><i class="icon_trash_alt"></i></a>
                                                    <a href="#" class="btn"><i class="icon_mail_alt"></i></a>
                                                    <a href="#" class="btn"><i class="icon_folder-open_alt"></i></a>
                                                    <a href="#" class="btn"><i class="icon_tag_alt"></i></a>
                                                    <a href="#" class="btn"><i class="ti-settings"></i></a>
                                                </div>
                                                <div class="mail-pager d-flex align-items-center text-right mb-15">
                                                    <span>1-50 of 9</span>
                                                    <a href="#"><i class="arrow_carrot-left"></i></a>
                                                    <a href="#"><i class="arrow_carrot-right"></i></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="admi-mail-list mb-30">
                                            <!-- Single Mail -->
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
                                                <div class="admi-mail-date">11:30am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-3">
                                                            <label for="checkbox-3" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/2.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Hara Bose</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">10:30am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-4">
                                                            <label for="checkbox-4" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/3.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Lina Monino</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">10:00am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-5">
                                                            <label for="checkbox-5" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/4.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Jhon Hira</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">09:01am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-6">
                                                            <label for="checkbox-6" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/5.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Lava Sona</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">09:30am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-7">
                                                            <label for="checkbox-7" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/6.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Jhon Monino</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">09:15am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-8">
                                                            <label for="checkbox-8" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/7.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Jhon Midla</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">09:01am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-9">
                                                            <label for="checkbox-9" class="cr"></label>
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
                                                            <div class="admi-mail-from">Kira Nona</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">08:30am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-10">
                                                            <label for="checkbox-10" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/2.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Jhon Mathews</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">08:15am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-11">
                                                            <label for="checkbox-11" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/4.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Jhon Monino</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">07:53am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-13">
                                                            <label for="checkbox-13" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/5.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Fidra Asole</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">09:01am</div>
                                            </div>

                                            <!-- Single Mail -->
                                            <div class="admi-mail-item">
                                                <!-- Admi-mail-checkbox -->
                                                <div class="admi-mail-checkbox">
                                                    <div class="form-group mb-0">
                                                        <div class="checkbox d-inline">
                                                            <input type="checkbox" name="checkbox-1" id="checkbox-12">
                                                            <label for="checkbox-12" class="cr"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Admi-mail-star -->

                                                <a href="mail-view.html">
                                                    <!-- Admi-mail-body -->
                                                    <div class="admi-mail-body d-flex align-items-center mr-3">
                                                        <div class="mail-thumb flex-40-thubm mr-3">
                                                            <img class="border-radius-50" src="img/member-img/4.png" alt="">
                                                        </div>
                                                        <div class="div">
                                                            <div class="admi-mail-from">Fira Hadan</div>
                                                            <div class="admi-mail-subject">
                                                                <p class="mb-0 mail-subject--text--">Consolidated Renewal Reminder <span>Your orders are expiring soon. Renew them now.</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="admi-mail-date">08:30am</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Area -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Footer Area -->
                    <footer class="footer-area d-flex align-items-center flex-wrap">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p>Created by <a href="#">Theme-zome</a></p>
                        </div>
                        <!-- Footer Nav -->
                        <ul class="footer-nav d-flex align-items-center">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Purchase</a></li>
                        </ul>
                    </footer>
                </div>
            </div>
        </div>
    </div>
@endsection
