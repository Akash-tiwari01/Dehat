<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeHaat UI Clone</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <style>
    body, html {
      margin: 0;
      padding: 0;
      height: 100%;
      overflow-x: hidden;
    }
    .navbar {
      background:transparent;

    }
    .banner-carousel {
      position: relative;
      height: 100vh;
      color: white;
    }
    .carousel-item {
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
    }
    .banner-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
    }
    .banner-buttons .btn {
      margin: 5px;
    }
    .bottom-bar {
      position: absolute;
      bottom: 0;
      width: 100%;
      display: flex;
      justify-content: center;
      background-color: rgba(0, 0, 0, 0.6);
      border-radius: 20px 20px 0 0;
    }
    .bottom-bar button {
      flex: 1;
      padding: 10px;
      background: transparent;
      border: none;
      color: white;
      font-weight: 500;
      transition: all 0.3s ease;
    }
    .bottom-bar button.active {
      background-color: orange;
      color: black;
    }

    .desktop-navbar { display: none; }
    .mobile-navbar { display: none; }

    @media (min-width: 768px) {
      .desktop-navbar { display: block; }
    }

    @media (max-width: 767.98px) {
      .mobile-navbar { display: block; }
    }
  </style>
</head>
<body>

    <Main class="wrapper position-relative ">
        <!-- header section -->
        <Header class='row justify-content-around  position-fixed top-0 start-0 w-100' style="z-index:1000">
        <!-- Desktop Navbar -->
            <nav class="navbar navbar-expand-lg  desktop-navbar col-md-12 col-lg-8 justify-content-center">
                <div class="container-fluid">
                <a class="navbar-brand text-success fw-bold" href="#"><img src="assets/images/logo.png" alt="" width='200px'></a>
                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                            Solution
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Solution For Farmer</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Micro-Entreprenure</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Industerial-Buyer</a></li>
                        </ul>
                    </li>                
                    <li class="nav-item"><a class="nav-link" href="#">Our Brand</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Our Brands
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Solution For Farmer</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Micro-Entreprenure</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Industerial-Buyer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Blogs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Solution For Farmer</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Micro-Entreprenure</a></li>
                            <li><a class="dropdown-item" href="#">Solution For Industerial-Buyer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    
                    
                    </ul>
                </div>
                </div>
            </nav>

            <!-- Mobile Navbar -->
            <nav class="navbar mobile-navbar">
                <div class="container-fluid">
                <a class="navbar-brand text-success fw-bold" href="#">DeHaat<sup>®</sup></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarMobile">
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Company</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Solution</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">DeHaat Network</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Our Brands</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blogs</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
                    </ul>
                </div>
                </div>
            </nav>    
        </Header>

        <!-- Banner Section with Carousel -->
        <div class="hero">
            <div id="bannerCarousel" class="carousel slide banner-carousel" data-bs-ride="carousel">
                <div class="carousel-inner banner">
                <div class="carousel-item active overlay" style="background-image: url('assets/images/banner1.webp'); background-size: cover; background-position: center;  ">
                    <div class="banner-content">
                    <h6 class="text-info">Building Technologies for the next Agri-Revolution</h6>
                    <h1 class="display-4 fw-bold">Seeds To Market</h1>
                    <div class="banner-buttons">
                        <button class="btn btn-success">Know Your soil</button>
                        <button class="btn btn-success">Agri Input</button>
                        <button class="btn btn-success">Advisory</button>
                        <button class="btn btn-success">Health & Growth</button>
                        <button class="btn btn-success">Agri Output</button>
                        <button class="btn btn-success">Farm Intelligence</button>
                        <button class="btn btn-success">Finance</button>
                    </div>
                    </div>
                </div>
                <div class="carousel-item overlay" style="background-image: url('assets/images/banner2.webp');">
                    <div class="banner-content">
                    <h1 class="display-4 fw-bold">Global Leaders who support us</h1>
                    </div>
                </div>
                <div class="carousel-item overlay" style="background-image: url('https://images.unsplash.com/photo-1542838686-8a94f62b4a5c'); ">
                    <div class="banner-content">
                    <h1 class="display-4 fw-bold">We are Hiring</h1>
                    </div>
                </div>
                <div class="carousel-item overlay" style="background-image: url('https://images.unsplash.com/photo-1592194996308-7b43878e84a6');">
                    <div class="banner-content">
                    <h1 class="display-4 fw-bold">What's in news?</h1>
                    </div>
                </div>
                </div>

                <!-- Bottom control bar -->
                <div class="row justify-content-around position-relative">
                    <div class="bottom-bar col-md-12 col-lg-2">
                    <button class="active" onclick="setSlide(0)">What we are upto?</button>
                    <button onclick="setSlide(1)">Global Leaders who support us</button>
                    <button onclick="setSlide(2)">We are Hiring</button>
                    <button onclick="setSlide(3)">What's in news?</button>
                    </div>
                </div>
            </div>
        </div>
    </Main>

  <!-- Bootstrap JS and custom script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const carousel = new bootstrap.Carousel(document.querySelector('#bannerCarousel'));
    const buttons = document.querySelectorAll('.bottom-bar button');

    function setSlide(index) {
      carousel.to(index);
      buttons.forEach(btn => btn.classList.remove('active'));
      buttons[index].classList.add('active');
    }

    document.querySelector('#bannerCarousel').addEventListener('slid.bs.carousel', function (e) {
      buttons.forEach(btn => btn.classList.remove('active'));
      buttons[e.to].classList.add('active');
    });
  </script>

</body>
</html>
