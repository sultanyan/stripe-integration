<?php
	session_start();
	$_SESSION['user_id']=1;

	require 'vendor/autoload.php';

	$stripe = [
	'publishable' => 'pk_test_60How2j05BNTc2DDRJS8R7c7',
	'private' => 'sk_test_QmCxAYqZ3hax40SaIkGj4tR9'
	];

	Stripe::setApiKey($stripe['private']);

	$db = new PDO('mysql:host=127.0.0.1; dbname=users', 'root', '' );
	$user_query = $db->prepare("
		SELECT id, username, email, premium 
		FROM users 
		WHERE id = :user_id
	");
	$user_query->execute(['user_id'=>$_SESSION['user_id']]);
	$user = $user_query->fetchObject();
	// print_r($user);
?>