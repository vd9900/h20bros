<?php

namespace App\Services;

use Stripe;


class StripeService {
	function __construct()
	{

		$this->client = new \Stripe\StripeClient(env('STRIPE_SECRET'));

	}



	public function createIntent($amount)
	{

		$amount = $this->calculateOrderAmount([$amount]);
		
		$amountnn = number_format($amount / 100, 2);


		$payme= $this->client->paymentIntents->create([
		  'amount' => $amount,
		  'currency' => 'usd',
		  'payment_method_types' => ['card'],
		]);	

		return [$payme, $amountnn, $amount];
	}




	private function calculateOrderAmount(array $items): int {
	    $fee = $items[0] * 2.9 / 100 + .3;
		
		$items[0] = number_format($items[0] + $fee, 2);
		
	    // Replace this constant with a calculation of the order's amount
	    $items[0] *= 100;
	    
	    // Calculate the order total on the server to prevent
	    // people from directly manipulating the amount on the client
	    return $items[0];
	}
}