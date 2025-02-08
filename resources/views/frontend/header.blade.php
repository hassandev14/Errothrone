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
            background: #d4edda; /* Light Green */
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
            <a href="home.html"><img src="{{ asset('images/logo.png') }}" alt="Botanical" class="img-fluid"></a>

            <!-- Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto text-uppercase">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/store">Store</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
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
            @if($category->subcategories->isNotEmpty()) 
                <!-- Sirf un categories ko dikhayein jisme subcategories hain -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                        {{ $category->name }}
                    </a>
                    <div class="dropdown-menu">
                        @foreach($category->subcategories as $subcategory)
                            <a class="dropdown-item" href="#">
                                {{ $subcategory->name }}
                            </a>
                        @endforeach
                    </div>
                </li>
            @else
                <!-- Agar subcategory nahi hai to simple link show karo -->
                <li class="nav-item">
                    <a class="nav-link" href="#">{{ $category->name }}</a>
                </li>
            @endif
        @endforeach
    </ul>
    </div>
</nav>
<main>


