<!DOCTYPE html>
<html>
<head>
	<title>Count App</title>
</head>
<body>
	<?php session_start();
	 	include(dirname(__FILE__) . '/classes/calcAmount.php');
		include(dirname(__FILE__) . '/classes/unsetSessions.php');
		include(dirname(__FILE__) . '/classes/calcTotal.php');
	?>

	<div>
		<form action="index.php" method="post">
			Enter amount: <input type="number" name="amount">
			<input type="submit" name="submit" value="Enter">
			<input type="submit" name="unset" value="Clear">
		</form>
	</div>
	<?php
		$getAmount = new CalcAmount();
		$unsetSession = new UnsetSessions();
		$totalAmount = new CalcTotal();

		if(isset($_POST['submit'])){
			$getAmount->getAmount($_POST['amount']);
			for ($i = 0; $i < count($_SESSION['amount']); $i++) {
				echo $_SESSION['amount'][$i] . "<br>";
			}
			$totalAmount->calcTotal();
		}

		if(isset($_POST['unset'])){
			$unsetSession->unsetSession();
		}
	?>

</body>
</html>