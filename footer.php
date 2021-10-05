<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>footer</title>
   <style>
      .input{
     transform: translateX(10%);

      }</style>
</head>

<body>
   <!-- Footer -->
   <footer>
      <div class="container">
         <div class="row">
            <div class="col-lg-4 col-sm-12 footer-1">

               <h1>Sign up for our newsletter</h1>
               <form id="form" onsubmit="checkform()" method="POST">
                  <div class="d-flex input">
                     <input type="email" class="newsletter-input" name="newsletter" style="margin-top: 0% !important;" id="newsletter" placeholder="Enter Email Address" />
                     <button type="submit" class="btn btn-hover-secondary " style="height:50px;display: inline-flex;
         background-image: linear-gradient(147deg, #75CFB8 0%, rgb(255, 198, 125, 0.5) 74%);
         padding: 15px 15px;
         border-radius: 5px;
         border:none;
         color: #fff;
         box-shadow: 0px 14px 80px rgb(255, 198, 125, 0.4);
         text-decoration: none;
         font-weight: 500;
         justify-content: center;
         text-align: center;
         margin-left:2%;
         letter-spacing: 1px;">Subscribe</button>

                  </div>
                  <div id="edit_email_error_1" style="color: white; display: none;">Enter valid Email.</div>
                  </from>
                  <div id="contact_success_1" class="ht-message-box style-success mb-2 " role="alert" style=" color: white;">
                     <span class="icon"><i class="far fa-check-circle"></i></span> Thank you ! We
                     have received your response.
                  </div>
                  <div id="newsletter_error" class="ht-message-box style-error mt-3" role="alert" style="color: white;">
                     <span class="icon"><i class="far fa-times-circle"></i></span> You are Already Subscribed
                  </div>

                  <div id="contact_error_1" class="ht-message-box style-error mb-2" role="alert" style="color: white;">
                     <span class="icon"><i class="far fa-times-circle"></i></span> We were unable
                     to
                     receive your response. Try Again later
                  </div>

            </div>
            <div class="col-lg-3 col-sm-12 footer-3">
               <ul>
                  <li><a href="./contact-us.php" style="text-decoration: none; color: white;">Contact Us</a></li>
                  <li class="custom-margin"><a href="./faq's.php" style="text-decoration: none; color: white;">FAQ's</a></li>
                  <li class="custom-margin"><a href="./shiney-heini-on-the-go.php" style="text-decoration: none; color: white;">Shiney Heinie On The Go</a></li>
                  <li class="custom-margin"><a href="./shiney-heinic-spa-2.0.php" style="text-decoration: none; color: white;">Shiney Heinie Classic</a></li>
               </ul>
            </div>
            <div class="col-lg-3 col-sm-12 footer-3">
               <ul>
                  <li>30-Day Return Policy</li>
                  <li class="custom-margin"><a href="./privacy-policy.php" style="text-decoration: none; color: white;">Privacy Policy</a></li>
                  <li class="custom-margin"><a href="./terms-conditions.php" style="text-decoration: none; color: white;">Terms &amp; Conditions</a></li>
               </ul>
            </div>
            <div class="col-lg-2 col-sm-12 text-center footer-5">
               <div class="social-icons">
                  <i class="fab fa-facebook-f"></i>
                  <i class="fab fa-instagram" ></i>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- Footer End -->
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

</body>

</html>