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
                        <a href="javascript:void(0)"><i class="zmdi zmdi-code-smartphone"></i> <span>Catalog</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('products')}}">- Products</a></li>
                            <li><a href="{{route('product_categories.index')}}">- Categories</a></li>
                            <li><a href="{{route('brands')}}">- Brands</a></li>
                            <li><a href="{{route('tags')}}">- Tags</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
