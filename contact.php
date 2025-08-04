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
  <link rel="stylesheet" href="assets/css/contact.css">
  <link href="https://fonts.googleapis.com/css2?family=Bitter:wght@700&family=Lato&display=swap" rel="stylesheet">
</head>
<body>
<Main class="wrapper">
        <!-- header section -->
        <?php include 'header2.php'?>

        <!-- header section end here  -->

        <section class="contact_section">
        <div class="container">
            <div class="row">
            <!-- Left Info Column -->
            <div class="col-md-6">
                <div class="contact_info">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <small class="text-success fw-bold"><img src="assets/images/icons/get-in-touch.png" alt="" style="max-width:30px; margin-right:10px; border:1px solid #4CAF50; border-radius:100px; padding:2px">Get In Touch</small>
                                <h2 class="contact_heading heading-xl mb-3">Contact Us</h2>
                                <p class="text-muted">
                                    Sed Ut Perspiciatis Unde Omnis Iste Natus Error Sit Voluptatem Accusantium.
                                    Doloremque Laudantium, Totam Rem Aperiam, Eaque Inventore
                                </p>
                            </div>

                        </div>
                        <div class="row mt-lg-5">
                            <div class="col-lg-6 col-xl-6 col-md-12">
                                <div class="contact_info-item mb-3 d-flex">
                                    <span class="contact_info-icon"><i class="bi bi-geo-alt-fill"></i></span>
                                    <div>
                                    <strong>Location</strong>
                                    <p class="mb-0">55 main street, 2nd block, <br>melbourne, australia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-12">
                                <div class="contact_info-item mb-3 d-flex">
                                    <span class="contact_info-icon"><i class="bi bi-telephone-forward-fill"></i></span>
                                    <div>
                                    <strong>Phone</strong>
                                    <p class="mb-0">+1 (368) 567 89 54<br>+236 (456) 896 22</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-lg-5">
                            <div class="col-lg-6 col-xl-6 col-md-12">
                                <div class="contact_info-item mb-3 d-flex">
                                <span class="contact_info-icon"><i class="bi bi-envelope-at"></i></span>
                                <div>
                                <strong>Email</strong>
                                <p class="mb-0">example@email.com<br>charifund@email.com</p>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-6 col-xl-6 col-md-12">
                                <div class="contact_social mb-3 d-flex">
                                <span class="contact_info-icon"><i class="bi bi-link-45deg"></i></span>
                                    <div>
                                        <strong class="mb-5">Social</strong><br/>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        <a href="#"><i class="bi bi-whatsapp"></i></a>
                                        <a href="#"><i class="bi bi-linkedin"></i></a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- <div class="contact_image mt-4">
                    <img src="assets/images/about-us/" class="img-fluid" alt="team" />
                </div> -->
                </div>
            </div>

            <!-- Right Form Column -->
            <div class="col-md-6" id="contactForm">
                <div class="contact_form p-4 border rounded shadow-sm">
                <h4 class="mb-3">Fill Up The Form</h4>
                <p class="text-muted small">Your Email Address Will Not Be Published. Required Fields Are Marked *</p>
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                    <input type="text" class="form-control" placeholder="Enter Name" required />
                    <div class="invalid-feedback">Please enter your name.</div>
                    </div>
                    <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Enter Email" required />
                    <div class="invalid-feedback">Please enter a valid email.</div>
                    </div>
                    <div class="mb-3">
                    <input type="tel" class="form-control" placeholder="Phone Number" required pattern="[0-9+ -]+" />
                    <div class="invalid-feedback">Please enter your phone number.</div>
                    </div>
                    <div class="mb-3">
                    <textarea rows="4" class="form-control" placeholder="Your Message..." required></textarea>
                    <div class="invalid-feedback">Please enter your message.</div>
                    </div>
                    <button type="submit" class="contact_btn">
                    Get A Quote →
                    </button>
                </form>
                </div>
            </div>
            </div>
        </div>
        </section>
        <!-- footer section  -->
        <?php include 'footer.php'?>

<script>
  // Bootstrap validation
  (() => {
    'use strict';
    const forms = document.querySelectorAll('.needs-validation');
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  })();
</script>

</body>
</html>
