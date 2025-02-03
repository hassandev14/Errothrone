@include('layout.header')

<div class="overview-wrap">
    <h2 class="title-1">overview</h2>
</div>
</div>
</div>
<!-- card 1 -->
<div class="tf-section-4 mb-30">
    <!-- chart-default -->
    <div class="wg-chart-default">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
                <div class="image type-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#22C55E" />
                    </svg>
                    <i class="icon-shopping-bag"></i>
                </div>
                <div>
                    <div class="body-text mb-2">Total Sales</div>
                    <h4>{{ $orders }}</h4>
                </div>
            </div>
            <div class="box-icon-trending up">
                <i class="icon-trending-up"></i>
                <div class="body-title number">1.56%</div>
            </div>
        </div>
        <div class="wrap-chart">
            <div id="line-chart-1"></div>
        </div>
    </div>
    <!-- /chart-default -->
    <!-- chart-default -->
    <div class="wg-chart-default">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
                <div class="image type-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#FF5200" />
                    </svg>
                    <i class="icon-dollar-sign"></i>
                </div>
                <div>
                    <div class="body-text mb-2">Total Income</div>
                    <h4>{{ $totalSales }}</h4>
                </div>
            </div>
            <div class="box-icon-trending down">
                <i class="icon-trending-down"></i>
                <div class="body-title number">1.56%</div>
            </div>
        </div>
        <div class="wrap-chart">
            <div id="line-chart-2"></div>
        </div>
    </div>
    <!-- /chart-default -->
    <!-- chart-default -->
    <div class="wg-chart-default">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
                <div class="image type-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#CBD5E1" />
                    </svg>
                    <i class="icon-file"></i>
                </div>
                <div>
                    <div class="body-text mb-2">Orders Paid</div>
                    <h4>{{ $deliveredOrders }}</h4>
                </div>
            </div>
            <div class="box-icon-trending">
                <i class="icon-trending-up"></i>
                <div class="body-title number">0.00%</div>
            </div>
        </div>
        <div class="wrap-chart">
            <div id="line-chart-3"></div>
        </div>
    </div>
    <!-- /chart-default -->
    <!-- chart-default -->
    <div class="wg-chart-default">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap14">
                <div class="image type-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#2377FC" />
                    </svg>
                    <i class="icon-users"></i>
                </div>
                <div>
                    <div class="body-text mb-2">Total Visitor</div>
                    <h4>{{ $customers }}</h4>
                </div>
            </div>
            <div class="box-icon-trending up">
                <i class="icon-trending-up"></i>
                <div class="body-title number">1.56%</div>
            </div>
        </div>
        <div class="wrap-chart">
            <div id="line-chart-4"></div>
        </div>
    </div>
    <!-- /chart-default -->
</div>
<!-- Cards 2 -->
<div class="tf-section-4 mb-30">
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                        <defs>
                                                          <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#92BCFF"/>
                                                            <stop offset="1" stop-color="#2377FC"/>
                                                          </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <i class="icon-shopping-bag"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Sales</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-1"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                        <defs>
                                                          <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#92BCFF"/>
                                                            <stop offset="1" stop-color="#2377FC"/>
                                                          </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <i class="icon-dollar-sign"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Income</div>
                                                    <h4>$37,802</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending down">
                                                <i class="icon-trending-down"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-2"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                        <defs>
                                                          <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#92BCFF"/>
                                                            <stop offset="1" stop-color="#2377FC"/>
                                                          </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <i class="icon-file"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Orders Paid</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">0.00%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-3"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="flex items-center justify-between">
                                            <div class="flex items-center gap14">
                                                <div class="image">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path opacity="0.08" d="M19.1086 2.12943C22.2027 0.343099 26.0146 0.343099 29.1086 2.12943L42.4913 9.85592C45.5853 11.6423 47.4913 14.9435 47.4913 18.5162V33.9692C47.4913 37.5418 45.5853 40.8431 42.4913 42.6294L29.1086 50.3559C26.0146 52.1423 22.2027 52.1423 19.1086 50.3559L5.72596 42.6294C2.63194 40.8431 0.725956 37.5418 0.725956 33.9692V18.5162C0.725956 14.9435 2.63195 11.6423 5.72596 9.85592L19.1086 2.12943Z" fill="url(#paint0_linear_53_110)"/>
                                                        <defs>
                                                          <linearGradient id="paint0_linear_53_110" x1="-43.532" y1="-34.3465" x2="37.6769" y2="43.9447" gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#92BCFF"/>
                                                            <stop offset="1" stop-color="#2377FC"/>
                                                          </linearGradient>
                                                        </defs>
                                                    </svg>
                                                    <i class="icon-users"></i>
                                                </div>
                                                <div>
                                                    <div class="body-text mb-2">Total Visitor</div>
                                                    <h4>34,945</h4>
                                                </div>
                                            </div>
                                            <div class="box-icon-trending up">
                                                <i class="icon-trending-up"></i>
                                                <div class="body-title number">1.56%</div>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div id="line-chart-4"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                </div>

<!-- Charts -->
<div class="row">
    <div class="col-lg-6">
        <div class="au-card recent-report">
            <div class="au-card-inner">
                <h3 class="title-2">recent reports</h3>
                <div class="chart-info">
                    <div class="chart-info__left">
                        <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>products</span>
                        </div>
                        <div class="chart-note mr-0">
                            <span class="dot dot--green"></span>
                            <span>services</span>
                        </div>
                    </div>
                    <div class="chart-info__right">
                        <div class="chart-statis">
                            <span class="index incre">
                                <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                            <span class="label">products</span>
                        </div>
                        <div class="chart-statis mr-0">
                            <span class="index decre">
                                <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                            <span class="label">services</span>
                        </div>
                    </div>
                </div>
                <div class="recent-report__chart">
                    <canvas id="recent-rep-chart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card chart-percent-card">
            <div class="au-card-inner">
                <h3 class="title-2 tm-b-5">char by %</h3>
                <div class="row no-gutters">
                    <div class="col-xl-6">
                        <div class="chart-note-wrap">
                            <div class="chart-note mr-0 d-block">
                                <span class="dot dot--blue"></span>
                                <span>products</span>
                            </div>
                            <div class="chart-note mr-0 d-block">
                                <span class="dot dot--red"></span>
                                <span>services</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="percent-chart">
                            <canvas id="percent-chart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings Bi Item -->
<div class="row">
    <div class="col-lg-9">
        <div class="wg-box">
            <div class="flex items-center justify-between">
                <h5>Top selling product</h5>
                <div class="dropdown default">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="view-all">View all<i class="icon-chevron-down"></i></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a href="javascript:void(0);">3 days</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">7 days</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="wg-table table-top-selling-product">
                <ul class="table-title flex gap20 mb-14">
                    <li>
                        <div class="body-title">Product</div>
                    </li>
                    <li>
                        <div class="body-title">Category</div>
                    </li>
                    <li>
                        <div class="body-title">Total sale</div>
                    </li>
                    <li>
                        <div class="body-title">Stock</div>
                    </li>
                </ul>
                <div class="divider mb-14"></div>
                <ul class="flex flex-column gap10">
                    <li class="product-item gap14">
                        <div class="image">
                            <img src="images/products/16.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Patimax Fragrance Long...</a>
                            </div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-not-available">Out of stock</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image">
                            <img src="images/products/17.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">WholeHearted Grain Free Large...</a>
                            </div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">In stock</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image">
                            <img src="images/products/18.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Dog Food Rachael Ray Nutrish®</a>
                            </div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">In stock</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image">
                            <img src="images/products/19.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Freshpet Healthy Dog Food and Cat...</a>
                            </div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-available">In stock</div>
                            </div>
                        </div>
                    </li>
                    <li class="divider"></li>
                    <li class="product-item gap14">
                        <div class="image">
                            <img src="images/products/20.png" alt="">
                        </div>
                        <div class="flex items-center justify-between flex-grow">
                            <div class="name">
                                <a href="product-list.html" class="body-title-2">Natural Dog Food Healthy Dog Food</a>
                            </div>
                            <div class="body-text">X1</div>
                            <div class="body-text">$28,672.36</div>
                            <div>
                                <div class="block-not-available">Out of stock</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <!-- Top Countries Box -->
        <div class="wg-box shadow-lg rounded-lg border border-light">
            <div class="d-flex justify-content-between align-items-center">
                <h5 class="font-weight-bold">Top Countries By Sales</h5>
                <div class="dropdown default">
                    <button
                        class="btn btn-secondary dropdown-toggle"
                        type="button"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false">
                        <span class="view-all">
                            View all <i class="icon-chevron-down"></i>
                        </span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a href="javascript:void(0);">3 days</a></li>
                        <li><a href="javascript:void(0);">7 days</a></li>
                    </ul>
                </div>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-3">
                <h4 class="font-weight-bold">$37,802</h4>
                <div class="box-icon-trending up">
                    <i class="icon-trending-up text-success"></i>
                    <div class="body-title number text-success">1.56%</div>
                </div>
                <div class="text-muted small">since last weekend</div>
            </div>

            <ul class="list-unstyled mt-3">
                <!-- Country Item 1 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img
                            src="{{ asset('images/country/6.png') }}"
                            alt="Turkish Flag"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Turkish Flag
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-up text-success me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>

                <!-- Country Item 2 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img
                            src="images/country/7.png"
                            alt="Belgium"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Belgium
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-up text-success me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>

                <!-- Country Item 3 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img
                            src="images/country/8.png"
                            alt="Sweden"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Sweden
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-down text-danger me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>

                <!-- Country Item 4 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img
                            src="images/country/9.png"
                            alt="Vietnamese"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Vietnamese
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-up text-success me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>

                <!-- Country Item 5 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3 border-bottom">
                    <div class="d-flex align-items-center">
                        <img
                            src="images/country/10.png"
                            alt="Australia"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Australia
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-down text-danger me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>

                <!-- Country Item 6 -->
                <li class="country-item d-flex justify-content-between align-items-center p-3">
                    <div class="d-flex align-items-center">
                        <img
                            src="images/country/11.png"
                            alt="Saudi Arabia"
                            class="rounded-circle me-3"
                            width="40">
                        <a href="countries.html" class="body-text name text-dark font-weight-bold">
                            Saudi Arabia
                        </a>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="icon-trending-down text-danger me-2"></i>
                        <span class="body-text number">6,972</span>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /Top Countries Box -->
    </div>
</div>


<!-- Messeges -->
<div class="row">
    <div class="col-lg-6">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-account-calendar"></i>26 April, 2018
                </h3>
                <button class="au-btn-plus">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
            <div class="au-task js-list-load">
                <div class="au-task__title">
                    <p>Tasks for John Doe</p>
                </div>
                <div class="au-task-list js-scrollbar3">
                    <div class="au-task__item au-task__item--danger">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--primary">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">02:00 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--success">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">03:30 PM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--danger js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Meeting about plan for Admin Template 2018</a>
                            </h5>
                            <span class="time">10:00 AM</span>
                        </div>
                    </div>
                    <div class="au-task__item au-task__item--warning js-load-item">
                        <div class="au-task__item-inner">
                            <h5 class="task">
                                <a href="#">Create new task for Dashboard</a>
                            </h5>
                            <span class="time">11:00 AM</span>
                        </div>
                    </div>
                </div>
                <div class="au-task__footer">
                    <button class="au-btn au-btn-load js-load-btn">load more</button>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
            <div class="au-card-title" style="background-image:url('images/bg-title-02.jpg');">
                <div class="bg-overlay bg-overlay--blue"></div>
                <h3>
                    <i class="zmdi zmdi-comment-text"></i>New Messages
                </h3>
                <button class="au-btn-plus">
                    <i class="zmdi zmdi-plus"></i>
                </button>
            </div>
            <div class="au-inbox-wrap js-inbox-wrap">
                <div class="au-message js-list-load">
                    <div class="au-message__noti">
                        <p>You Have
                            <span>2</span>

                            new messages
                        </p>
                    </div>
                    <div class="au-message-list">
                        <div class="au-message__item unread">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">John Smith</h5>
                                        <p>Have sent a photo</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>12 Min ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item unread">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-03.jpg" alt="Nicholas Martinez">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Nicholas Martinez</h5>
                                        <p>You are now connected on message</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>11:00 PM</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Purus feugiat finibus</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Sunday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item js-load-item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap online">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-04.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Lorem ipsum dolor sit amet</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Yesterday</span>
                                </div>
                            </div>
                        </div>
                        <div class="au-message__item js-load-item">
                            <div class="au-message__item-inner">
                                <div class="au-message__item-text">
                                    <div class="avatar-wrap">
                                        <div class="avatar">
                                            <img src="images/icon/avatar-05.jpg" alt="Michelle Sims">
                                        </div>
                                    </div>
                                    <div class="text">
                                        <h5 class="name">Michelle Sims</h5>
                                        <p>Purus feugiat finibus</p>
                                    </div>
                                </div>
                                <div class="au-message__item-time">
                                    <span>Sunday</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="au-message__footer">
                        <button class="au-btn au-btn-load js-load-btn">load more</button>
                    </div>
                </div>
                <div class="au-chat">
                    <div class="au-chat__title">
                        <div class="au-chat-info">
                            <div class="avatar-wrap online">
                                <div class="avatar avatar--small">
                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                </div>
                            </div>
                            <span class="nick">
                                <a href="#">John Smith</a>
                            </span>
                        </div>
                    </div>
                    <div class="au-chat__content">
                        <div class="recei-mess-wrap">
                            <span class="mess-time">12 Min ago</span>
                            <div class="recei-mess__inner">
                                <div class="avatar avatar--tiny">
                                    <img src="images/icon/avatar-02.jpg" alt="John Smith">
                                </div>
                                <div class="recei-mess-list">
                                    <div class="recei-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                    <div class="recei-mess">Donec tempor, sapien ac viverra</div>
                                </div>
                            </div>
                        </div>
                        <div class="send-mess-wrap">
                            <span class="mess-time">30 Sec ago</span>
                            <div class="send-mess__inner">
                                <div class="send-mess-list">
                                    <div class="send-mess">Lorem ipsum dolor sit amet, consectetur adipiscing elit non iaculis</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="au-chat-textfield">
                        <form class="au-form-icon">
                            <input class="au-input au-input--full au-input--h65" type="text" placeholder="Type a message">
                            <button class="au-input-icon">
                                <i class="zmdi zmdi-camera"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layout.footer')