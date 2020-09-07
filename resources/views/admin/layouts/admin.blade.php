<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Antina - Responsive Bootstrap Admin Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.png">

    <!-- Master Stylesheet [If you remove this CSS file, your file will be broken undoubtedly.] -->
    <link rel="stylesheet" href="{{asset('admin/style.css')}}">
    <!-- Must needed plugins to the run this Template -->
    <script src="{{asset('admin/js/jquery.min.js')}}"></script>
    <script src="{{asset('admin/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/js/bundle.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/setting.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/fullscreen.js')}}"></script>

    <!-- Active JS -->
    <script src="{{asset('admin/js/default-assets/active.js')}}"></script>
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-load"></div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Page Wrapper Area Start **********
    ======================================= -->
    <div class="ecaps-page-wrapper">
        <!-- Sidemenu Area -->
        <div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
            <div class="ecaps-logo">
                <a href="index.html"><img class="desktop-logo" src="{{asset('admin/img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{asset('admin/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
            </div>

            <!-- Side Nav -->
            <div class="ecaps-sidenav" id="ecapsSideNav">
                <!-- Side Menu Area -->
                <div class="side-menu-area">
                    <!-- Sidebar Menu -->
                    <nav>
                        <ul class="sidebar-menu" data-widget="tree">
                            <li class="active"><a href="index.html"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-code-smartphone"></i> <span>Apps</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="calendar.html">- Calendar</a></li>
                                    <li><a href="widgets.html">- Widgets</a></li>
                                    <li><a href="chat-box.html">- Chat box</a></li>
                                    <li><a href="timeline.html">- Timeline</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-email"></i> <span>Email</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="mail-inbox.html">- Inbox</a></li>
                                    <li><a href="mail-view.html">- Mail View</a></li>
                                    <li><a href="compose-mail.html">- Compose Mail</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-cake"></i> <span>Hot Pages</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="analytic-customer.html">- Customers</a></li>
                                    <li><a href="analytic-report.html">- Reports</a></li>
                                    <li><a href="crm-add-clint.html">- Add Client</a></li>
                                    <li><a href="crm-clint-list.html">- Client List</a></li>
                                    <li><a href="crm-contact.html">- Contacts</a></li>
                                    <li><a href="crm-profile-customer.html">- Profile</a></li>
                                    <li><a href="crm-task.html">- Task</a></li>
                                    <li><a href="crm-leads.html">- Leads</a></li>
                                    <li><a href="cryp-exchange.html">- Exchange</a></li>
                                    <li><a href="crypto-wallet.html">- Wallet</a></li>
                                    <li><a href="crypto-news.html">- News</a></li>
                                    <li><a href="crypto-setting.html">- Setting</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-code"></i> <span>UI Kit</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="alert.html">- Alert</a></li>
                                    <li><a href="avatar.html">- Avatar</a></li>
                                    <li><a href="buttons.html">- Button</a></li>
                                    <li><a href="card.html">- Card</a></li>
                                    <li><a href="notification.html">- Notification</a></li>
                                    <li><a href="general.html">- General</a></li>
                                    <li><a href="progressbar.html">- Progressbar</a></li>
                                    <li><a href="preloader.html">- Preloader</a></li>
                                    <li><a href="tab.html">- Tab</a></li>
                                    <li><a href="dropdown.html">- Dropdown</a></li>
                                    <li><a href="typography.html">- Typography</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-print"></i> <span>Search</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="job.html">- Job News</a></li>
                                    <li><a href="job-description.html">- Description</a></li>
                                    <li><a href="crm-project.html">- Project</a></li>
                                    <li><a href="project-details.html">- Project Details</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-shield-check"></i><span>Advanced</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="blank.html">- Blank Page</a></li>
                                    <li><a href="gallery.html">- Gallery</a></li>
                                    <li><a href="light-box-gallery.html">- Light Box Gallery</a></li>
                                    <li><a href="modals.html">- Modals</a></li>
                                    <li><a href="profile.html">- Profile</a></li>
                                    <li><a href="ribbons.html">- Ribbons</a></li>
                                    <li><a href="sweet-alert.html">- Sweet Alert</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-car"></i> <span>Shop</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="product.html">- Product</a></li>
                                    <li><a href="e-add-product.html">- Add Product</a></li>
                                    <li><a href="product-details.html">- Single Product</a></li>
                                    <li><a href="order.html">- Order</a></li>
                                    <li><a href="cart.html">- Cart</a></li>
                                    <li><a href="checkout.html">- Checkout</a></li>
                                    <li><a href="invoice.html">- Invoice</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-assignment"></i><span>General Pages</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="slider.html">- Slider</a></li>
                                    <li><a href="range-slider.html">- Range Slider</a></li>
                                    <li><a href="contact.html">- Contact</a></li>
                                    <li><a href="login.html">- Login</a></li>
                                    <li><a href="register.html">- Register</a></li>
                                    <li><a href="forget-password.html">- Forget Password</a></li>
                                    <li><a href="lock-screen.html">- Lock Screen</a></li>
                                    <li><a href="404.html">- 404</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-chart"></i><span>Charts</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="chartist.html">- Chartist Chart</a></li>
                                    <li><a href="chart-js.html">- Chart Js</a></li>
                                    <li><a href="morris-chart.html">- Morris Chart</a></li>
                                    <li><a href="apex-chart.html">- Apex Chart</a></li>
                                    <li><a href="c3-charts.html">- C3 Chart</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-washing-machine"></i><span>Forms</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="basic-form.html">- Basic Form</a></li>
                                    <li><a href="advanced-elements.html">- Elements</a></li>
                                    <li><a href="form-validation.html">- Validation</a></li>
                                    <li><a href="form-wizard.html">- Form Wizard</a></li>
                                    <li><a href="form-input-mask.html">- Input Mask</a></li>
                                    <li><a href="file-upload.html">- File upload</a></li>
                                    <li><a href="rating.html">- Rating</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-grid"></i><span>Tables</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="basic-table.html">- Basic Table</a></li>
                                    <li><a href="filter-table.html">- Filter Table</a></li>
                                    <li><a href="data-table.html">- Data Table</a></li>
                                    <li><a href="price-table.html">- Price Table</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-time-interval"></i><span>Icons</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="font-awesome.html">- Font-Awsome Icons</a></li>
                                    <li><a href="pe-7-stroke.html">- Pe-7 Stroke Icons</a></li>
                                    <li><a href="matarial-icons.html">- Materialize Icons</a></li>
                                    <li><a href="themify-icons.html">- Themify Icons</a></li>
                                    <li><a href="elegant-icons.html">- Elegant Icons</a></li>
                                    <li><a href="et-line-icons.html">- Et-line Icons</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-google-maps"></i><span>Maps</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="vector-map.html">- Vector Map</a></li>
                                    <li><a href="google-map.html">- Google Map</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="javascript:void(0)"><i class="zmdi zmdi-view-list"></i> <span>Multilevel</span> <i class="fa fa-angle-right"></i></a>
                                <ul class="treeview-menu">
                                    <li><a href="#">Level One</a></li>
                                    <li class="treeview">
                                        <a href="#">Level One <i class="fa fa-angle-right"></i></a>
                                        <ul class="treeview-menu">
                                            <li><a href="#">- Level Two</a></li>
                                            <li><a href="#">- Level Two</a></li>
                                            <li><a href="#">- Level Two</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Level One</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            <header class="top-header-area d-flex align-items-center justify-content-between">
                <div class="left-side-content-area d-flex align-items-center">
                    <!-- Mobile Logo -->
                    <div class="mobile-logo mr-3 mr-sm-4">
                        <a href="index.html"><img src="img/core-img/small-logo.png" alt="Mobile Logo"></a>
                    </div>

                    <!-- Triggers -->
                    <div class="ecaps-triggers mr-1 mr-sm-3">
                        <div class="menu-collasped" id="menuCollasped">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                        <div class="mobile-menu-open" id="mobileMenuOpen">
                            <i class="zmdi zmdi-menu"></i>
                        </div>
                    </div>
                </div>

                <div class="right-side-navbar d-flex align-items-center justify-content-end">
                    <!-- Mobile Trigger -->
                    <div class="right-side-trigger" id="rightSideTrigger">
                        <i class="fa fa-reorder"></i>
                    </div>

                    <!-- Top Bar Nav -->
                    <ul class="right-side-content d-flex align-items-center">
                        <!-- Left Side Nav -->
                        <li class="hide-phone app-search">
                            <form role="search" class=""><input type="text" placeholder="Search..." class="form-control"> <button type="submit" class="mr-0"><i class="fa fa-search"></i></button></form>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope-o" aria-hidden="true"></i></button>

                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Message Area -->
                                <div class="top-message-area">
                                    <!-- Heading -->
                                    <div class="top-message-heading">
                                        <div class="heading-title">
                                            <h6>Messages</h6>
                                        </div>
                                        <span>07 New</span>
                                    </div>
                                    <div class="message-box" id="messageBox">
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/10.png" alt="">
                                            <span class="message-text">
                                                <span>Jhon Lina</span>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, voluptas!</span>
                                            </span>
                                        </a>
                                        <span class="message-heading">New Messages</span>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/11.png" alt="">
                                            <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/7.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/8.png" alt="">
                                            <span class="message-text">
                                                <span>The Complete JavaScript Handbook</span>
                                                <span>1 hour ago</span>
                                            </span>
                                        </a>
                                        <span class="message-heading">Hot Messages</span>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/9.png" alt="">
                                            <span class="message-text">
                                                <span>New comment: ecaps Template</span>
                                                <span>2 days ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/10.png" alt="">
                                            <span class="message-text">
                                                <span>6-hour video course on Angular</span>
                                                <span>3 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/11.png" alt="">
                                            <span class="message-text">
                                                <span>Google Ads: You'll get a refund soon</span>
                                                <span>27 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/12.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell-o" aria-hidden="true"></i> <span class="active-status"></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <!-- Top Notifications Area -->
                                <div class="top-notifications-area">
                                    <!-- Heading -->
                                    <div class="notifications-heading">
                                        <div class="heading-title">
                                            <h6>Notifications</h6>
                                        </div>
                                    </div>

                                    <div class="notifications-box" id="notificationsBox">
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/1.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/2.png" alt="">
                                            <span class="message-text">
                                                <span>Andrew Done Project</span>
                                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, quam.</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/3.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/4.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/5.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/6.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                        <a href="#" class="dropdown-item">
                                            <img src="img/member-img/7.png" alt="">
                                            <span class="message-text">
                                                <span>New Feature: HTTP Method Selection</span>
                                                <span>56 min ago</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/member-img/4.png" alt=""></button>
                            <div class="dropdown-menu header-profile dropdown-menu-right">
                                <!-- User Profile Area -->
                                <div class="user-profile-area">
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-account profile-icon" aria-hidden="true"></i> My profile</a>
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-email-open profile-icon" aria-hidden="true"></i> Messages</a>
                                    <a href="#" class="dropdown-item"><i class="zmdi zmdi-brightness-7 profile-icon" aria-hidden="true"></i> Account settings</a>
                                    <a href="#" class="dropdown-item"><i class="ti-unlink profile-icon" aria-hidden="true"></i> Sign-out</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>

            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-6 col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-id-badge text-primary font-30"></i></div><span class="badge badge-primary">Sessions</span>
                                    <h4 class="my-3">226k</h4>
                                    <p class="mb-0"><span class="text-success"><i class="fa fa-level-up mr-1" aria-hidden="true"></i>7.5%</span>New Sessions Today</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-md-6 col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-bar-chart-o font-30"></i></div><span class="badge badge-secondary">Avg.Sessions</span>
                                    <h4 class="my-3">00:28</h4>
                                    <p class="mb-0"><span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>1.4%</span> Weekly Avg.Sessions</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xl-4">
                            <div class="card box-margin">
                                <div class="card-body">
                                    <div class="float-right"><i class="fa fa-codiepie text-warning font-30"></i></div><span class="badge badge-warning">Bounce Rate</span>
                                    <h4 class="my-3">$2500</h4>
                                    <p class="mb-0"><span class="text-danger"><i class="fa fa-level-down mr-1" aria-hidden="true"></i>45%</span> Bounce Rate Weekly</p>
                                </div>
                                <!--end card-body-->
                            </div>
                            <!--end card-->
                        </div>

                        <div class="col-xl-8 box-margin height-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Monthly sales</h4>
                                    <!--  Chart -->
                                    <div class="dashboard-area">
                                        <div id="apexChartD"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4">
                            <div class="card mb-30">
                                <div class="card-body bg-gradient-dark">
                                    <img class="mb-20" src="img/bg-img/icon-6.png" alt="">
                                    <p class="text-danger font-weight-bold font-17 mb-10">Solutions</p>
                                    <h2 class="text-success font-28">Work Process.</h2>
                                    <p class="mb-0 text-white">We put your ideas and thus your wishes in the form of a unique web project.</p>
                                    <a class="btn btn-light btn-sm mt-20" href="#">Contac Us</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 box-margin height-card">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Web Analytics</h5>
                                    <div class="transaction-area">
                                        <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                            <div class="media d-flex justify-content-center align-items-center">
                                                <div class="icon-section bg-primary-soft">
                                                    <i class="fa fa-file-code-o"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">New Users</h6>
                                                    <p class="mb-0">6 June 2019</p>
                                                </div>
                                            </div>

                                            <div class="amount">
                                                <p class="mb-0 font-weight-bold text-dark">57,0000</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                            <div class="media d-flex justify-content-center align-items-center">
                                                <div class="icon-section bg-danger-soft">
                                                    <i class="fa fa-newspaper-o"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Page Views</h6>
                                                    <p class="mb-0">9 July 2019</p>
                                                </div>
                                            </div>

                                            <div class="amount">
                                                <p class="mb-0 font-weight-bold text-dark">79,496</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                            <div class="media d-flex justify-content-center align-items-center">
                                                <div class="icon-section bg-success-soft">
                                                    <i class="fa fa-clone"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Sessions</h6>
                                                    <p class="mb-0">6 April 2019</p>
                                                </div>
                                            </div>

                                            <div class="amount">
                                                <p class="mb-0 font-weight-bold text-dark">47,381</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                            <div class="media d-flex justify-content-center align-items-center">
                                                <div class="icon-section bg-danger-soft">
                                                    <i class="fa fa-newspaper-o"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Page Views</h6>
                                                    <p class="mb-0">9 July 2019</p>
                                                </div>
                                            </div>

                                            <div class="amount">
                                                <p class="mb-0 font-weight-bold text-dark">79,496</p>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row list-group-item align-items-center justify-content-between">
                                            <div class="media d-flex justify-content-center align-items-center">
                                                <div class="icon-section bg-danger-soft">
                                                    <i class="icon-wallet"></i>
                                                </div>
                                                <div class="media-body">
                                                    <h6 class="mb-1">Through</h6>
                                                    <p class="mb-0">22 Jan 2019</p>
                                                </div>
                                            </div>

                                            <div class="amount">
                                                <p class="mb-0 font-weight-bold text-dark">14,8294</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 box-margin height-card">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">New Orders</h6>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Company</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Managed</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="img/shop-img/20.jpg" class="chat-img mr-3" alt="...">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">Nte.Ltd</h6>
                                                                <span class="font-13">Mysqul</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="txt-14">
                                                        12.011.19
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-soft-success">
                                                            Processing
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">John Doe</h6>
                                                                <span class="font-13">Photographer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                            <i class="fa fa-archive"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="img/shop-img/21.png" class="chat-img mr-3" alt="...">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">Dri.Ltd</h6>
                                                                <span class="font-13">Mysqul</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="txt-14">
                                                        14.011.19
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-soft-warning">
                                                            Processing
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">John Doe</h6>
                                                                <span class="font-13">Devloper</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                            <i class="fa fa-archive"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="img/shop-img/22.png" class="chat-img mr-3" alt="...">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">Sna.Ltd</h6>
                                                                <span class="font-13">Mysqul</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="txt-14">
                                                        18.011.19
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-soft-info">
                                                            Processing
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">John Doe</h6>
                                                                <span class="font-13">Devloper</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                            <i class="fa fa-archive"></i>
                                                        </a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="media">
                                                            <img src="img/shop-img/23.png" class="chat-img mr-3" alt="...">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">Cta.Ltd</h6>
                                                                <span class="font-13">Mysqul</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="txt-14">
                                                        22.011.19
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-soft-primary">
                                                            Processing
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="media">
                                                            <div class="media-body company-details">
                                                                <h6 class="font-15 mb-1">John Doe</h6>
                                                                <span class="font-13">Photographer</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Edit">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <a href="#" class="action-item mr-2" data-toggle="tooltip" title="" data-original-title="Archive">
                                                            <i class="fa fa-archive"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Revenue</h4>
                                    <div class="ecommerce-chart">
                                        <div id="apex2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 box-margin height-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Sessions By Channel</h4>
                                    <div id="chartSummary1" class="chartSummary"></div>
                                    <div class="row px-4">
                                        <div class="col-4 mt-15">
                                            <h6 class="font-13 mb-1">Organic Search</h6>
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0">120 <small class="text-muted">25%</small></h5>
                                            </div>
                                        </div><!-- col -->
                                        <div class="col-4 mt-15">
                                            <h6 class="font-13 mb-1">Email</h6>
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0">987 <small class="text-muted">20%</small></h5>
                                            </div>
                                        </div><!-- col -->
                                        <div class="col-4 mt-15">
                                            <h6 class="font-13 mb-1">Social Media</h6>
                                            <div class="d-flex align-items-center">
                                                <h5 class="mb-0">154 <small class="text-muted">25%</small></h5>
                                            </div>
                                        </div><!-- col -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-4 box-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h6 class="card-title">Sales Statement</h6>
                                    <div class="crm-statement border p-4">
                                        <h6 class="text-center font-weight-bold mb-30 font-24">Average</h6>
                                        <div class="row">
                                            <div class="col text-center mb-15">
                                                <h6 class="font-14 mb-1">Daily</h6>
                                                <p class="font-16 mb-0">$300</p>
                                            </div>
                                            <div class="col text-center mb-15">
                                                <h6 class="font-14 mb-1">Weekly</h6>
                                                <p class="font-16 mb-0">$1400</p>
                                            </div>
                                            <div class="col text-center mb-15">
                                                <h6 class="font-14 mb-1">Monthly</h6>
                                                <p class="font-16 mb-0">$5000</p>
                                            </div>
                                        </div>
                                        <div class="progress h-6 mt-15 mb-10">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-30">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-10">
                                            <h6 class="card-title mb-0">Purpose Website</h6>
                                        </div>
                                        <div class="col-2 text-right">
                                            <div class="actions">
                                                <div class="dropdown" data-toggle="dropdown" aria-expanded="false">
                                                    <a href="#" class="action-item"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(29px, 32px, 0px);">
                                                        <a href="#" class="dropdown-item">Refresh</a>
                                                        <a href="#" class="dropdown-item">Manage Widgets</a>
                                                        <a href="#" class="dropdown-item">Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body pt-0">
                                    <div class="p-3 border border-dashed">
                                        <span class="text-dark font-weight-bold font-16">Invoice #10045</span>
                                        <p class="mb-0">Et consequuntur sequi placeat.</p>
                                        <div class="row align-items-center mt-30">
                                            <div class="col-6">
                                                <h6 class="mb-0 font-18">$2500</h6>
                                                <span class="text-sm text-muted">Amount</span>
                                            </div>
                                            <div class="col-6">
                                                <h6 class="mb-0 font-18">20 Apr</h6>
                                                <span class="text-sm text-muted">Due Date</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media mt-15 align-items-center">
                                        <img alt="Image" src="img/shop-img/18.jpg" class="avatar  rounded-circle avatar-sm">
                                        <div class="media-body pl-3">
                                            <div class="text-sm my-0">Marta Stweart <a href="#" class="text-primary font-weight-600">@dribbble</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-xl-4">
                            <div class="card mb-30">
                                <div class="card-body">
                                    <h6 class="card-title">Sell Coin</h6>
                                    <form action="#">
                                        <div class="input-group mb-20">
                                            <div class="input-group-prepend">
                                                <button class="btn bg-light btn-sm input-group-text" type="button">Amount</button>
                                            </div>
                                            <input type="number" name="quant[1]" class="form-control" placeholder="859">
                                            <div class="input-group-append">
                                                <button class="btn bg-light btn-sm input-group-text pdn-x-25" type="button">BTC</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-20">
                                            <div class="input-group-prepend">
                                                <button class="btn bg-light btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Price
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Last Trade Price</a>
                                                    <a class="dropdown-item" href="#">Last Buy Price</a>
                                                    <a class="dropdown-item" href="#">Last Sell Price</a>

                                                </div>
                                            </div>
                                            <input type="number" name="quant[1]" class="form-control" placeholder="$589.00">
                                            <div class="input-group-append">
                                                <button class="btn bg-light btn-sm input-group-text" type="button">$ Dollar</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-20">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-primary" type="button">Total</button>
                                            </div>
                                            <input type="number" name="quant[1]" class="form-control" placeholder="895">
                                            <div class="input-group-append">
                                                <button class="btn bg-light btn-sm input-group-text" type="button">$ Dollar</button>
                                            </div>
                                        </div>

                                        <button class="btn btn-danger btn-sm">Sell Coin</button>
                                    </form>
                                </div>
                            </div>
                            <!-- ./card -->
                        </div>

                        <div class="col-12">
                            <div class="card mb-30">
                                <div class="card-body pb-0">
                                    <h6 class="card-title">Transaction History</h6>
                                    <div class="table-responsive table-borered">
                                        <table class="table table-analytics">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>Status</th>
                                                    <th>Tran ID</th>
                                                    <th>Acc%</th>
                                                    <th>Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1.27.2019</td>
                                                    <td>02:22 PM</td>
                                                    <td><span class="badge badge-soft-danger">Paused</span></td>
                                                    <td>DFRASEDE</td>
                                                    <td>
                                                        3.9%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$2.39</td>
                                                </tr>
                                                <tr>
                                                    <td>2.11.2019</td>
                                                    <td>12:46 AM</td>
                                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                                    <td>N89528GU</td>
                                                    <td>
                                                        6.83%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 32%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$8.15</td>
                                                </tr>
                                                <tr>
                                                    <td>3.12.2019</td>
                                                    <td>05:02 AM</td>
                                                    <td><span class="badge badge-soft-danger">Paused</span></td>
                                                    <td>5FUA8ADN</td>
                                                    <td>
                                                        8.15%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 26%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$6.83</td>
                                                </tr>
                                                <tr>
                                                    <td>4.5.2019</td>
                                                    <td>07:22 PM</td>
                                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                                    <td>N5Q559S5</td>
                                                    <td>
                                                        3.06%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 67%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$7.15</td>
                                                </tr>
                                                <tr>
                                                    <td>4.22.2019</td>
                                                    <td>10:56 AM</td>
                                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                                    <td>88SFGDUD</td>
                                                    <td>
                                                        6.25%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 63%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$6.63</td>
                                                </tr>

                                                <tr>
                                                    <td>6.28.2019</td>
                                                    <td>12:30 PM</td>
                                                    <td><span class="badge badge-soft-success">Completed</span></td>
                                                    <td>D5DDNA2D</td>
                                                    <td>
                                                        5.14%
                                                        <div class="progress mt-2 h-6">
                                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 96%;" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>

                                                    </td>
                                                    <td>$7.06</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- ./card -->
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
        </div>
    </div>

    <!-- ======================================
    ********* Page Wrapper Area End ***********
    ======================================= -->

    

    <!-- These plugins only need for the run this page -->
    <script src="{{asset('admin/js/default-assets/ammap.min.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/radar.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/widget-page-chart-active.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/apexchart.min.js')}}"></script>
    <script src="{{asset('admin/js/default-assets/dashboard-active.js')}}"></script>

</body>

</html>