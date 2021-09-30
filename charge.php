<?php
session_start();
require("./check-authenticate.php");
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/customer.php');
  require_once('models/transaction.php');
  

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
 $address2=$POST['address2'];
 $zipCode=$POST['zip'];
 $state=$POST['state'];
 $pay=round($POST['pay'],0);
 $pay_store=$pay/100;
 $check=$POST['check_add'];
 $save=$POST['save'];


date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());
if($check=="on"){

    // Create Customer In Stripe
    $customer = \Stripe\Customer::create(array(
      'name' => $first_name,
      'description' => 'Shiney Heinic payment',
      'email' => $email,
      'source' => $token,
      "address" => ["country" => $country, "line1" => $address, "line2" => $address2, "postal_code" => $zipCode, "state" => $state]
    ));

    // Charge Customer
    $charge = \Stripe\Charge::create(array(
    "amount" => $pay,
    "currency" => "usd",
    "description" => "Payment of Shiney Heinic",
    "customer" => $customer->id
    ));
    if($save=="on"){
    // Customer Data
    $customerData = [
      
      'first_name' => $first_name,
      'email' => $email,
      'last_name' => $last_name,
      "country" => $country, 
      "line1" => $address, 
      "postal_code" => $zipCode, 
      "state" => $state,
      "time"=> $current_time
      
    ];

    // Instantiate Customer
    $customer = new Customer();

    // Add Customer To DB
    $customer->addCustomer($customerData);

    }
    // Transaction Data
    $transactionData = [
    
      'customer_id' => $charge->customer,
      'customer_name' => $first_name,
      'bill_add' => $address,
      'bill_country' => $country,
      'bill_state' => $state,
      'bill_zip' => $zipCode,
      'product_first' => $pro1,
      'product_second' => $pro2,
      'amount' => $pay_store,
      'time' => $current_time,
      'status' => $charge->status,
    ];

    // Instantiate Transaction
    $transaction = new Transaction();

    // Add Transaction To DB
    $transaction->addTransaction($transactionData);
}
else {
      $country_ship=$POST['country_ship'];
      $address_ship=$POST['address_ship'];
      $zipCode_ship=$POST['zip_ship'];
      $state_ship=$POST['state_ship'];
  // Create Customer In Stripe
      $customer = \Stripe\Customer::create(array(
        'name' => 'test',
        'description' => 'test description',
        'email' => $email,
        'source' => $token,
        "address" => ["country" => $country_ship, "line1" => $address_ship, "line2" => "", "postal_code" => $zipCode_ship, "state" => $state_ship]
      ));

      // Charge Customer
      $charge = \Stripe\Charge::create(array(
      "amount" => $pay,
      "currency" => "inr",
      "description" => "Intro To React Course",
      "customer" => $customer->id
      ));
      if($save=="on"){
        // Customer Data
        $customerData = [
          
          'first_name' => $first_name,
          'email' => $email,
          'last_name' => $last_name,
          "country" => $country_ship, 
          "line1" => $address_ship, 
          "postal_code" => $zipCode_ship, 
          "state" => $state_ship,
          "time"=> $current_time
          
        ];
    
        // Instantiate Customer
        $customer = new Customer();
    
        // Add Customer To DB
        $customer->addCustomer($customerData);
    
        }
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

}

// Redirect to success
header('Location: thank-you.php');
