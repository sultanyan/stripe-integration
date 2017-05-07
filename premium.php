<?php require_once 'app/init.php'; ?>
<?php if($user->premium){
	header('Location:index.php');
	exit();
	} ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Premium</title>
</head>
<body>
	<form action="premium_charge.php" method="POST">
	<p>Soon you will go premium</p>
		<script
			src='https://checkout.stripe.com/checkout.js'
			class='stripe-button'
			data-key="<?php echo $stripe['publishable']; ?>"
			data-name='Demo Site'
			data-description='Premium Membership'
			data-currency='amd'
			data-email = "<?php echo $user->email; ?>"
			data-amount='200'>
		</script>
	</form>
</body>
</html>

<!-- data-image='/square-image.png' -->