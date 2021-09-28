<?php

require("./check-authenticate.php");
  require_once('vendor/autoload.php');
  require_once('config/db.php');
  require_once('lib/pdo_db.php');
  require_once('models/customer.php');
  require_once('models/transaction.php');
  

  \Stripe\Stripe::setApiKey('sk_test_51JcpFsSGQwCG7bifsObRQR61DaeNCMiuJfRaH3Kj74PEtO1ynuqVl4phBV6edD0PDG55YelGYr2B0Y7yOo1czlaF007EVQKZ98');

 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);

 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];
 $city=$POST['email'];
 $country=$POST['country'];
 $address=$POST['address'];
 $zipCode=$POST['zip'];
 $state=$POST['state'];

// Create Customer In Stripe
$customer = \Stripe\Customer::create(array(
    'name' => 'test',
    'description' => 'test description',
    'email' => $email,
    'source' => $token,
    "address" => ["country" => $country, "line1" => $address, "line2" => "", "postal_code" => $zipCode, "state" => $state]
));

// Charge Customer
$charge = \Stripe\Charge::create(array(
  "amount" => $_SESSION['pay'],
  "currency" => "inr",
  "description" => "Intro To React Course",
  "customer" => $customer->id
));
date_default_timezone_set('America/Los_Angeles');
$current_time = date("j F  Y , g:i:s a", time());
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


// Transaction Data
$transactionData = [
 
  'customer_id' => $charge->customer,
  'product' => $charge->description,
  'amount' => $charge->amount,
  'time' => $current_time,
  'status' => $charge->status,
];

// Instantiate Transaction
$transaction = new Transaction();

// Add Transaction To DB
$transaction->addTransaction($transactionData);

// Redirect to success
header('Location: thank-you.php');
