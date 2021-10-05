<?php
session_start();
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
         .SubmitButton {
        
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
                            <li class="nav-item ">
                                <a class="nav-link active" href="./checkout.php">Shop</a>
                            </li>
                            <?php

                            if (!isset($_SESSION['email'])) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="./login.php">Login</a>
                                </li>
                            <?php
                            } else {

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

        <!-- Checkout Form Start -->
        <div class="checkout-form-section">
            <div class="container">
            <form action="./charge.php" method="post" id="payment-form">
                <div class="row">

                   
                    <div class="col-md-8 shadow order-md-1 p-5 form-left">
                        <h3 class="mb-3">Billing address</h3>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="firstName" class="firstName">First name</label>
                                <input type="text" name="first_name" id="first_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="First Name" required>

                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastName">Last name</label>
                                <input type="text" name="last_name" id="last_name" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Last Name" required>

                            </div>
                        </div>
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Email Address" required>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Phone" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Address" required>

                        </div>



                        <div class="row">
                            <div class="col-md-5 mb-3">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="country" required>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="state" required>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="zip">Zip</label>
                                <input type="text" name="zip" id="zip" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="zip code" required>

                            </div>
                        </div>

                        <hr class="mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input StripeElement StripeElement--empty" name="check_add" id="check">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>

                        <hr class="mb-4">
                        <div class="col-md-12 order-md-1 form-left" id="address_ship_modal">
                            <h3 class="mb-3">Shipping Address</h3>

                            <div class="row">

                                <div class="mb-3 col-md-12">
                                    <label for="address">Address </label>
                                    <input required type="text" name="address_ship" id="address_ship" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="Address">

                                </div>



                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country</label>
                                        <input required type="text" name="country_ship" id="country_ship" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="country">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State</label>
                                        <input required type="text" name="state_ship" id="state_ship" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="state">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip</label>
                                        <input required type="text" name="zip_ship" id="zip_ship" class="form-control mb-3 StripeElement StripeElement--empty" placeholder="zip code">

                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <div class="col-md-4 order-md-2 mb-4 form-right">
                        <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span>Your Cart</span>
                        </h4>
                        <form action="./charge.php" method="post" id="payment-form">
                            <ul class="list-group mb-3">
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div style="font-family: 'Gilroy-Regular';">
                                        <h5 class="my-0" style="font-weight: bolder">SHINEY HEINIE CLASSIC</h5>
                                        <span style="display: flex;margin-top:10px; ">
                                            <small class="text-muted">Quantity :</small>
                                            <i class="fas fa-minus form-control" style="width:40px;margin-left:10px" onclick="minus()"></i>
                                            <small class="text-muted form-control" style="width:40px" id="product1">0</small>
                                            <i class="fas fa-plus form-control" style="width:40px" onclick="total()"></i>
                                        </span>
                                        <input type="number" name="product_first" id="first" class="form-control mb-3 StripeElement StripeElement--empty" hidden>



                                    </div>
                                    <div style="font-family: 'Gilroy-Regular';font-weight:bolder;">
                                        <div>
                                            <span class="text-muted">$</span><span class="text-muted" id="prod_final">0</span>
                                        </div>

                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div style="font-family: 'Gilroy-Regular';">
                                        <h5 class="my-0" style="font-weight: bolder">SHINEY HEINIE ON THE GO</h5>
                                        <span style="display: flex;margin-top:10px; ">
                                            <small class="text-muted">Quantity :</small>
                                            <i class="fas fa-minus form-control" style="width:40px;margin-left:10px" onclick="minus1()"></i>
                                            <small class=" form-control" style="width:40px" id="product2">0</small>
                                            <i class="fas fa-plus form-control" style="width:40px" onclick="total1()"></i>
                                        </span>
                                        <input type="number" name="product_second" id="second" class="form-control mb-3 StripeElement StripeElement--empty" hidden>

                                    </div>
                                    <div style="font-family: 'Gilroy-Regular';font-weight:bolder;">
                                        <div>
                                            <span class="text-muted">$</span><span class="text-muted" id="prod_final_2">0</span>
                                        </div>

                                    </div>
                                </li>
                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="total">Total</span>
                                    <input type="number" name="pay" id="pay"  class="form-control mb-3 StripeElement StripeElement--empty" step="0.01" hidden>


                                    <div><strong class="total-price">$</strong><strong class="total-price" id="final">0</strong></div>
                                </li>
                                
                                    <div id="card-element" class="form-control mt-2">
                                        <!-- a Stripe Element will be inserted here. -->
                                    </div>
                                    <!-- Used to display form errors -->
                                    <div style="color: red;" id="card-errors" role="alert"></div>

                                    <button style=" height: 50px;
                                    display: inline-flex;
                                    background-image: linear-gradient(147deg, #75CFB8 0%, rgb(255, 198, 125, 0.5) 74%);
                                    padding: 15px 15px;
                                    border-radius: 5px;
                                    border: none;
                                    color: #fff;
                                    text-decoration: none;
                                    font-family: 'Gilroy Regular', sans-serif;
                                    font-weight: 500;
                                    justify-content: center;
                                    text-align: center;
                                    margin-left: 2%;
                                    letter-spacing: 1px;">Submit Payment</button>
                               
                            </ul>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <?php require("./footer.php"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



        <?php
        /*       $email=$_SESSION['email'];
        $sql="SELECT * from customer_address_list where email='$email'";
        
        $res=$con->query($sql);
        
        if ($res->num_rows > 0) {
          
          $row = $res->fetch_assoc();
          if($email==isset($row['email']))
          {
            echo '<script >
            document.getElementById("first_name").value = "'.$row['first_name'].'";
            document.getElementById("last_name").value = "'.$row['last_name'].'";
            document.getElementById("email").value = "'.$row['email'].'";
            document.getElementById("country").value = "'.$row['country'].'";
            document.getElementById("address").value = "'.$row['address'].'";
            document.getElementById("zip").value = "'.$row['state'].'";
            document.getElementById("state").value = "'.$row['zip'].'";
            document.getElementById("address2").value = "'.$row['address_second'].'";
            $("#save-info").prop("checked", true);
            
           </script>';
                  
          }
         
          }
        */ ?>
        <?php

        if ($_SESSION['pay'] == "product_1") {
            echo '<script>
                        var pro1 = 1;
                        var pro2 = 0;
                        var total = pro1 * 69.99 + pro2 * 24.99 ;
                        var total2 = pro1 * 69.99 * 100 + pro2 * 24.99 * 100;
                        document.getElementById("product1").innerHTML = 1;
                        
                        document.getElementById("prod_final").innerHTML = 69.99;
                        document.getElementById("first").value = pro1;
                        document.getElementById("pay").value = total2;
                        document.getElementById("final").innerHTML = total.toFixed(2);
                    </script>';
        } else if ($_SESSION['pay'] == "product_2") {
            echo '<script>
                        var pro1 = 0;
                        var pro2 = 1;
                        var total = pro1 * 69.99  + pro2 * 24.99;
                        var total2 = pro1 * 69.99 * 100 + pro2 * 24.99 * 100 ;
                        document.getElementById("product2").innerHTML = pro2;
                       
                        document.getElementById("prod_final_2").innerHTML = 24.99;
                        document.getElementById("second").value = pro2;
                        document.getElementById("pay").value = total2;
                        document.getElementById("final").innerHTML = total.toFixed(2);
                    </script>';
        } else {
            echo '<script>
                var pro1 = 0;
                var pro2 = 0;
               
            </script>';
        }


        ?>
        <script>
            $('#check').click(function() {
                if ($('#check:checked').length > 0) {

                    $("#check").val("on");
                    $("#address_ship").val(document.getElementById("address").value);
                    $("#country_ship").val(document.getElementById("country").value);
                    $("#state_ship").val(document.getElementById("state").value);
                    $("#zip_ship").val(document.getElementById("zip").value);




                } else {

                    $("#check").val("off");
                    $("#address_ship").val("");
                    $("#country_ship").val("");
                    $("#state_ship").val("");
                    $("#zip_ship").val("");

                }
            });



            function total() {
                pro1++;

                document.getElementById("product1").innerHTML = pro1;
                document.getElementById("prod_final").innerHTML = (pro1 * 69.99).toFixed(2);
                final();

            }

            function total1() {
                pro2++;
                document.getElementById("product2").innerHTML = pro2;
                document.getElementById("prod_final_2").innerHTML = (pro2 * 24.99).toFixed(2);
                final();
            }

            function minus() {
                pro1--;
                if (pro1 == 0 || pro1 < 0) {
                    pro1 = 0;
                    document.getElementById("product1").innerHTML = pro1;
                    document.getElementById("prod_final").innerHTML = (pro1 * 69.99).toFixed(2);
                } else {
                    document.getElementById("product1").innerHTML = pro1;
                    document.getElementById("prod_final").innerHTML = (pro1 * 24.99).toFixed(2);
                }
                final();
            }

            function minus1() {
                pro2--;
                if (pro2 == 0 || pro2 < 0) {
                    pro2 = 0;
                    document.getElementById("product2").innerHTML = pro2;
                    document.getElementById("prod_final_2").innerHTML = (pro2 * 69.99).toFixed(2);
                } else {
                    document.getElementById("product2").innerHTML = pro2;
                    document.getElementById("prod_final_2").innerHTML = (pro2 * 24.99).toFixed(2);
                }
                final();
            }

            function final() {
                var total = pro1 * 69.99 + pro2 * 24.99;
                var total2 = pro1 * 69.99 * 100 + pro2 * 24.99 * 100;
                if (total < 0) {
                    total = 0;
                    total2 = 0;
                    document.getElementById("first").value = pro1;
                    document.getElementById("second").value = pro2;
                    document.getElementById("pay").value = total2;
                    document.getElementById("final").innerHTML = total.toFixed(2);
                } else {
                    document.getElementById("first").value = pro1;
                    document.getElementById("second").value = pro2;
                    document.getElementById("pay").value = total2;
                    document.getElementById("final").innerHTML = total.toFixed(2);

                }
            }
        </script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="./charge.js"></script>

    </div>
</body>

</html>