<?php
session_start();
if(isset($_REQUEST['product'])){
   $_SESSION['pay']=$_REQUEST['product'];
   }
require("./check-authenticate.php");
?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
      <title>Shiney Heinic Spa 2.0 | Shiney Heinie</title>
      <link rel="stylesheet" href="./css/style-product.css" />
      <link rel="stylesheet" href="./css/product-responsive.css" />
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="review-box">
                            <p>SHINEY HEINIE CLASSIC</p>
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
                           <a  href="#" onclick="product(); return false;" id="idOfElement" style="text-decoration: none;">
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
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12 products-img">
                     <img src="./images/spa-heini-1.png" class="main-img" />
                     <div class="d-flex products-mini">
                        <div class="mini">
                           <img src="./images/spa-heini-mini.png" />
                        </div>
                        <div class="mini">
                           <img src="./images/spa-heini-mini.png" />
                        </div>
                        <div class="mini">
                           <img src="./images/spa-heini-mini.png" />
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 product-details">
                     <h1 class="product-name">SHINEY HEINIE CLASSIC</h1>
                     <h3 class="product-desc">Bidet Attachment</h3>
                     <p class="product-detail"><span>4.9</span> star rating. 2108 Reviews</p>
                     <p class="product-detail mt-4">The Shiney Heinie Classic is a bidet designed to attach to any toilet giving you a cleaner heinie after your number 2 than toilet paper ever could. Experience the gentle and hygienic wash Shiney Heinie Classic provides with just a turn of a knob. You’ll never want to go back to just toilet paper again.</p>
                     <p class="product-detail mt-4">Regular Sale Price <del class="product-price">99.99$</del> <span class="product-price">69.99$</span></p>
                     <ul class="product-detail-list mt-4">
                        <li><b>Simple Design.</b> Minimalistic and sleek design for easy use and no interference. Shiney Heinie brings you an easy to use and modern product that's the perfect pair to your toilet.</li>
                        <li><b>Complete Package.</b> The Classic is simply the complete package as it provides you with everything you need for a fast and easy install.</li>
                        <li><b>Does Not require any electricity or plumbing.</b> for set up. Shiney Heinie Classic only needs to be hooked up  to your existing plumbing with the adapter for use</li>
                        <li><b>Dual Nozzle.</b> Comes with a front and rear nozzle for a precise stream and women's use. (Ladies you're welcome 😉)</li>
                        <li><b>Pressure Control.</b> You can control the pressure of your wash from a gentle spray to full pressure.</li>
                        <li><b>Nozzle Guard. </b>Whenever your bidet system is not in use the nozzle will simply retract into the nozzle guard. Preventing from contamination.</li>
                        <li><b>Easy Clean.</b>Cleaning your bidet system is simple and easy with any standard detergents.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- Product Detail Section Start -->

         <!-- Tips Section Start -->
         <div class="tips-section">
            <div class="container">
               <div class="row text-center">
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/tip-1.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>BETTER FOR YOUR BOOTY</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Wash your butt like you do every other body part, to help with UTI’s, hemorrhoids, underwear stains, and those late night taco bell runs.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/003-piggy-bank.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>BETTER FOR YOUR BANK</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Shiney Heinie cuts down your TP usage by upto 75%. Helping you save thousands over time.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/004-forest.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>BETTER FOR THE PLANET</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>It takes 15 million trees to make the annual supply of TP. It also takes 37 gallons of water to make just one roll of toilet paper. Whereas, using Shiney Heinie consumes about a pint of water.</p>
                     </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                     <div class="tips-image">
                        <img src="./images/001-earth.svg" />
                     </div>
                     <div class="tips-heading pt-4">
                        <h5>BETTER FOR ECOSYSTEM</h5>
                     </div>
                     <div class="tips-desc pt-1">
                        <p>Not only does it take a lot of water and trees to produce toilet paper, but toilet paper production is also coming at the cost of homes and habitats for all the other species.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Tips Section End -->

         <!-- Features Section Start -->
         <div class="features-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12">
                     <div class="feature-image-wrapper">
                        <img src="./images/features.png" />
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 feature-details">
                     <h1 class="title">Product Features</h1>
                     <ul class="list mt-2">
                        <li>Optimized pressure + angle control for a targeted spray on your pooper</li>
                        <li>Includes everything for an easy install in under 8 ½ minutes</li>
                        <li>Requires NO electricity or plumbing</li>
                        <li>Automatic self-cleaning nozzle</li>
                        <li>60 Day Risk-Free Guarantee</li>
                        <li>Over 7,500 5-Star Reviews</li>
                        <li>Women love the Shiney Heinie.</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- features Section End -->

         <!-- Installation Section Start -->
         <div class="installation-section">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-12 installation-steps">
                     <h1 class="title">INSTALLATION</h1>
                     <p class="sub-title">Installation is easy and does not require any additional tools.<br/>Less then a 9 minute set up time</p>
                     <div class="step-container">
                        <div class="step-point">
                           <p>1</p>
                        </div>
                        <div class="step-desc text-center">
                           <p>Remove toilet seat</p>
                        </div>
                     </div>
                     <div class="step-container-2">
                        <div class="step-point">
                           <p>2</p>
                        </div>
                        <div class="step-desc text-center">
                           <p>Connect Shiney Heinie to clean water supply</p>
                        </div>
                     </div>
                     <div class="step-container-3">
                        <div class="step-point">
                           <p>3</p>
                        </div>
                        <div class="step-desc text-center">
                           <p>Place seat back & use knob to spray</p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6 col-md-12 mt-md-5">
                     <div class="d-flex installation-img">
                        <img src="./images/installation.png" />
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Installation Section End -->

         <?php require("./footer.php");?>

      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script>
         function product(){
         var formData = new FormData(); 
           
            formData.append("pay","product_1");
            
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
         //window.location = './checkout.php';
      }
      </script>
   </body>
</html>