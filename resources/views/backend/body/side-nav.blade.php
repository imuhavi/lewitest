<div class="page-sidebar sidebar">
    <div class="page-sidebar-inner slimscroll">
        <ul class="menu accordion-menu">
            <li class="@yield('dashboard_active')"><a href="{{ url('admin/dashboard') }}"
                    class="waves-effect waves-button"><span
                        class="menu-icon icon-home"></span>
                    <p>Dashboard</p><span class="active-page"></span>
                </a></li>

            <li class="@yield('category_active')"><a href="{{ route('category.index') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                    <p>Category</p>
                </a></li>

            <li class="@yield('subcategory_active')"><a href="{{ route('subcategory.index') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                    <p>Subcategory</p>
                </a></li>
            
            <li class="droplink @yield('product_active')"><a href="#" class="waves-effect waves-button"><span
                        class="menu-icon icon-envelope-open"></span>
                    <p>Product Management</p><span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="{{ route('product.index') }}">Product List</a></li>
                    <li><a href="{{ route('product.create') }}">Add New Product</a></li>
                    <li><a href="{{ route('productDraft') }}">Product Draft</a></li>
                </ul>
            </li>

            <li class="@yield('coupon_active')"><a href="{{ route('coupon.index') }}"
                    class="waves-effect waves-button"><span class="menu-icon icon-user"></span>
                    <p>Coupons</p>
                </a></li>

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