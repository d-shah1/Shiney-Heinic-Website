<?php
if (isset($_COOKIE['Remember_me_email']) && isset($_COOKIE['Remember_me_password'])) {
    $email = $_COOKIE['Remember_me_email'];
    $password = $_COOKIE['Remember_me_password'];
    $checkbox = "checked";
} else {
    $email = "";
    $password = "";
    $checkbox = "";
}

if (isset($_REQUEST['message'])) {
    $message = $_REQUEST['message'];
} else {
    $message = "";
}


?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login | Shiney-Heinic International</title>
    <!-- Favicon icon -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #message {

            min-width: 250px;

            margin-bottom: 1rem;

            color: red;
            text-align: center;

            font-size: 15px;
            opacity: 0.6;
            padding: 1rem;

        }
    </style>

</head>


<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <h2 id="message">
                                        <?php echo $message ?>
                                    </h2>
                                    <form action="authenticate.php" method="post" id="form1">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" name="email" placeholder="hello@example.com" value="<?= $email ?>">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" id="password" name="password" value="<?= $password ?>">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1">
                                                    <input type="checkbox" class="custom-control-input" onchange="showPassword()" id="show_password">
                                                    <label class="custom-control-label" for="show_password">Show Password
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox ml-1">
                                                    <input type="checkbox" name="remember" <?= $checkbox ?> class="custom-control-input" id="remember">
                                                    <label class="custom-control-label" for="remember" name="remember">Remember
                                                        Me</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                        </div>
                                        <div class="form-group mt-2">
                                            <a href="forgot-password.php">Forgot Password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        function showPassword() {
            var currentType = document.getElementById('password').type;

            if (currentType == 'password') {
                document.getElementById('password').type = 'text';
            } else {
                document.getElementById('password').type = 'password';
            }
        }
    </script>

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/deznav-init.js"></script>
    <script>



    </script>

</body>

</html>