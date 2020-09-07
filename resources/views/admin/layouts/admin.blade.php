<!doctype html>
<html lang="en">

<head>
    <!-- Include header resources files here -->
    @include('admin.partials.layout.resources')
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
        @include('admin.partials.layout.sidebar')

        <!-- Page Content -->
        <div class="ecaps-page-content">
            <!-- Top Header Area -->
            @include('admin.partials.layout.top_header')

            <!-- Main Content Area -->
            <div class="main-content">
                <div class="container-fluid">
                    
                    @yield('content')

                </div>

                <!-- Footer Area -->
                @include('admin.partials.layout.footer')
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