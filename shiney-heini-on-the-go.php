<?php 
session_start();
require("connection.php");
if(isset($_REQUEST['product'])){
$_SESSION['pay']=$_REQUEST['product'];
}

?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Shiney Heinic On The Go | Shiney Heinie</title>
      <link rel="stylesheet" href="./css/style-product.css" />
   <link rel="stylesheet" href="./css/style-main.css" />
   <link rel="stylesheet" href="./css/product-responsive.css" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>

      
  
   </head>
   <body>

   <style>
        #read_more{
         align-items:center;margin-left:43%;margin-top:3%;

      }
      #writeReviewDiv {
         margin-top: 10px;

      }
      #ViewReviewDiv{
         margin-top: -5%;
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
         #read_more{
         align-items:center;margin-left:0%;margin-top:3%;
      }
      #ViewReviewDiv{
         margin-top: -30%;
      }

      }
   </style>
      <div class="main-wrapper">

         <!-- Navigation Menu Start -->
         <div class="shiney-heini">
            <div class="container" style="max-width: 1340px;">
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
                        </ul>
                     </div>
               </nav>
            </div>
         </div>
         <!-- Navigation Menu End -->

         <!-- Product Title Section Start -->
        <div class="buy-btn">
            <div class="container" style="max-width: 1340px;">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="review-box">
                            <p id="product-title">SHINEY HEINIE ON THE GO</p>
                            <div class="d-inline-flex stars">
                                <i class="fas fa-star fa-lg"></i>
                                <i class="fas fa-star fa-lg"></i>
                                <i class="fas fa-star fa-lg"></i>
                                <i class="fas fa-star fa-lg"></i>
                                <i class="fas fa-star fa-lg"></i>
                                <p class="review-desc">3050 Reviews</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="btn-buy">
                        <a  href="#" onclick="product_second(); return false;" id="idOfElement" style="text-decoration: none;">
                              
                              <p style="font-weight: 800;">Buy Now</p>
                           </a>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Title Section End -->

         <!-- Product Detail Section Start -->
         <div class="product-section pt-5 pb-5">
            <div class="container" style="max-width: 1340px;">
               <div class="row">
                  <div class="col-lg-6 col-md-12 products-img">
                     <img src="./images/shiney-go.png" class="main-img" />
                     <div class="d-flex products-mini">
                        <div class="mini">
                           <img src="./images/shiniy-heini-on-the-go-mini.png" />
                        </div>
                        <div class="mini">
                           <img src="./images/shiniy-heini-on-the-go-mini.png" />
                        </div>
                        <div class="mini">
                           <img src="./images/shiniy-heini-on-the-go-mini.png" />
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 product-details">
                     <h1 class="product-name on-the-go">SHINEY HEINI ON THE GO</h1>
                     <p class="product-detail"><span>4.9</span> star rating. 2108 Reviews</p>
                     <p class="product-detail mt-4">Get a hygienic, gentle wash of clean water at the turn of a knob. Instantly attaches to any toilet. No professional installation needed. You’ll never go back to TP again. </p>
                     <p class="product-detail mt-4">Regular Sale Price <del class="product-price">39.99$</del> <span class="product-price">24.99$</span></p>
                     <ul class="product-detail-list mt-4">
                        <li><b>Angle customization.</b> Get a precise clean every time.</li>
                        <li><b>Pressure customization.</b> Enjoy back and front wash at your preferred comfort level.</li>
                        <li><b>Backside certified.</b> Get the same sparkling-clean feeling that all Shiney Heinie products provide..</li>
                        <li><b>Standard size.</b> Attach the bidet to any toilet seat in perfect fit.</li>
                        <li><b>Complete Spa.</b> Spend less as the box includes everything you need for a convenient installation.</li>
                     </ul>
                     <!-- <div class="btn-buy">
                        <p style="font-weight: 800;">Add to Cart</p>
                    </div> -->
                  </div>
               </div>
            </div>
         </div>
         <!-- Product Detail Section Start -->

         <!-- Tips Section Start -->
         <div class="tips-section">
            <div class="container" style="max-width: 1340px;">
               <div class="row text-center">
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/001-walk 1.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>GO ANYWHERE</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Work. Vacantions. That Yurt you rented. Take a carefree, cleen dump wherever, whenever. (No Shakira)</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/icon bottle.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>GO COMPACT</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Discreet and collapsible because everyone doesn`t need to know your business. Though you`ll probably brag about it anyway.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/004-forest.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>GO GREEN</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>With Shiney Hinney Travel, you`ll use less toilet paper reducing your carbon footprint. Toilet paper has met its match.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/002-butt 1.png" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>GO BUTTS!</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Celebrate your butt and clean it right with the perfect streem of cleansign water to wash your travel turds away.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Tips Section End -->

         <!-- Steps Section Start -->
         <div class="steps-section">
             <div class="container" style="max-width:1340px">
                 <div class="row text-center">
                     <div class="col-lg-3 col-sm-12">
                         <div class="steps-img">
                             <img src="./images/steps-img.png" />
                             <div class="content">
                                 <div>
                                     <h1>FILL'ER UP</h1>
                                    <p>Use any clean water source to fill your bottle.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-12 custom-margin-resp">
                         <div class="steps-img">
                             <img src="./images/steps-img.png" />
                             <div class="content">
                                 <div>
                                     <h1>DOO YOUR DOO</h1>
                                    <p>Take your time. This is all about you.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-12 custom-margin-resp">
                         <div class="steps-img">
                             <img src="./images/steps-img.png" />
                             <div class="content">
                                 <div>
                                     <h1>PICK THE BEST ANGLE</h1>
                                    <p>Front. Back. Side to side, choose the angle that best fits your needs.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-3 col-sm-12 custom-margin-resp">
                         <div class="steps-img">
                             <img src="./images/steps-img.png" />
                             <div class="content">
                                 <div>
                                     <h1>SQUEEZE AND SPEAY</h1>
                                    <p>Turn your poopy b-hole into a clean, sparkling booty.</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Steps Section End -->

           <!-- Write Review Section Start -->

      <div class="benefits-section">
         <div class="container" style="max-width: 1340px;">
            <div class="row text-center">
               <div class="col-lg-12 col-sm-12 section-title">
                  <h1>WE APPRECIATE YOUR RATE</h1>
               </div>
               <div class="col-lg-12 col-sm-12 section-desc">
                  <p>Help us to improve our service and customer satisfaction</p>
               </div>
            </div>
            <div id="writeReviewDiv"><?php require('./write-review-onthego.php'); ?></div>



         </div>
      </div>


      <!-- Write Review Section End -->

        <!-- Review Section Start -->

      <div class="benefits-section" id="ViewReviewDiv">
         <div class="container" id="container" style="max-width: 1340px;">
            <div class="row text-center">
               <div class="col-lg-12 col-sm-12 section-title">
                  <h1>TOP CUSTOMERS REVIEWS</h1>
               </div>
               <div class="col-lg-12 col-sm-12 section-desc">
                  <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni </p>
               </div>
            </div>

            <div id="load_box">
            <?php require('./view-limited-reviews-onthego.php'); ?>
            </div>
            
            
            
            <a href="view-onthego-reviews.php" id="read_more" class="blog-slider__button">View All</a>

            
         </div>
         
      </div>
      <!-- Review Section End -->

      <div style="margin-top: -120px;"> <?php require("footer.php")?></div>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      
      <script>
         function product_second(){
         var formData = new FormData(); 
            
            formData.append("pay","product_2");
            
            $.ajax(
         
            {
        url:"./set-session.php" ,
        type:'POST',
        data:formData,
        contentType: false,
        processData: false,           
                success:function(data){   
                    if (data == "yes") {
                     window.location = './checkout.php';
                       
                    } else {
                    }
                    }                  
            }
    
        );
      
      }
      </script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
   <script>
      var swiper = new Swiper('.blog-slider', {
         spaceBetween: 30,
         effect: 'fade',
         loop: false,
         mousewheel: {
            invert: false,
         },
         // autoHeight: true,
         pagination: {
            el: '.blog-slider__pagination',
            clickable: true,

         }
      });
   </script>
   </body>
</html>