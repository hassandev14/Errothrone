<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li class="active has-sub">
                    <a class="js-arrow" href="/">
                        <i class="fas fa-chart-line"></i>Dashboard</a>
                </li>
                <!-- CATEGORY LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-th-list"></i>Category</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('categories.index') }}">Category List</a>
                        </li>
                        <li>
                            <a href="{{ route('categories.create') }}">Add Category</a>
                        </li>
                    </ul>
                </li>
                <!-- BRANDS LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-cogs"></i>Brand</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('brands.index') }}">Brand List</a>
                        </li>
                        <li>
                            <a href="{{ route('brands.create') }}">Add Brand</a>
                        </li>
                    </ul>
                </li>
                <!-- PRODUCT LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-box"></i>Product</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('products.index') }}">Product List</a>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}">Add Product</a>
                        </li>
                        <li>
                            <a href="{{ route('stocks.index') }}">Add Stock</a>
                        </li>
                    </ul>
                </li>
                 <!-- ORDER LINKS -->
                 <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-bullhorn"></i>Order</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('orders.index') }}">Order List</a>
                        </li>
                        <li>
                            <a href="{{ route('orders_item.index') }}">Order Item List</a>
                        </li>
                        <li>
                            <a href="{{ route('order_returns.index') }}">Order Return</a>
                        </li>
                    </ul>
                </li>
                <!-- CART LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-shopping-cart"></i>Cart</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('carts.index') }}">Cart List</a>
                        </li>
                    </ul>
                </li>
                <!-- PAYMENT LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-credit-card"></i>Payment</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('payments.index') }}">Payment List</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
