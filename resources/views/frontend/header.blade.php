<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/css/custom_style.css') }}"> <!-- Link to external CSS -->
    <script src="{{ asset('frontend/js/script.js') }}" defer></script> <!-- Link to external JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .nav-link {
            position: relative;
            transition: color 0.3s;
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            transition: width 0.3s;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .dropdown-menu {
            display: none;
            opacity: 0;
            transition: opacity 0.3s ease, transform 0.3s ease;
            transform: translateY(-10px);
        }

        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .dropdown-menu a {
            transition: background-color 0.3s, color 0.3s;
        }

        .dropdown-menu a:hover {
            background-color: #3dbc1a;
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #96cf85 !important;
            border-bottom: 2px solid #ffc107;
        }

        .navbar-brand {
            font-size: 1.5rem;
        }

        .input-group input::placeholder {
            color: #aaa;
        }

        .input-group-text:hover {
            background-color: #e0a800 !important;
        }

        a {
            font-size: 14px;
            font-weight: 700
        }

        .superNav {
            font-size: 13px;
        }

        .form-control {
            outline: none !important;
            box-shadow: none !important;
        }

        @media screen and (max-width:540px) {
            .centerOnMobile {
                text-align: center
            }
        }
        /* Subcategory ke liye dark color aur bold text */
        .subcategory {
            font-weight: bold;
            color: black;
        }
    
        /* Brand ke liye halka (dim) color */
        .brand {
            color: rgb(45, 44, 44);
        }
    </style>
</head>
<body>
    <div class="superNav border-bottom py-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 centerOnMobile">
                    <select class="me-3 border-0 bg-light">
                        <option value="en-us">EN-US</option>
                    </select>
                    <span class="d-none d-lg-inline-block d-md-inline-block d-sm-inline-block d-xs-none me-3"><strong>info@somedomain.com</strong></span>
                    <span class="me-3"><i class="fa-solid fa-phone me-1 text-warning"></i> <strong>1-800-123-1234</strong></span>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-none d-lg-block d-md-block-d-sm-block d-xs-none text-end">
                    <span class="me-3"><i class="fa-solid fa-truck text-muted me-1"></i><a class="text-muted" href="#">Shipping</a></span>
                    <span class="me-3"><i class="fa-solid fa-file  text-muted me-2"></i><a class="text-muted" href="#">Policy</a></span>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light p-3 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="#">
                <img src="{{ asset('frontend/images/naturali import web logo-02.png') }}" alt="Logo" style="height: 85px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <div class="ms-auto d-lg-flex" style="flex: 1 1 70%;">
                    <div class="input-group" style="width: 100%; height: 40px;">
                        <input type="text" class="form-control border-warning rounded-start" placeholder="Search..." style="color:#7a7a7a; height: 40px;">
                        <span class="input-group-text bg-warning text-white rounded-end" style="height: 40px;"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item mx-2">
                        <a class="nav-link text-uppercase fw-semibold text-dark" href="#"><i class="fa-solid fa-cart-shopping me-1"></i>Cart</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link text-uppercase fw-semibold text-dark" href="#"><i class="fa-solid fa-circle-user me-1"></i>Account</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-custom navbar-mainbg sticky-top">
        {{-- <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars text-white"></i>
        </button> --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <!-- Loop through categories for dropdown -->
                @foreach($attributeCategories as $attributeCategory)
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown{{ $attributeCategory->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="far fa-clone"></i> {{ $attributeCategory->attribute->name ?? 'N/A' }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="categoryDropdown{{ $attributeCategory->id }}">
                        <!-- Category -->
                        <li>
                            <a class="dropdown-item subcategory" href="#"><strong>{{ $attributeCategory->categories->name }}</strong></a>
                        </li>
                        <!-- Subcategories -->
                        @foreach($attributeCategory->subCategories as $subCategory)
                        <li>
                            <a class="dropdown-item brand" href="#">{{ $subCategory->name }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endforeach
            </ul>
        </div>
    </nav>
    