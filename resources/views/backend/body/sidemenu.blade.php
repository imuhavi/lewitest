<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class="@yield('dashboard_active')">
                <a href="{{ url( routePrefix() . '/dashboard') }}"
                    class="waves-effect waves-button"><span
                        class="menu-icon icon-home"></span>
                    <p>Dashboard</p><span class="active-page"></span>
                </a></li>

            <li class="@yield('category_active')"><a href="{{ url( routePrefix() . '/category') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-grid"></span>
                    <p>Category</p>
                </a></li>

            <li class="@yield('subcategory_active')"><a href="{{ url( routePrefix() . '/subcategory') }}"
                    class="waves-effect waves-button"><span class="menu-icon fa fa-sitemap"></span>
                    <p>Subcategory</p>
                </a></li>
            
            <li class="droplink @yield('product_active')"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon icon-present"></span>
                    <p>Product Management</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="@yield('subproduct_active')"><a href="{{ route('product.index') }}">Product List</a></li>
                    <li class="@yield('subproduct_active1')"><a href="{{ route('product.create') }}">Add New Product</a>
                    </li>
                    <li class="@yield('subproduct_active2')"><a href="{{ route('productDraft') }}">Product Draft</a></li>
                </ul>
            </li>

            <li class="@yield('brand_active')"><a href="{{ route('brand.index') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-badge"></span>
                    <p>Brands</p>
                </a></li>

            <li class="@yield('coupon_active')"><a href="{{ route('coupon.index') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-tag"></span>
                    <p>Coupons</p>
                </a></li>

            <li class="@yield('order_active')"><a href="{{ route('orderList') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-basket-loaded"></span>
                    <p>All Orders</p>
                </a></li>

            @if(routePrefix() === 'admin')
                <li class="droplink @yield('seller_active')"><a href="{{ route('sellerList') }}"
                        class="waves-effect waves-button"><span
                            class="menu-icon fa fa-user-plus"></span>
                        <p>Seller Management</p><span class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="@yield('subseller')"><a href="{{ route('sellerList') }}">Seller List</a></li>
                        <li class="@yield('subseller2')"><a href="{{ route('paymentWithdraw') }}">Withdraws</a></li>
                    </ul>
                </li>
            @elseif(routePrefix() === 'seller')
                <li class="@yield('withdraw_active')"><a href="{{ route('customerList') }}"
                        class="waves-effect waves-button"><span class="menu-icon fa fa-users"></span>
                        <p>My Withdraws</p>
                    </a>
                </li>
            @endif

            
            <li class="@yield('customer_active')"><a href="{{ route('customerList') }}"
                    class="waves-effect waves-button"><span class="menu-icon fa fa-users"></span>
                    <p>All Customers</p>
                </a>
            </li>

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon icon-envelope-open"></span>
                    <p>Mailbox</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="inbox.html">Inbox</a></li>
                    <li><a href="message-view.html">View Message</a></li>
                    <li><a href="compose.html">Compose</a></li>
                </ul>
            </li>

            <li class="droplink"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon icon-pointer"></span>
                    <p>Maps</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="maps-google.html">Google Maps</a></li>
                    <li><a href="maps-vector.html">Vector Maps</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- Page Sidebar Inner -->
</div><!-- Page Sidebar -->