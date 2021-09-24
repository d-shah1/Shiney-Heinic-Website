<?php
session_start();
require("./check-authenticate.php");
require("./connection.php");
require("./config.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit.php" method="post">
        <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $publish_key ?>"
        data-amount="50"
        data-name="RTS payment"
        data-description="payment process"
        data-image="https://www.roundtechsquare.com/assets/images/logo/logo.webp"
        data-currency="inr"
        data-email="<?php echo $_SESSION['email'] ?>">

        </script>
    </form> 
    
</body>
</html>