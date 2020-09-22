@php
    function activeLink($path){
        return request()->routeIs($path.'*') ? 'active' : '';
    }

    function userActiveLink($path){
     return request()->is('*'.$path.'*') ? 'active' : '';
    }

@endphp

<div class="ecaps-sidemenu-area">
            <!-- Desktop Logo -->
    <div class="ecaps-logo">
        <a href="{{route('dashboard')}}"><img class="desktop-logo" src="{{asset('admin/img/core-img/logo.png')}}" alt="Desktop Logo"> <img class="small-logo" src="{{asset('admin/img/core-img/small-logo.png')}}" alt="Mobile Logo"></a>
    </div>

    <!-- Side Nav -->
    <div class="ecaps-sidenav" id="ecapsSideNav">
        <!-- Side Menu Area -->
        <div class="side-menu-area">
            <!-- Sidebar Menu -->
            <nav>
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a  class="{{activeLink('dashboard')}}" href="{{route('dashboard')}}"><i class="zmdi zmdi-view-web"></i> <span>Dashboard</span></a></li>
                    <li class="treeview {{ request()->routeIs('products.*','product-categories.*','brands.*','tags.*','warehouses.*','product-availabilities.*','product-sizes.*','product-colors.*') ? 'active' : '' }}" >
                        <a href="javascript:void(0)"><i class="zmdi zmdi-shopping-basket"></i> <span>Catalog</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li ><a class="{{activeLink('products')}}" href="{{route('products.index')}}">- Products</a></li>
                            <li ><a class="{{activeLink('product-categories')}}" href="{{route('product-categories.index')}}">- Categories</a></li>
                            <li><a class="{{activeLink('brands')}}" href="{{route('brands.index')}}">- Brands</a></li>
                            <li><a class="{{activeLink('tags')}}" href="{{route('tags.index')}}">- Tags</a></li>
                            <li><a class="{{activeLink('warehouses')}}" href="{{route('warehouses.index')}}">- Warehouses</a></li>
                            <li><a class="{{activeLink('product-availabilities')}}" href="{{route('product-availabilities.index')}}">- Availabilities</a></li>
                            <li><a class="{{activeLink('product-sizes')}}" href="{{route('product-sizes.index')}}">- Product Sizes</a></li>
                            <li><a class="{{activeLink('product-colors')}}" href="{{route('product-colors.index')}}">- Product Colors</a></li>
                        </ul>
                    </li>

                    <li class="treeview {{ request()->routeIs('main-sliders.*') ? 'active' : '' }}" >
                        <a href="javascript:void(0)"><i class="zmdi zmdi-collection-folder-image"></i> <span>Sliders</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a class="{{activeLink('main-sliders')}}" href="{{route('main-sliders.index')}}">- Main Slider</a></li>
                        </ul>
                    </li>

                    <li class="treeview {{ request()->routeIs('users.*') ? 'active' : '' }}">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-accounts-alt"></i> <span>Users</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu {{ request()->routeIs('users.*') ? 'active' : '' }}">
                            <li><a class="{{userActiveLink('super-admin')}}" href="{{route('users.index',['type'=>'super-admin'])}}">- Super Admins</a></li>
                            <li><a class="{{request()->is('admin/users/admin*') ? 'text-success' : ''}}" href="{{route('users.index',['type'=>'admin'])}}">- Admins</a></li>
                            <li><a class="{{userActiveLink('vendor')}}" href="{{route('users.index',['type'=>'vendor'])}}">- Vendors</a></li>
                            <li><a class="{{userActiveLink('editor')}}" href="{{route('users.index',['type'=>'editor'])}}">- Editors</a></li>
                            <li><a class="{{userActiveLink('developer')}}" href="{{route('users.index',['type'=>'developer'])}}">- Developers</a></li>
                            <li><a class="{{userActiveLink('customer')}}" href="{{route('users.index',['type'=>'customer'])}}">- Customers</a></li>
                            <li><a class="{{activeLink('vendor-applications')}}" href="{{route('vendor-applications.index')}}">- Vendor Applications</a></li>
                        </ul>
                    </li>

                    <li class="treeview {{ request()->routeIs('arrivals.*','product-features.*','ecom-supports.*') ? 'active' : '' }}">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>Website Settings</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu ">
                            <li><a class=" {{activeLink('arrivals')}}" href="{{route('arrivals.index')}}">- New Arrival Tab</a></li>
                            <li><a class="{{activeLink('product-features')}}" href="{{route('product-features.index')}}">- Feature Product Tab </a></li>
                            <li><a class="{{activeLink('ecom-supports')}}" href="{{route('ecom-supports.index')}}">- E-commerce Supports</a></li>
                        </ul>
                    </li>

                    <li class="treeview {{ request()->routeIs('orders.*') ? 'active' : '' }}">
                        <a href="javascript:void(0)"><i class="zmdi zmdi-settings"></i> <span>Shop</span> <i class="fa fa-angle-right"></i></a>
                        <ul class="treeview-menu ">
                            <li><a class=" {{activeLink('orders')}}" href="{{route('orders.index')}}">- Ordered</a></li>
                            <li><a class=" {{activeLink('ecom-settings')}}" href="{{route('ecom-settings.index')}}">- E-com Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
