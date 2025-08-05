<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Oneclick Agriscience Pvt. Ltd.</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/product.css">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&family=Lato&display=swap" rel="stylesheet"> 
</head>
<body>
<?php $productData = require 'productData.php'; ?>
   <Main class="wrapper">
        <!-- header section -->
        <?php include 'header2.php'?>

        <section class="product_banner  position-relative overflow-hidden">
            <div class="container-fluid m-0 p-0">
              <div id="bannerCarousel" class="carousel slide banner-carousel" data-bs-ride="carousel">
                  <div class="carousel-inner banner">
                  <div class="product-carousel-item active" style="background-image: url('assets/images/product_banner_1.jpg'); ">
                      <!-- <div class=" container-fluid banner-content row justify-content-center">
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
                      </div> -->
                  </div>
                  <div class="product-carousel-item" style="background-image: url('assets/images/product_banner_1.jpg');">
                      <!-- <div class="banner-content container-fluid row justify-content-center d-flex">
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
                      </div> -->
                  </div>
                  <div class="product-carousel-item " style="background-image: url('assets/images/product_banner_1.jpg'); ">
                      <!-- <div class=" container-fluid banner-content row">
                          <div class="col col-md-12 col-lg-12" >
                              <h6 class="text-primary "># Learned from the Past, Reshaping the Future, doing with a Stable & Secure Present</h6>
                              <h1 class="display-4 fw-bold">Phenomenal opportunities in Agri Sector</h1>
                              <div class="banner-buttons">
                                  <button class="btn btn-success">Read the article</button>
                                  <button class="btn btn-success">Apply Now</button>
                                
                              </div>
                          </div>
                      </div> -->
                  </div>
                  <div class="product-carousel-item " style="background-image: url('assets/images/product_banner_1.jpg');">
                      <!-- <div class=" container-fluid banner-content row">
                          <div class="col col-md-12 col-lg-12 d-flex-col align-items-start" >
                              <h6 class="text-primary "># In the news</h6>
                              <h1 class="display-4 fw-bold">Keeping up on the latest agritech news</h1>
                              <div class="banner-buttons">
                                  <button class="btn btn-success">Read Blog</button>
                              </div>
                          </div>
                      </div> -->
                  </div>
                  </div>
              </div>
            </div>
        </section>

        <section class="product_category mb-lg-5 mb-xl-5 mb-md-4 mb-sm-3">
            <div class="container pt-5">
                <div class="row">
                    <div  class="col-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#insecticide">
                            <div class="category_icon-circle mb-3 mx-auto">
                                <img src="assets/images/icons/insecticides.png" 
                                    alt="Discuss Icon" 
                                    class="category_icon-img img-fluid p-3"
                                    loading=lazy
                                    >
                            </div>
                            <h5 class="category_title fw-bold">Insecticides</h5>
                        </a>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="#Fungicides">
                            <div class="category_icon-circle mb-3 mx-auto">
                                <img src="assets/images/icons/fungicides.png" 
                                    alt="Discuss Icon" 
                                    class="category_icon-img img-fluid p-3"
                                    loading=lazy
                                    >
                            </div>
                            <h5 class="category_title fw-bold">Fungicides</h5>
                        </a>
                    </div>
                    <div class="col-4 d-flex flex-column justify-content-center align-items-center">
                        <a href="Herbicides">
                            <div class="category_icon-circle mb-3 mx-auto">
                                <img src="assets/images/icons/herbicides.png" 
                                    alt="Discuss Icon" 
                                    class="category_icon-img img-fluid p-3"
                                    loading=lazy
                                    >
                            </div>
                            <h5 class="category_title fw-bold">Herbicides</h5>
                        </a>
                    </div>
                    
                </div>
            </div>
            <?php foreach($productData as $category => $products): ?>
                <div class="container  pt-3" id="<?= $category ?>">
                    <div class="row">
                        <div class="col">
                            <h3 class="heading_xl"><?= ucfirst($category) ?></h3>
                        </div>
                    </div>
                    <div class="row items d-flex justify-content-center">
                            <?php foreach ($products as $index => $product): ?>
                                <div class="col-xl-3 col-lg-3 col-md-3 col-6 ">
                                    <div class="card product-card-minimal">
                                        <div class="product-image-container">
                                            <img src="<?= $product['productCard']['image']['src'] ?>" 
                                                class="card-img-top" 
                                                alt="<?= $product['productCard']['image']['alt'] ?>"
                                                loading=lazy>
                                            <div class="  product-overlay d-flex align-items-center justify-content-center">
                                                <div class="d-flex gap-3 align-items-end">
                                                    <!-- <a class="w-100" href="contact.php">
                                                        <button class="prod-button bg-primary w-100">CONTACT NOW</button>
                                                    </a> -->
                                                    <button class="prod-button " 
                                                            data-bs-toggle="modal" 
                                                            data-bs-target="#<?= $category . $index ?>">
                                                        VIEW MORE INFO
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body text-center">
                                            <h5 class="text_wrapper_product_title"><?= $product['productCard']['title'] ?></h5>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="<?= $category . $index ?>" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="productModalLabel"><?= $product['productModal']['title'] ?></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <img src="<?= $product['productModal']['image']['src'] ?>" 
                                                                class="img-fluid" 
                                                                alt="<?= $product['productModal']['image']['alt'] ?>"
                                                                loading=lazy>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <h4><?= $product['productModal']['title'] ?></h4>
                                                            <p class="fs-4 text-primary fw-bold"><?= $product['productModal']['price'] ?></p>
                                                            <p class="text-muted"><?= $product['productModal']['shortDescription'] ?></p>
                                                            <hr>
                                                            <p><strong>Detailed Description:</strong></p>
                                                            <p><?= $product['productModal']['detailedDescription'] ?></p>
                                                            <ul class="list-unstyled">
                                                                <?php foreach ($product['productModal']['features'] as $feature): ?>
                                                                    <li><i class="bi bi-check-circle-fill text-success me-2"></i> <?= $feature ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                            <div class="d-grid mt-4">
                                                                <a href="contact.php"><button class="prod-button ">CONTACT NOW</button></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                </div>
            <?php endforeach; ?>
        </section>


        
       <?php include 'footer.php'?>
    </Main>

  <!-- Bootstrap JS and custom script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/home.js"></script>


</body>
</html>
