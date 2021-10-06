<?php
session_start();
if (isset($_COOKIE['Remember_me_email']) && isset($_COOKIE['Remember_me_password'])) {
    $email = base64_decode(urldecode($_COOKIE['Remember_me_email']));

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

$color = "red";
if (isset($_SESSION['login_error'])) {
    if ($_SESSION['login_error'] == "false") {
        unset($_SESSION['login_error']);
        $color = "green";
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login | Shiney Heinie</title>
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
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
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

        <!-- Form Section Start -->
        <div class="login-form-section">
            <div class="container">
                <div class="col-lg-10 shadow rounded form">
                    <form action="authenticate.php" method="post" id="form1">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 left-img">
                                <img src="./images/login-left.png" />
                            </div>
                            <div class="col-lg-6 col-sm-12 right-form">
                                <h1>Login Now.</h1>
                                <p>Login to start shopping our products and enjoy exclusive benefits.</p>
                                <h6 id="message" style="color:<?= $color ?>;">
                                    <?php echo $message ?>
                                </h6>
                                <div class="mb-3 email-field">
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Email</label>
                                        <input type="email" value="<?= $email ?>" name="email" class="form-control"
                                            placeholder="name@example.com"></input>
                                    </div>
                                </div>
                                <div class="mb-3 password-field">
                                    <div class="col mb-3">
                                        <label for="form-label" class="form-label">Password</label>
                                        <input type="password" value="<?= $password ?>" name="password"
                                            class="form-control" placeholder="Password"></input>
                                    </div>
                                </div>
                                <div class="mb-3 password-field">
                                    <div class="col mb-3">
                                        <input id="check" type="checkbox" class="check" <?= $checkbox ?>>
                                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary mt-3"
                                    style="background-color: #75CFB8; border: none; color: #fff; font-family: Gilroy-Regular, sans-serif ">Login</button>
                                <p class="register-link">Don't have an account ? <a href="./register.php">Register
                                        Now</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Form Section End -->

        <?php require("./footer.php"); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/e07f3322e5.js" crossorigin="anonymous"></script>
</body>

</html>