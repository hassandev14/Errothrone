<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$title}}</title>
    <!-- Bootstrap & FontAwesome -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/color.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        .superNav {
            font-size: 16px;
            height: 35px;
            margin-bottom: 12px;
        }
        @media screen and (max-width:768px) {
            .centerOnMobile {
                flex-direction: column;
                text-align: center
            }
        }
        .custom-nav{
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="superNav border-bottom py-2 bg-light">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center w-100">
                <!-- Left Section: Language & Contact Info -->
                <div class="d-flex align-items-center">
                    <div class="language-selector me-3">
                        <span class="flag me-2" data-flag="us">🇺🇸</span>
                        <span class="flag me-2" data-flag="pt">🇵🇹</span>
                        <span class="flag me-2" data-flag="de">🇩🇪</span>
                        <span class="flag me-2" data-flag="fr">🇫🇷</span>
                        <span class="flag" data-flag="es">🇪🇸</span>
                    </div>
                </div>
    
                <!-- Right Section: Policy, Shipping & Social Links -->
                <div class="d-flex align-items-center">
    
                    <!-- Social Media Links -->
                    <div class="social-links ms-3">
                        <a href="#" class="text-muted me-2"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#" class="text-muted me-2"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#" class="text-muted me-2"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="text-muted me-2"><i class="fa-brands fa-linkedin"></i></a>
                        <a href="#" class="text-muted"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    <div class="custom-nav">
        @include('frontend.main_nav')
    </div>
    
    @include('frontend.category_navbar')
    
    <main>