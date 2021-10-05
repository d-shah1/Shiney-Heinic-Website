<?php
session_start();
require("./check-authenticate.php");
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
                           <a class="nav-link" href="./checkout.php">Shop</a>
                        </li>
                        <?php
                     if(!isset($_SESSION['email']))
                     {
                     ?>
                     <li class="nav-item">
                        <a class="nav-link" href="./login.php">Login</a>
                     </li>
                     <?php
                     }
                     else {

                       ?>
                       <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                     </li>
                       <?php    
                     }
                     ?>
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

        <?php require("./footer.php");?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
    </body>
</html>