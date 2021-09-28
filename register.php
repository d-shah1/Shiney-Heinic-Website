
<?php
session_start();
if (isset($_REQUEST['message'])) {
    $message = $_REQUEST['message'];
} else {
    $message = "";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Register | Shiney Heinie</title>
        <link rel="stylesheet" href="./css/style-main.css" />
        <link rel="stylesheet" href="./css/responsive.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script>
            function checkps(){
           
            var data=f1.password.value;
            var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
            var reg=new RegExp(pat);
            passwordcheck();
            if(reg.test(data)){
                data1 = data;
                
                var dc=document.getElementById("any");
                dc.innerHTML="";
                document.getElementById("password2").disabled = false;
                
                checkrps();
            }
            else
            {
                   
                    var dc=document.getElementById("any");
                    dc.style.color="red";
                    dc.style.display="block";
                    dc.innerHTML="Password must contain atleast one Capital Character && Special Character && Digit && Length must be greater than 8";
                    document.getElementById("password2").disabled = true;
                   
            }
            }
            function checkrps(){
                //alert("inside");
            
            var data=f1.re_password.value;
            var pat="^.*(?=.{8,})(?=..*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^&+=]).*$";
            var reg=new RegExp(pat);
            var data1=f1.password.value;
            passwordcheck();
            
            
            }
            function passwordcheck(){
            var pass1=f1.password.value;
            var pass2=f1.re_password.value;
            var dc=document.getElementById("any");
            if(!pass1){
                dc.style.color="red";
                dc.style.display="block";
                dc.innerHTML="Enter please Create Password first!!";
            }
            else if(pass1 && pass2){
                if(pass1==pass2){
                    var e=document.getElementById("rpi");
                   
                    dc.style.color="green";
                    dc.style.display="block";
                    dc.innerHTML="password matched successfully";
                    var submit = document.getElementById("submit");
                    submit.disabled=false;
                }
                else if(pass1!=pass2){
                    dc.style.color="red";
                    dc.style.display="block";
                    dc.innerHTML="passwords could not match !";
                    var submit = document.getElementById("submit");
                    submit.disabled=true;
                }
            }
        }
    </script>
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
                    <form action="./register-submit.php" method="post" name="f1">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 left-img">
                                <img src="./images/login-left.png"/>
                            </div>
                            <div class="col-lg-6 col-sm-12 right-form">
                                <h1>Register Now.</h1>
                                <p>Register to know our products and start shopping with exclusive benefits.</p>
                                <div id="any" style="display:none;color:green;"></div>
                                <h6 id="message" style="color:red;">
                                        <?php echo $message ?>
                                </h6>
                                <div class="row name-field">
                                    <div class="col mb-3">
                                        <label for="form-label"  class="form-label">First Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="First Name" required></input>
                                    </div>
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required></input>
                                    </div>
                                </div>
                                <div class="mb-3 email-field">
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="name@example.com" required></input>
                                    </div>
                                </div>
                                <div class="mb-3 password-field">
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Password</label>
                                        <input type="password" id="password1" onkeyup="checkps()" name="password" class="form-control" placeholder="Password" required></input>
                                    </div>
                                </div>
                                <div class="mb-3 password-field">
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Reenter Password</label>
                                        <input type="password" id="password2" onkeyup="checkrps()" name="re_password" class="form-control" placeholder="re-Password" required></input>
                                    </div>
                                </div>
                                <button id="submit" type="submit" class="btn btn-primary mt-3" style="background-color: #75CFB8; border: none; color: #fff; font-family: Gilroy-Regular, sans-serif " disabled="true">Register</button>
                                <p class="register-link">Don't have an account ? <a href="./login.php">Login Now</a></p>
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