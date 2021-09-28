<?php
session_start();
if(isset($_REQUEST['pay'])){
$pay = $_REQUEST['pay'];
$_SESSION['pay']=$pay;
}

require("./check-authenticate.php");
require("./connection.php");


?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Checkout | Shiney Heinie</title>
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

        <!-- Checkout Form Start -->
        <div class="checkout-form-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 order-md-2 mb-4 form-right">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span>Your Cart</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Product name</h6>
                            <small class="text-muted">Quantity : 1</small>
                        </div>
                        <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Second product</h6>
                            <small class="text-muted">Quantity : 1</small>
                        </div>
                        <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                        <span class="total">Total (USD)</span>
                        <strong class="total-price">$20</strong>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-8 shadow order-md-1 p-5 form-left">
                    <h3 class="mb-3">Billing address</h3>
                    <form action="./charge.php" method="post" id="payment-form">
                        <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName" class="firstName">First name</label>
                            <input type="text" name="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" required>
                           
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name</label>
                            <input type="text" name="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" required>
                            
                        </div>
                        </div>
                        <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
                            
                        
                        </div>
                        
                        <div class="mb-3">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Address" required>
                         
                        </div>

                        <div class="mb-3">
                        <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                        <input type="text" name="address2" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Address">
                        </div>

                        <div class="row">
                        <div class="col-md-5 mb-3">
                            <label for="country">Country</label>
                            <input type="text" name="country" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="country" required>
                        <div class="invalid-feedback">
                            Please select a valid country.
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="state">State</label>
                            <input type="text" name="state" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="state" required>
                        
                            <div class="invalid-feedback">
                            Please provide a valid state.
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="zip">Zip</label>
                            <input type="text" name="zip" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="zip code" required>
                        <div class="invalid-feedback">
                            Zip code required.
                            </div>
                        </div>
                        </div>
                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="same-address">
                        <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="save-info">
                        <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div> 
                        <hr class="mb-4">
                        <!-- <button class="btn btn-primary btn-lg btn-block" id="mylink" type="submit" style="font-family: 'Gilroy-Regular', sans-serif; background-color: #75CFB8; border: none;">Continue to Payment</button> -->
                        <div id="card-element" class="form-control">
                            <!-- a Stripe Element will be inserted here. -->
                            </div>
                            <!-- Used to display form errors -->
                            <div id="card-errors" role="alert"></div>
                        
                        <button>Submit Payment</button>
                        
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>
      

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./charge.js"></script>
       
        </div>
    </body>
</html>