<?php
require_once('./stripe-php/init.php');

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys
\Stripe\Stripe::setApiKey("sk_test_EFsLf3AgIZLD2uYvZCHQs23w");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form:
$token = $_POST['stripeToken'];

// Charge the user's card:
$charge = \Stripe\Charge::create(array(
  "amount" => 9999,
  "currency" => "usd",
  "description" => "One Month Streaming Service",
  "source" => $token,
));
?>