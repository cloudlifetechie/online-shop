<?php
// stripe.php - Stripe API Configuration

require_once 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('your_stripe_secret_key'); // Replace with your Stripe secret key

function createStripePaymentIntent($amount) {
    return \Stripe\PaymentIntent::create([
        'amount' => $amount, // Amount in cents
        'currency' => 'usd', // Change to your currency
    ]);
}
?>
