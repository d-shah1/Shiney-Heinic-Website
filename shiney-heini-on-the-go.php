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
      <title>Shiney Heinic On The Go | Shiney Heinie</title>
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
            <div class="container">
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
            <div class="container">
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
             <div class="container">
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

         <?php require("./footer.php");?>

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
      //window.location = './checkout.php';
      }
      </script>
   </body>
</html>