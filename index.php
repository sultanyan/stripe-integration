<?php require_once 'app/init.php'; ?>
<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>Card payments</title>
	</head>
	<body>
		<?php if($user->premium): ?>
			<p>You are premium</p>
		<?php else : ?>
			<p>You are not premium. <a href="premium.php">Go Premium</a></p>
		<?php endif ; ?>
	</body>
</html>

<!-- USER LIVE IN STRIPE -->