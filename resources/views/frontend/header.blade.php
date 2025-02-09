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
    /* ==========================
    🌟 Global Styles
    ========================== */
    .nav-link.active {
        color: green !important;
    }

    body {
        font-family: 'Roboto', sans-serif;
        color: #333;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    /* ==========================
    ✅ Header & Navigation Bar
    ========================== */
    #header {
        position: sticky;
        top: 0;
        z-index: 1000;
        background: white;
        padding: 15px 0;
        border-bottom: 2px solid #ddd;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand img {
        max-height: 60px;
    }

    .navbar-nav .nav-link {
        color: #333;
        font-weight: 600;
        font-size: 14px;
        padding: 10px 15px;
        transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
        color: #28a745;
        font-weight: bold;
    }

    /* ==========================
    ✅ Categories Navbar (Improved)
    ========================== */
    .category-navbar {
        background: rgb(59, 143, 79);
        border-bottom: 2px solid #2E7D32;
        padding: 10px 0;
        font-weight: 700;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    .category-navbar .nav-link {
        color: #fff;
        text-transform: uppercase;
        padding: 12px 15px;
        font-size: 14px;
        transition: 0.3s ease-in-out;
    }

    .category-navbar .nav-link:hover {
        color: #ffcc00;
    }

    /* ==========================
    ✅ Dropdown Styling (Modernized)
    ========================== */
    .category-navbar .dropdown-menu {
        background: white;
        border-radius: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        padding: 10px;
        min-width: 220px;
        animation: fadeIn 0.3s ease-in-out;
    }

    .category-navbar .dropdown-item {
        color: #333;
        padding: 10px 15px;
        font-size: 14px;
        font-weight: 500;
        transition: 0.3s ease-in-out;
        border-radius: 5px;
    }

    .category-navbar .dropdown-item:hover {
        background-color: #28a745;
        color: white;
    }

    .category-navbar .dropdown-header {
        font-size: 13px;
        font-weight: bold;
        color: #2a9d8f;
        text-transform: uppercase;
        padding: 8px 15px;
    }

    .category-navbar .dropdown-divider {
        border-color: #e76f51;
    }

    /* ==========================
    ✅ Buttons
    ========================== */
    .btn-primary {
        background: #28a745;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        transition: 0.3s;
        font-weight: bold;
    }

    .btn-primary:hover {
        background: #218838;
    }

    /* ==========================
    ✅ Footer
    ========================== */
    .footer {
        background: #222;
        color: white;
        padding: 20px 0;
        text-align: center;
    }

    /* ==========================
    ✅ Animations
    ========================== */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(5px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
        
</style>
</head>

<body>

    <!-- Header -->
    <header id="header" class="shadow-sm bg-white py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Botanical" class="img-fluid" style="max-height: 60px;">
        </a>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto text-uppercase fw-semibold">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('store') ? 'active' : '' }}" href="{{ route('store') }}">Store</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
 <!-- Categories Navbar -->
<nav class="category-navbar">
    <div class="container">
        <ul class="nav justify-content-center">
        @foreach($categories as $category)
            @if($category->subcategories->isNotEmpty() || $category->brands->isNotEmpty())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        {{ $category->name }}
                    </a>
                    <div class="dropdown-menu">
                        <!-- Subcategories -->
                        @if($category->subcategories->isNotEmpty())
                            @foreach($category->subcategories as $subcategory)
                                <a class="dropdown-item" href="#">{{ $subcategory->name }}</a>
                            @endforeach
                        @endif

                        <!-- Brands -->
                        @if($category->brands->isNotEmpty())
                            <div class="dropdown-divider"></div>
                            @foreach($category->brands as $brand)
                                <a class="dropdown-item" href="#">{{ $brand->name }}</a>
                            @endforeach
                        @endif
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $category->name }}</a>
                </li>
            @endif
        @endforeach
        </ul>
    </div>
</nav>
<main>
