<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>        
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }
    body {
        min-height: 100vh;
    }
    .header {
        background-image: url("{{ asset('frontend/images/VIeCpw.png') }}");
        height: 10px;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px 100px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        backdrop-filter: blur(10px);
        border-bottom: 2px solid rgba(255, 255, 255, 0.2);
        z-index: 100;
        background-size: cover;
        box-shadow: 0px 10px 10px rgba(20, 122, 8, 0.1); /* Shadow effect */
    }
    .header.scrolled {
        background-image: none; /* Scroll hone par image remove */
        background-color: rgba(255, 255, 255, 0.6); /* White transparent background */
        backdrop-filter: blur(10px);
    }
    .logo {
        color: #333; /* Dark color for better visibility */
        font-size: 25px;
        text-decoration: none;
        font-weight: 600;
        cursor: default;
    }
    .navbar a {
        color: #333; /* Dark text color */
        font-size: 18px;
        text-decoration: none;
        margin-left: 35px;
        transition: 0.3s;
    }
    .navbar a:hover {
        color: rgb(36, 113, 40);
    }
    #menu-icon {
        display: none;
    }
    @media (max-width: 992px) {
        .header {
            padding: 1.25rem 4%;
        }
    }
    @media (max-width: 768px) {
        #menu-icon {
            display: block;
        }
        .navbar {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            padding: 0.5rem 4%;
            display: none;
        }
        .navbar.active {
            display: block;
        }
        .navbar a {
            display: block;
            margin: 1.5rem 0;
        }
        .nav-bg {
            position: absolute;
            top: 79px;
            left: 0;
            width: 100%;
            height: 295px;
            background: rgba(255, 255, 255, 0.1);
            border-bottom: 2px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            z-index: 99;
            display: none;
        }
        .nav-bg.active {
            display: block;
        }
    }
</style>

<header class="header sticky-top" id="header">
    <i class='bx bx-menu' id="menu-icon"></i>
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Portfolio</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
</header>
<div class="nav-bg"></div>

<script>
    const menuIcon = document.querySelector('#menu-icon');
    const navbar = document.querySelector('.navbar');
    const navbg = document.querySelector('.nav-bg');
    const header = document.querySelector('#header');

    menuIcon.addEventListener('click', () => {
        menuIcon.classList.toggle('bx-x');
        navbar.classList.toggle('active');
        navbg.classList.toggle('active');
    });

    // Scroll Event Listener
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled'); // Scroll hone par class add
        } else {
            header.classList.remove('scrolled'); // Scroll upar jane par remove
        }
    });
</script>
