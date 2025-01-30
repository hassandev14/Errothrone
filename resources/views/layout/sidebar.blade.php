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
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <!-- CATEGORY LINKS -->
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fa fa-shopping-cart"></i>Category</a>
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
                        <i class="fa fa-shopping-cart"></i>Brand</a>
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
                        <i class="fa fa-shopping-cart"></i>Product</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="{{ route('products.index') }}">Product List</a>
                        </li>
                        <li>
                            <a href="{{ route('products.create') }}">Add Product</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
