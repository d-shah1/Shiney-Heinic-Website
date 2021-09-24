<?php
require("./stripe-php-master/init.php");
$publish_key="pk_test_51JcpFsSGQwCG7bifyedUz1OlTj5r4gG5V245FjZLLYOQLOrSUROkC98klzcki8P7DbeT3gCCv5gxJN6aXZF8l26P00sbyfqBSD";
$secret_key="sk_test_51JcpFsSGQwCG7bifsObRQR61DaeNCMiuJfRaH3Kj74PEtO1ynuqVl4phBV6edD0PDG55YelGYr2B0Y7yOo1czlaF007EVQKZ98";

\Stripe\Stripe::setApiKey($secret_key);
?>