<?php
session_start();
require("./check-authenticate.php");
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/customer.php');
  require_once('models/transaction.php');
  
try {


  \Stripe\Stripe::setApiKey('sk_test_51JcGFTCu8zM09tC6Hby6EqDptTF6raKG5GBJo4rFNLMro8vGxC66eavS6ENug0rB2kUWmBKIga1Pp7jwJrt0fzUh004rI1TW0Q');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];

 $pro1 = $POST['product_first'];
 $pro2 = $POST['product_second'];
 
 $country=$POST['country'];
 $address=$POST['address'];
 $zipCode=$POST['zip'];
 $state=$POST['state'];
 $pay=round($POST['pay'],0);
 $pay_store=$pay/100;
 $check=$POST['check_add'];


date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());


      $country_ship=$POST['country_ship'];
      $address_ship=$POST['address_ship'];
      $zipCode_ship=$POST['zip_ship'];
      $state_ship=$POST['state_ship'];
  // Create Customer In Stripe
      $customer = \Stripe\Customer::create(array(
        'name' => $first_name . " ". $last_name,
        'description' => 'Customer of Shiney Heinie',
        'email' => $email,
        'source' => $token,
        "address" => ["country" => $country_ship, "line1" => $address_ship, "line2" => "", "postal_code" => $zipCode_ship, "state" => $state_ship]
      ));

      // Charge Customer
      $charge = \Stripe\Charge::create(array(
      "amount" => $pay,
      "currency" => "USD",
      "description" => "Payment for produts of Shiney Heinie",
      "customer" => $customer->id
      ));

        // Transaction Data
        $transactionData = [
        
          'customer_id' => $charge->customer,
          'customer_name' => $first_name,
          'ship_add' => $address_ship,
          'ship_country' => $country_ship,
          'ship_state' => $state_ship,
          'ship_zip' => $zipCode_ship,
          'bill_add' => $address,
          'bill_country' => $country,
          'bill_state' => $state,
          'bill_zip' => $zipCode,
          'product_first' => $pro1,
          'product_second' => $pro2,
          'amount' => $pay_store,
          'time' => $current_time,
          'status' => $charge->status
        ];
    
        // Instantiate Transaction
        $transaction = new Transaction();
    
        // Add Transaction To DB
        $transaction->addTransactionFull($transactionData);



// Redirect to success
header('Location: thank-you.php');
}
catch (Exception $err) {
  echo $err;
  //header('Location: error.php');
}