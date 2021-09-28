<?php

//require("./check-authenticate.php");




?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Thank You | Shiney Heinie</title>
        <link rel="stylesheet" href="./css/style-main.css" />
        <link rel="stylesheet" href="./css/responsive.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

        <div class="main-wrapper">

        <!-- Navigation Menu Start -->
         <div class="shiney-heini">
            <div class="container">
               <nav class="navbar navbar-expand-lg navbar-light mt-lg-3">
                  <a class="navbar-brand" href="#">
                  <img src="./images/logo-shiny.png" />
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                           <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Shop</a>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- Navigation Menu End -->

         <!-- Form Section Start -->
         <div class="login-form-section">
             <div class="container">
                <div class="col-lg-10 shadow rounded reg-form">
                    <form>
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 left-img">
                                <img src="./images/login-left.png"/>
                            </div>
                            <div class="col-lg-6 col-sm-12 right-form">
                                <h1>Thank You.</h1>
                                <p>Thank you for shopping with us.</p>
                                <p class="register-link">Go back to shopping ? <a href="./index.php">Click Here</a></p>
                            </div>
                        </div>
                    </form>
                </div>
             </div>
         </div>
         <!-- Form Section End -->

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-12 footer-1">
                        <h1>Sign up for our newsletter</h1>
                        <div class="d-flex input">
                            <input type="email" class="newsletter-input" name="newsletter" placeholder="Enter Email Address" />
                            <i class="fas fa-arrow-right" id="newsletter-arrow"></i>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-12 footer-3">
                        <ul>
                            <li><a href="./contact-us.html" style="text-decoration: none; color: white;">Contact Us</a></li>
                            <li class="custom-margin"><a href="./faq's.html" style="text-decoration: none; color: white;">FAQ's</a></li>
                            <li class="custom-margin"><a href="./shiney-heini-on-the-go.html" style="text-decoration: none; color: white;">Shiney Heinie On The Go</a></li>
                            <li class="custom-margin"><a href="./shiney-heinic-spa-2.0.html" style="text-decoration: none; color: white;">Shiney Heinie Classic</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-sm-12 footer-3">
                        <ul>
                            <li>30-Day Return Policy</li>
                            <li class="custom-margin"><a href="./privacy-policy.html" style="text-decoration: none; color: white;">Privacy Policy</a></li>
                            <li class="custom-margin"><a href="./terms-conditions.html" style="text-decoration: none; color: white;">Terms &amp; Conditions</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-sm-12 text-center footer-5">
                        <div class="social-icons">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-instagram"></i>
                        </div>
                    </div>
                </div>
            </div>
         </footer>
         <!-- Footer End -->

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
    </body>
</html>