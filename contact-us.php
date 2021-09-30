<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Contact Us | Shiney Heinie</title>
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
                        </ul>
                    </div>
                </nav>
            </div>
         </div>
         <!-- Navigation Menu End -->

         <!-- Contact Us Form Start -->
         <div class="contact-form-section">
             <div class="container">
                <div class="row">
                    <div class="col-md-7 shadow rounded form-section">
                        <form onsubmit="contact_new_form()" id="contact_form"  method="POST" >
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="form-label" class="form-label">First Name</label>
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name"></input>
                                </div>
                                <div class="col mb-3">
                                    <label for="form-label" class="form-label">Last Name</label>
                                    <input type="text"  name="last_name" id="last_name" class="form-control" placeholder="Last Name"></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col mb-3">
                                    <label for="form-label" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email"  id="email" placeholder="name@example.com"></input>
                                    <div id="edit_email_error" style="color: red; display: none;">Enter valid Email.</div>
                                </div>
                            </div>
                            <div class="mb-3"> 
                                <div class="col mb-3">
                                    <label for="form-label" class="form-label">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"></input>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="col mb-3">
                                    <label for="form-label" class="form-label">Message</label>
                                    <textarea  class="form-control" name="message" id="message" placeholder="Write your message here.." rows="5"></textarea>
                                </div>
                            </div>
                            <div id="contact_success" class="ht-message-box style-success mb-2 " role="alert" style="display:none; margin-top:-10px; font-size: 15px; color: green;">
                                                        <span class="icon"><i class="far fa-check-circle"></i></span> Thank you ! We
                                                        have received your response.
                            </div>

                            <div id="contact_error" class="ht-message-box style-error mb-2" role="alert" style="display:none; margin-top:-10px; font-size: 15px; color: red;">
                                                        <span class="icon"><i class="far fa-times-circle"></i></span> We were unable
                                                        to
                                                        receive your response. Try Again or Mail us at <a href="mailto:" style="text-decoration:underline;"><b>example@gmail.com</b></a>
                            </div>
                            <button type="submit" class="btn btn-primary" style="background-color: #75CFB8; border: none; color: #fff; font-family: Gilroy-Regular, sans-serif ">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-5 g-maps">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.345830566643!2d-117.89077088449973!3d33.85497723554654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcd665995aeabb%3A0xf54c40cfcff2baed!2s1461%20N%20Daly%20St%2C%20Anaheim%2C%20CA%2092806%2C%20USA!5e0!3m2!1sen!2sin!4v1632254053493!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        <div class="row">
                            <div class="col-md-4">
                                <h5>Call Us At :</h5>
                                <p>7146148086</p>
                            </div>
                            <div class="col-md-6">
                                <h5>Email Us At :</h5>
                                <p>helloshineyheinie@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>

         <?php require("./footer.php");?>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script>
          $(document).ready(function() {
           document.getElementById('contact_success').style.display = "none";
            document.getElementById('contact_error').style.display = "none";
        });
          $("#contact_form").submit(function(e) {
            e.preventDefault();
            document.getElementById('contact_success').style.display = "none";
                
                document.getElementById('contact_error').style.display = "none";
        });

        function contact_new_form() {

            var first_Form = document.getElementById("first_name");
            var last_Form = document.getElementById("last_name");
           var messageForm = document.getElementById("message");
           var subjectForm = document.getElementById("subject");
            var emailForm = document.getElementById("email");
            var email_error = document.getElementById('edit_email_error');
            var pattern = new RegExp("^([a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])(;)?)+$");
            var data = emailForm.value;
            document.getElementById('contact_success').style.display = "none";
                document.getElementById('contact_error').style.display = "none";

           
            email_error.style.display = "none";
           

                if (pattern.test(data) != true) {
                    email_error.style.display = "block";
                    emailForm.value = "";
                    emailForm.focus();

                }
             else {
                email_error.style.display = "none";

                var formData = new FormData();

                formData.append("first_name", first_Form.value);
                formData.append("last_name", last_Form.value);
                formData.append("email", emailForm.value);
                formData.append("message", messageForm.value);
                formData.append("subject", subjectForm.value);
               

                $.ajax(

                    {
                        url: "./insert-content-contact.php",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,



                        success: function(data) {

                            if (data == "New record created successfully") {

                                
                                document.getElementById('contact_success').style.display = "block";
                                document.getElementById('contact_error').style.display = "none";



                            } else {
                               
                                document.getElementById('contact_success').style.display = "none";
                            
                            document.getElementById('contact_error').style.display = "block";
                            }

                        }



                    }

                );

            }
        }
      </script>
    </body>
</html>