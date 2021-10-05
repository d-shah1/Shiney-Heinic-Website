<?php

use function PHPSTORM_META\type;

session_start();
require("connection.php");
if (isset($_REQUEST['product'])) {
   $_SESSION['pay'] = $_REQUEST['product'];
}

?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge" />
   <title>Shiney Heinic Spa 2.0 | Shiney Heinie</title>
   <link rel="stylesheet" href="./css/style-product.css" />
   <link rel="stylesheet" href="./css/style-main.css" />
   <link rel="stylesheet" href="./css/product-responsive.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

   <!-- BASE CSS -->
   <link href="review/css/animate.min.css" rel="stylesheet">
   <link href="review/css/bootstrap.min.css" rel="stylesheet">
   <link href="review/css/menu.css" rel="stylesheet">
   <link href="review/css/style.css" rel="stylesheet">
   <link href="review/css/responsive.css" rel="stylesheet">
   <link href="review/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   <link href="review/css/skins/square/grey.css" rel="stylesheet">

   <!-- COLOR CSS -->
   <link href="review/css/color_4.css" rel="stylesheet">

   <!-- BASE CSS -->
   <link href="review/css/date_time_picker.css" rel="stylesheet">

   <!-- YOUR CUSTOM CSS -->
   <link href="review/css/custom.css" rel="stylesheet">

   <script src="review/js/modernizr.js"></script>
   <!-- GOOGLE WEB FONT -->
   <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">

   <!-- BASE CSS -->
   <link href="review/css/animate.min.css" rel="stylesheet">
   <link href="review/css/bootstrap.min.css" rel="stylesheet">
   <link href="review/css/menu.css" rel="stylesheet">
   <link href="review/css/style.css" rel="stylesheet">
   <link href="review/css/responsive.css" rel="stylesheet">
   <link href="review/css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
   <link href="review/css/skins/square/grey.css" rel="stylesheet">

   <!-- COLOR CSS -->
   <link href="review/css/color_4.css" rel="stylesheet">

   <!-- BASE CSS -->
   <link href="review/css/date_time_picker.css" rel="stylesheet">

   <!-- YOUR CUSTOM CSS -->
   <link href="review/css/custom.css" rel="stylesheet">

   <script src="review/js/modernizr.js"></script>

   <style>
      #writeReviewDiv {
         margin-top: -110px;

      }

      #divReview {
         background-image: linear-gradient(147deg, #75CFB8 0%, #FFC67D 74%);
         box-shadow: 4px 13px 30px 1px rgb(255, 198, 125, 0.4);
         border-radius: 20px;
         width: 200px;
         flex-shrink: 0;
         height: 100px;
         transform: translateX(-35%);
         margin-top: -20px;
      }

      .blog-slider {
         width: 95%;
         position: relative;
         max-width: 800px;
         margin: auto;
         background: #fff;
         margin-top: 2%;

         box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
         padding: 25px;
         border-radius: 25px;
         height: 400px;
         transition: all 0.3s;
      }

      @media screen and (max-width: 992px) {
         .blog-slider {
            max-width: 680px;
            height: 400px;
         }
      }

      @media screen and (max-width: 768px) {
         .blog-slider {
            min-height: 500px;
            height: auto;
            margin: 180px auto;
         }
      }

      @media screen and (max-height: 500px) and (min-width: 992px) {
         .blog-slider {
            height: 350px;
         }
      }

      .blog-slider__item {
         display: flex;
         align-items: center;
      }

      @media screen and (max-width: 768px) {
         .blog-slider__item {
            flex-direction: column;
         }
      }

      .blog-slider__item.swiper-slide-active .blog-slider__img img {
         opacity: 1;
         transition-delay: 0.3s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>* {
         opacity: 1;
         transform: none;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(1) {
         transition-delay: 0.3s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(2) {
         transition-delay: 0.4s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(3) {
         transition-delay: 0.5s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(4) {
         transition-delay: 0.6s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(5) {
         transition-delay: 0.7s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(6) {
         transition-delay: 0.8s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(7) {
         transition-delay: 0.9s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(8) {
         transition-delay: 1s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(9) {
         transition-delay: 1.1s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(10) {
         transition-delay: 1.2s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(11) {
         transition-delay: 1.3s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(12) {
         transition-delay: 1.4s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(13) {
         transition-delay: 1.5s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(14) {
         transition-delay: 1.6s;
      }

      .blog-slider__item.swiper-slide-active .blog-slider__content>*:nth-child(15) {
         transition-delay: 1.7s;
      }

      .blog-slider__img {
         width: 300px;
         flex-shrink: 0;
         height: 300px;
         background-image: linear-gradient(147deg, #75CFB8 0%, #FFC67D 74%);
         box-shadow: 4px 13px 30px 1px rgb(255, 198, 125, 0.4);
         border-radius: 20px;
         transform: translateX(-80px);
         overflow: hidden;
      }

      .blog-slider__img:after {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-image: linear-gradient(147deg, #75CFB8 0%, #FFC67D 74%);
         border-radius: 20px;
         opacity: 0.8;
      }

      .blog-slider__img img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         display: block;
         opacity: 0;
         border-radius: 20px;
         transition: all 0.3s;
      }

      @media screen and (max-width: 768px) {
         .blog-slider__img {
            transform: translateY(-50%);
            width: 90%;
         }
      }

      @media screen and (max-width: 576px) {
         .blog-slider__img {
            width: 95%;
         }
      }

      @media screen and (max-height: 500px) and (min-width: 992px) {
         .blog-slider__img {
            height: 270px;
         }
      }

      .blog-slider__content {
         padding-right: 25px;
      }

      @media screen and (max-width: 768px) {
         .blog-slider__content {
            margin-top: -80px;
            text-align: center;
            padding: 0 30px;
         }
      }

      @media screen and (max-width: 576px) {
         .blog-slider__content {
            padding: 0;
         }
      }

      .blog-slider__content>* {
         opacity: 0;
         transform: translateY(25px);
         transition: all 0.4s;
      }

      .blog-slider__code {
         color: #7b7992;
         margin-bottom: 15px;
         display: block;
         font-weight: 500;
      }

      .blog-slider__title {
         font-size: 24px;
         font-weight: 700;
         color: #0d0925;
         margin-bottom: 20px;
      }

      .blog-slider__text {
         color: #4e4a67;
         margin-bottom: 30px;
         line-height: 1.5em;
      }

      .blog-slider__button {
         display: inline-flex;
         background-image: linear-gradient(147deg, #75CFB8 0%, #FFC67D 74%);
         padding: 15px 35px;
         border-radius: 50px;
         color: #fff;
         box-shadow: 0px 14px 80px rgb(255, 198, 125, 0.4);
         text-decoration: none;
         font-weight: 500;
         justify-content: center;
         text-align: center;
         letter-spacing: 1px;
      }

      @media screen and (max-width: 576px) {
         .blog-slider__button {
            width: 100%;
         }

      }

      .blog-slider .swiper-container-horizontal>.swiper-pagination-bullets,
      .blog-slider .swiper-pagination-custom,
      .blog-slider .swiper-pagination-fraction {
         bottom: 10px;
         left: 0;
         width: 100%;
      }

      .blog-slider__pagination {
         position: absolute;
         z-index: 21;
         right: 20px;
         width: 11px !important;
         text-align: center;
         left: auto !important;
         top: 50%;
         bottom: auto !important;
         transform: translateY(-50%);
      }

      @media screen and (max-width: 768px) {
         .blog-slider__pagination {
            transform: translateX(-50%);
            left: 50% !important;
            top: 205px;
            width: 100% !important;
            display: flex;
            justify-content: center;
            align-items: center;
         }
      }

      .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
         margin: 8px 0;
      }

      @media screen and (max-width: 768px) {
         .blog-slider__pagination.swiper-pagination-bullets .swiper-pagination-bullet {
            margin: 0 5px;
         }
      }

      .blog-slider__pagination .swiper-pagination-bullet {
         width: 11px;
         height: 11px;
         display: block;
         border-radius: 10px;
         background: #062744;
         opacity: 0.2;
         transition: all 0.3s;
      }

      .blog-slider__pagination .swiper-pagination-bullet-active {
         opacity: 1;
         background: #FFC67D;
         height: 30px;
         box-shadow: 0px 0px 20px rgba(255, 198, 125, 0.4);
      }

      @media screen and (max-width: 768px) {
         .blog-slider__pagination .swiper-pagination-bullet-active {
            height: 11px;
            width: 30px;
         }
      }

      .social-block-rating {
         display: block;
         background: url('https://cdn2.hubspot.net/hubfs/2092172/Design_Elements/pr-5-stars.jpg') no-repeat;
         width: 72px;
         height: 18px;
         background-size: 72px;
         background-position-y: 2px;
      }

      @media screen and (max-width: 768px) {
         .social-block-rating {
            display: block;
            background: url('https://cdn2.hubspot.net/hubfs/2092172/Design_Elements/pr-5-stars.jpg') no-repeat;
            width: 72px;
            height: 18px;
            background-size: 72px;
            margin: auto;
         }

         #writeReviewDiv {
            margin-top: 0px;
         }

         #divReview {
            transform: translateX(50%);
            margin-top: -10%;
         }
      }
   </style>
   <style>
      #form_container {
         width: 800px;
         border-radius: 15px;
         min-height: 200px;
         margin-top: 10px;


      }

      #middle-wizard {
         margin-left: 7%;
         margin-right: 1%;
      }

      .starClass {
         margin-top: -100px
      }


      @media screen and (max-width: 768px) {

         #form_container {
            width: auto;
            border-radius: 15px;
            min-height: 50px;
            margin-top: 0px;
         }

         #middle-wizard {
            margin-left: 0px;
            margin-right: 0px;

         }

         .starClass {
            margin-top: 00px
         }



      }
   </style>
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
                        <a class="nav-link active" href="./checkout.php">Shop</a>
                     </li>
                     <?php
                     if(isset($_SESSION['email']))
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








      <!-- Review Section Start -->

      <div class="benefits-section">
         <div class="container" id="container">
            <div class="row text-center">
               <div class="col-lg-12 col-sm-12 section-title">
                  <h1>TOP CUSTOMERS REVIEWS</h1>
               </div>
               <div class="col-lg-12 col-sm-12 section-desc">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni </p>
               </div>
            </div>

            <div id="load_box">
               <?php
               $result = $con->query("SELECT * from classic_review");

               if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
                     $name = $row['name'];
                     $id = $row['id'];
                     $review = $row['review_text'];
                     $timestamp = $row['timestamp'];
                     $rating = $row['rating'];

                     if ($rating == '1') {
                        $check1 = "checked";
                        $check2 = "";
                        $check3 = "";
                        $check4 = "";
                        $check5 = "";
                     } else if ($rating == '2') {
                        $check1 = "checked";
                        $check2 = "checked";
                        $check3 = "";
                        $check4 = "";
                        $check5 = "";
                     } else if ($rating == '3') {
                        $check1 = "checked";
                        $check2 = "checked";
                        $check3 = "checked";
                        $check4 = "";
                        $check5 = "";
                     } else if ($rating == '4') {
                        $check1 = "checked";
                        $check2 = "checked";
                        $check3 = "checked";
                        $check4 = "checked";
                        $check5 = "";
                     } else if ($rating == '5') {
                        $check1 = "checked";
                        $check2 = "checked";
                        $check3 = "checked";
                        $check4 = "checked";
                        $check5 = "checked";
                     }


                     echo '



                  <main>
    <div id="form_container" >
        <div class="row" style="border-radius: 25px;">
            <div class="col-lg-12">

                <div id="wizard_container">


                    <form id="review-form" method="POST" action="submit-review-classic.php" style="font-family: "Gilroy-Regular;"">


                        <div id="middle-wizard" >
                        <span class="starClass">
                        <input type="radio" ' . $check5 . ' class="required rating-input"  value="5"><label for="rating-input-1-5" class="rating-star"></label>
                        <input type="radio" ' . $check4 . ' class="required rating-input"  value="4"><label for="rating-input-1-4" class="rating-star"></label>
                        <input type="radio" ' . $check3 . ' class="required rating-input"  value="3"><label for="rating-input-1-3" class="rating-star"></label>
                        <input type="radio" ' . $check2 . ' class="required rating-input"  value="2"><label for="rating-input-1-2" class="rating-star"></label>
                        <input type="radio"  ' . $check1 . ' class="required rating-input" value="1 "><label for="rating-input-1-1" class="rating-star"></label>
                                   </span>
                            <div class="step">
                                <h3 class="main_question" style="font-weight:500;font-family: "Gilroy-Regular";">' . $name . '</h3>
                                
                                <div class="row">
                                    <div class="col-md-12" style="margin-top:-3%">
                                        <div class="form-group clearfix">
                                        
                                            <label class="rating_type" style="font-family: "Gilroy-Regular;"" >' . $timestamp . '</label>
                                         
                                        </div>

                                        <div class="blog-slider__text" style="font-family: "Gilroy-Regular;"">' . $review . '</div>

                                    </div>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</main>
                  
                  ';
                  }
               } ?>
            </div>
       
               <!-- Jquery-->
               <script src="review/js/jquery-3.2.1.min.js"></script>
               <!-- Common script -->
               <script src="review/js/common_scripts.js"></script>
               <!-- Wizard script -->
               <script src="review/js/review_wizard_func.js"></script>
               <!-- Menu script -->
               <script src="review/js/velocity.min.js"></script>
               <script src="review/js/main.js"></script>
               <!-- Theme script -->
               <script src="review/js/functions.js"></script>



               <!-- Review Section End -->



               </div>

             

               <!-- Jquery-->
               <script src="review/js/jquery-3.2.1.min.js"></script>
               <!-- Common script -->
               <script src="review/js/common_scripts.js"></script>
               <!-- Wizard script -->
               <script src="review/js/review_wizard_func.js"></script>
               <!-- Menu script -->
               <script src="review/js/velocity.min.js"></script>
               <script src="review/js/main.js"></script>
               <!-- Theme script -->
               <script src="review/js/functions.js"></script>

               <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
               <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
               <script>
                  $(document).ready(function() {
                     document.getElementById('contact_success_1').style.display = "none";
                     document.getElementById('contact_error_1').style.display = "none";
                     document.getElementById('newsletter_error').style.display = "none";
                  });
                  $("#form").submit(function(e) {
                     e.preventDefault();
                  });

                  function checkform() {
                     var email = document.getElementById("newsletter");
                     var email_error = document.getElementById('edit_email_error_1');
                     var pattern = new RegExp("^([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])(;)?)+$");
                     var data = email.value;
                     document.getElementById('contact_success_1').style.display = "none";
                     document.getElementById('contact_error_1').style.display = "none";
                     document.getElementById('newsletter_error').style.display = "none";
                     email_error.style.display = "none";


                     if (pattern.test(data) != true) {
                        email_error.style.display = "block";
                        email.value = "";
                        email.focus();

                     } else {

                        var formData = new FormData();

                        formData.append("email", email.value);

                        $.ajax(

                           {
                              url: "./interest-newsletter.php",
                              type: 'POST',
                              data: formData,
                              contentType: false,
                              processData: false,
                              success: function(data) {
                                 if (data == "New record created successfully") {
                                    document.getElementById('contact_success_1').style.display = "block";
                                    document.getElementById('contact_error_1').style.display = "none";
                                    document.getElementById('newsletter_error').style.display = "none";
                                 } else if (data == "already exits") {
                                    document.getElementById('contact_success_1').style.display = "none";
                                    document.getElementById('contact_error_1').style.display = "none";
                                    document.getElementById('newsletter_error').style.display = "block";
                                 } else {


                                    document.getElementById('contact_success_1').style.display = "none";

                                    document.getElementById('contact_error_1').style.display = "block";
                                    document.getElementById('newsletter_error').style.display = "none";
                                 }
                              }
                           }

                        );
                        document.getElementById("form").reset();
                     }
                  }
               </script>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
            <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
            <script>
               function product() {
                  var formData = new FormData();

                  formData.append("pay", "product_1");

                  $.ajax(

                     {
                        url: "./set-session.php",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                           if (data == "yes") {
                              window.location = './checkout.php';

                           } else {}
                        }
                     }

                  );

               }
            </script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
            <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
            <script>
               var swiper = new Swiper('.blog-slider', {


               });
            </script>

<div style="margin-top: 120px;"> <?php require("footer.php")?></div>

</body>

</html>