<!DOCTYPE html>
<html>
<head>
	<title>Count App</title>
</head>
<body>
	<?php session_start() ?>

	<div>
		<form action="index.php" method="post">
			Enter amount: <input type="number" name="amount">
			<input type="submit" name="submit" value="Enter">
			<input type="submit" name="unset" value="Clear">
		</form>
	</div>
	<?php
		if($_POST['submit']){
			$listAmount = [];

			$amount = $_POST['amount'];
			array_push($listAmount, $amount);

			for ($i=0; $i < count($listAmount); $i++) {
				echo $listAmount[$i] . "<br>";
			}

		}
	?>

</body>
</html>