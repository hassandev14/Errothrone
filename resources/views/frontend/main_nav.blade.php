<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<style>
    .left {
        margin-left: -180px; /* Remove unnecessary left margin */
    }
    .navbar1 {
        background-color: #f8f9fa;
        border-radius: 0;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        padding: 10px 20px;
        margin-top: -13px;
    }
    .search-container {
        flex-grow: 1; /* Allow search bar to take available space */
        display: flex;
        justify-content: center; /* Center align the search bar */
    }
    .search-bar {
        width: 100%;
        max-width: 600px; /* Set a max-width for better alignment */
    }
    .navbar-nav {
        margin-left: auto; /* Push cart & account to the right */
    }
    .input-group {
        margin-right: 20px; /* Add some right margin */
        margin-left: 20px; /* Add some right margin */
    }
    .contact-card {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 5px 10px;
        border-radius: 8px;
        background-color: #f8f9fa;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        transition: 0.3s ease-in-out;
        margin-right: 20px;
    }

    .contact-card i {
        font-size: 18px;
        color: #333;
    }

    .contact-info {
        display: flex;
        flex-direction: column;
        font-size: 14px;
    }

    .contact-card:hover {
        background-color: #2ca237;
        transform: translateY(-2px);
    }

    .contact-card:hover i,
    .contact-card:hover .contact-info {
        color: #fff;
    }

    .contact-info span {
        color: #333;
        font-weight: 500;
    }

    /* Right align the contact card */
    .contact-wrapper {
        margin-left: auto; /* Moves the div to the right */
    }
    .img {
        margin-left: 50px;
        height: 70px;
    }
    .icons {
        display: flex;
        gap: 20px;
        align-items: center;
        margin-right:-170px
    }
</style>

<nav class="navbar1 navbar-expand-lg bg-white navbar-light p-3 shadow-sm">
    <div class="container d-flex align-items-center">
        <a class="left navbar-brand fw-bold text-warning" href="#">
            <img src="{{ asset('frontend/images/naturali import web logo-02.png') }}" alt="Logo" class="img">
        </a>
        
        <div class="search-container">
            <div class="input-group search-bar">
                <input type="text" class="form-control border-warning rounded-start" placeholder="Search..." style="color:#7a7a7a; height: 40px;">
                <span class="input-group-text bg-warning text-white rounded-end" style="height: 40px;">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </span>
            </div>
        </div>
        <div class="navbar-nav contact-wrapper d-flex gap-3">
            <div class="contact-card">
                <i class="fa-solid fa-envelope"></i>
                <div class="contact-info">
                    <span>Email: info@example.com</span>
                    <span>Phone: +91 98765 43210</span>
                </div>
            </div>
        </div>

        <div class="icons d-flex gap-3 ms-auto align-items-center">

            <!-- Login/Register -->
            <a href="{{ route('login') }}" class="text-dark text-uppercase fw-bold small">
                LOGIN / REGISTER
            </a>
    
            <!-- Search Icon -->
            <a href="#" class="text-dark">
                <i class="fa-solid fa-magnifying-glass fa-lg"></i>
            </a>
    
            <!-- Cart Icon with Badge -->
            <a href="" class="text-dark position-relative">
                <i class="fa-solid fa-bag-shopping fa-lg"></i>
                <span class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning text-white">
                    2
                </span>
            </a>
    
            <!-- Cart Total Price -->
            {{-- <span class="fw-bold text-dark">Rs 1,798</span> --}}
        </div>
    </div>
</nav>

