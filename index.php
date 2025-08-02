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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&family=Lato&display=swap" rel="stylesheet">

 
</head>
<body>
   
   <Main class="wrapper position-relative overflow-hidden">
        <!-- header section -->
       <?php include 'header.php'?>

        <!-- header section end here  -->

        <!-- Banner Section with Carousel -->
        <div class="hero">
            <div id="bannerCarousel" class="carousel slide banner-carousel" data-bs-ride="carousel">
                <div class="carousel-inner banner">
                <div class="carousel-item active overlay" style="background-image: url('assets/images/banner1.webp'); ">
                    <div class=" container-fluid banner-content row justify-content-center">
                        <div class="col col-md-12 col-lg-6" >
                            <h6 class="text-primary ">Building Technologies for the next Agri-Revolution</h6>
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
                </div>
                <div class="carousel-item overlay" style="background-image: url('assets/images/banner2.webp');">
                    <div class="banner-content container-fluid row justify-content-center d-flex">
                        <div class="col col-md-12 col-lg-12" >
                                <h6 class="text-primary ">Building Technologies for the next Agri-Revolution</h6>
                                <h1 class="display-4 fw-bold">Seeds To Market</h1>
                                <div class="banner-partners">
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>
                                    <div class="banner-partner"><img src="assets/images/logo.png" alt=""></div>

                                </div>
                            </div>
                    </div>
                </div>
                <div class="carousel-item overlay" style="background-image: url('assets/images/banner1.webp'); ">
                    <div class=" container-fluid banner-content row">
                        <div class="col col-md-12 col-lg-12" >
                            <h6 class="text-primary "># Learned from the Past, Reshaping the Future, doing with a Stable & Secure Present</h6>
                            <h1 class="display-4 fw-bold">Phenomenal opportunities in Agri Sector</h1>
                            <div class="banner-buttons">
                                <button class="btn btn-success">Read the article</button>
                                <button class="btn btn-success">Apply Now</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item overlay" style="background-image: url('assets/images/banner2.webp');">
                    <div class=" container-fluid banner-content row">
                        <div class="col col-md-12 col-lg-12 d-flex-col align-items-start" >
                            <h6 class="text-primary "># In the news</h6>
                            <h1 class="display-4 fw-bold">Keeping up on the latest agritech news</h1>
                            <div class="banner-buttons">
                                <button class="btn btn-success">Read Blog</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <!-- Bottom control bar -->
                <div class="row bottom-bar">
                        <div class="col-12 button_with_text">
                            <button class="active" onclick="setSlide(0)">What we are upto?</button>
                            <button onclick="setSlide(1)">Global Leaders who support us</button>
                            <button onclick="setSlide(2)">We are Hiring</button>
                            <button onclick="setSlide(3)">What's in news?</button>
                        </div>
                        <div class="col-12 button_without_text">
                            <button class="active" onclick="setSlide(0)"></button>
                            <button onclick="setSlide(1)"></button>
                            <button onclick="setSlide(2)"></button>
                            <button onclick="setSlide(3)"></button>
                        </div>
                </div>
            </div>
        </div>
    </Main>

  <!-- Bootstrap JS and custom script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/home.js"></script>

</body>
</html>
