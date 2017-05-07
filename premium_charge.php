<?php 
require_once 'app/init.php';
	if(isset($_POST['stripeToken'])){
		$token = $_POST['stripeToken'];
		try {
			Stripe_Charge::create([
				"amount" => 200,
				"currency" => 'amd',
				"card" => $token, //obtained with Stripe.js
				"description" =>$user->email
			]);
			$db->query("
					UPDATE users
					SET premium = 1
					WHERE id= {$user->id}
				");
		} catch (Stripe_CardError $e) {
			// Something is wrong with user's card... Can display some error
		}
		header('Location: index.php');
		exit();
	}
?>