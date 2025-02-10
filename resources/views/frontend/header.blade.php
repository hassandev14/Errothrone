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
    ✅ Top Header (Black & Gold)
    ========================== */
    .top-header {
    font-size: 12px;
    background-color: #000000; /* Pure Black */
    color: #FFD700; /* Gold */
    padding: 5px 0;
    text-align: right;
    }

    .top-header a {
    color: #FFD700; 
    font-weight: bold;
    text-transform: uppercase;
    margin-left: 15px;
    transition: 0.3s;
    }

    .top-header a:hover {
    color: #ffffff;
    }

    /* ==========================
    ✅ Main Header (Modern Look)
    ========================== */
    #header {
    position: sticky;
    top: 0;
    z-index: 1000;
    background: #003366; /* Navy Blue */
    padding: 10px 0;
    border-bottom: 3px solid #FFD700;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .navbar-brand img {
    max-height: 60px;
    }

    .navbar-nav .nav-link {
    color: #ffffff;
    font-weight: 600;
    font-size: 14px;
    padding: 10px 15px;
    transition: all 0.3s ease;
    }

    .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
    color: #FFD700;
    font-weight: bold;
    }

    /* ==========================
    ✅ Categories Navbar (Premium)
    ========================== */
    .category-navbar {
    background: #004d00; /* Dark Green */
    padding: 10px 0;
    font-weight: 700;
    box-shadow: 0px 2px 5px rgba(92, 53, 53, 0.2);
    }

    .category-navbar .nav-link {
    color: #ffffff;
    text-transform: uppercase;
    padding: 12px 15px;
    font-size: 14px;
    transition: 0.3s ease-in-out;
    }

    .category-navbar .nav-link:hover {
    color: #FFD700; /* Gold */
    }

    /* ==========================
    ✅ Dropdown Styling
    ========================== */
    .category-navbar .dropdown-menu {
    background: white;
    border-radius: 10px;
    box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
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
    background-color: #FFD700;
    color: black;
    }

    /* ==========================
    ✅ Button Styling
    ========================== */
    .btn-primary {
    background: #FFD700;
    color: black;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    transition: 0.3s;
    }

    .btn-primary:hover {
    background: #FFC107;
    color: black;
    }

    /* ==========================
    ✅ Footer Styling
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
<!-- Top Header for Flags & Info -->
<div class="top-header bg-black text-white py-1 border-bottom">
    <div class="container d-flex justify-content-end">
        <div class="language-switcher">
            <a href="#"><img src="{{ asset('images/flags/en.png') }}" alt="English" width="20"></a>
            <a href="#"><img src="{{ asset('images/flags/fr.png') }}" alt="French" width="20"></a>
        </div>
    </div>
</div>
<!-- Main Header -->
<header id="header" class="shadow-sm bg-white py-2">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Logo -->
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Botanical" class="img-fluid" style="max-height: 50px;">
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

<!-- Adjusted Navbar Height -->
<nav class="category-navbar">
    <div class="container">
        <ul class="nav justify-content-center">
        @foreach($categories as $category)
            @if($category->subcategories->isNotEmpty() || $category->brands->isNotEmpty())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('category.show', ['name' => $category->name]) }}" data-toggle="dropdown">
                        {{ $category->name }}
                    </a>
                    <div class="dropdown-menu">
                        @if($category->subcategories->isNotEmpty())
                            @foreach($category->subcategories as $subcategory)
                                <a class="dropdown-item" href="{{ route('subcategory.show', ['name' => $subcategory->name]) }}">{{ $subcategory->name }}</a>
                            @endforeach
                        @endif

                        @if($category->brands->isNotEmpty())
                            <div class="dropdown-divider"></div>
                            @foreach($category->brands as $brand)
                                <a class="dropdown-item" href="{{$brand->name}}">{{ $brand->name }}</a>
                            @endforeach
                        @endif
                    </div>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('category.show', ['name' => $category->name]) }}">{{ $category->name }}</a>
                </li>
            @endif
        @endforeach
        </ul>
    </div>
</nav>
<main>
