<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700|Roboto:300,400,500,700,900&display=swap" rel="stylesheet">

    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

    <style>
        /* Header Styling */
        #header {
            position: relative;
            z-index: 1000;
            background: white;
            padding: 15px 0;
            border-bottom: 1px solid #ddd;
        }

        /* Navbar Styling */
        .category-navbar {
            position: relative;
            background: #fff;
            border-bottom: 2px solid #ddd;
            padding: 10px 0;
            font-weight: 600;
            z-index: 999;
        }

        .category-navbar .nav-link {
            color: #333;
            text-transform: uppercase;
            padding: 12px 15px;
            font-size: 14px;
            transition: 0.3s;
        }

        .category-navbar .nav-link:hover {
            color: #28a745;
        }

        /* Mega Menu Styling */
        .mega-menu {
            min-width: 600px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 15px;
        }

        .mega-menu h6 {
            font-size: 14px;
            font-weight: bold;
            padding-bottom: 5px;
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        .mega-menu .dropdown-item {
            font-size: 13px;
            color: #555;
        }

        .mega-menu .dropdown-item:hover {
            color: #28a745;
            background: transparent;
        }

    </style>
</head>

<body>

    <!-- Header -->
    <header id="header">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <a href="home.html"><img src="{{ asset('frontend/images/logo.png') }}" alt="Botanical" class="img-fluid"></a>

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item active"><a class="nav-link" href="home.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="shop.html">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <!-- Categories Navbar -->
    <nav class="category-navbar">
        <div class="container">
            <ul class="nav justify-content-center">
                <!-- Brands with Subcategories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="brandsDropdown" data-toggle="dropdown">
                        🏷️ Brands
                    </a>
                    <div class="dropdown-menu mega-menu p-3">
                        <div class="row">
                            <div class="col-md-4">
                                <h6>🌿 Botanical Co.</h6>
                                <a class="dropdown-item" href="#">Indoor Plants</a>
                                <a class="dropdown-item" href="#">Outdoor Plants</a>
                                <a class="dropdown-item" href="#">Herbs</a>
                            </div>
                            <div class="col-md-4">
                                <h6>🌳 Evergreen</h6>
                                <a class="dropdown-item" href="#">Bonsai</a>
                                <a class="dropdown-item" href="#">Cactus</a>
                                <a class="dropdown-item" href="#">Succulents</a>
                            </div>
                            <div class="col-md-4">
                                <h6>🌼 Floral Essence</h6>
                                <a class="dropdown-item" href="#">Roses</a>
                                <a class="dropdown-item" href="#">Lilies</a>
                                <a class="dropdown-item" href="#">Orchids</a>
                            </div>
                        </div>
                    </div>
                </li>

                <!-- Indoor Plants with Subcategories -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="indoorDropdown" data-toggle="dropdown">
                        🏡 Indoor Plants
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Snake Plant</a>
                        <a class="dropdown-item" href="#">Peace Lily</a>
                        <a class="dropdown-item" href="#">Money Plant</a>
                    </div>
                </li>

                <!-- Outdoor Plants -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="outdoorDropdown" data-toggle="dropdown">
                        🌳 Outdoor Plants
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Palm Trees</a>
                        <a class="dropdown-item" href="#">Fruit Trees</a>
                        <a class="dropdown-item" href="#">Climbers</a>
                    </div>
                </li>

                <!-- Herbs -->
                <li class="nav-item"><a class="nav-link" href="#">🌿 Herbs</a></li>

                <!-- Seeds -->
                <li class="nav-item"><a class="nav-link" href="#">🌰 Seeds</a></li>
            </ul>
        </div>
    </nav>

<main>


