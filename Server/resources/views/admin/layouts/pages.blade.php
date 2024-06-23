
<li class="navbar-vertical-aside-has-menu ">
    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle " href="javascript:;" title="Pages">
        <i class="tio-pages-outlined nav-icon"></i>
        <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">Pages</span>
    </a>


    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">

        <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
            <li class="nav-item">
                <a class="nav-link " href="{{ route('categories.index') }}" title="Categories">
                    <span class="tio-circle-outlined nav-indicator-icon"></span>
                    <span class="text-truncate">Categories</span>
                </a>
            </li>

        </ul>



        <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Users">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">Users</span>
            </a>


            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('users.index') }}" title="UsersOverview">
                        <span class="tio-circle-outlined nav-indicator-icon"></span>
                        <span class="text-truncate">Users Overview</span>
                    </a>
                </li>

            </ul>
        </li>






{{--        <li class="navbar-vertical-aside-has-menu ">--}}
{{--            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="User Profile">--}}
{{--                <span class="tio-circle nav-indicator-icon"></span>--}}
{{--                <span class="text-truncate">User Profile <span class="badge badge-primary badge-pill ml-1">5</span></span>--}}
{{--            </a>--}}

{{--            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="user-profile.html" title="Profile">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Profile</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="user-profile-teams.html" title="Teams">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Teams</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="user-profile-projects.html" title="Projects">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Projects</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="user-profile-connections.html" title="Connections">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Connections</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="user-profile-my-profile.html" title="My Profile">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">My Profile</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="navbar-vertical-aside-has-menu ">--}}
{{--            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Account">--}}
{{--                <span class="tio-circle nav-indicator-icon"></span>--}}
{{--                <span class="text-truncate">Account</span>--}}
{{--            </a>--}}

{{--            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="account-settings.html" title="Settings">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Settings</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="account-billing.html" title="Billing">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Billing</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="account-invoice.html" title="Invoice">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">Invoice</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link " href="account-api-keys.html" title="API Keys">--}}
{{--                        <span class="tio-circle-outlined nav-indicator-icon"></span>--}}
{{--                        <span class="text-truncate">API Keys</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </li>--}}

        <li class="navbar-vertical-aside-has-menu ">
            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="E-commerce">
                <span class="tio-circle nav-indicator-icon"></span>
                <span class="text-truncate">E-commerce</span>
            </a>

            <ul class="js-navbar-vertical-aside-submenu nav nav-sub">


                <li class="navbar-vertical-aside-has-menu ">
                    <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:;" title="Products">
                        <span class="tio-circle-outlined nav-indicator-icon"></span>
                        <span class="text-truncate">Products</span>
                    </a>

                    <ul class="js-navbar-vertical-aside-submenu nav nav-sub">
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('products.index') }}" title="Products">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Products</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('productDetail.index') }}" title="Product Details">
                                <span class="tio-circle nav-indicator-icon"></span>
                                <span class="text-truncate">Product Details</span>
                            </a>
                        </li>

                    </ul>
                </li>


                <li class="nav-item">
                    <a class="nav-link " href="{{ route('roles.index') }}" title="Roles">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Roles</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('cart_details.index') }}" title="Cart_details">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Cart_details</span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link " href="{{ route('colors.index') }}" title="Colors">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Colors</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{ route('returnItem.index') }}" title="ReturnItem">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">ReturnItem</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('images.index')}}" title="Hinhanh">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Hình ảnh</span>
                    </a>
                </li>

                <li class="nav-item">

                    <a class="nav-link " href="{{route('news.index')}}" title="News">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">News</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('fabrics.index')}}" title="Chatlieu">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Chất Liệu</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('promotion.index') }}" title="Promotion">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Promotion</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('feedbacks.index')}}" title="Binhluan">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Bình Luận</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('payments.index')}}" title="Payments">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Payments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('sizes.index')}}" title="Sizes">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Sizes</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('bill.index')}}" title="Bill">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Bill</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('billDetail.index')}}" title="BillDetail">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">BillDetail</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link " href="{{route('cart.index')}}" title="Cart">
                        <span class="tio-circle nav-indicator-icon"></span>
                        <span class="text-truncate">Cart</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</li>

