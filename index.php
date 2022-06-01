<!DOCTYPE html>
<html>
<head>
	<title>Count App</title>
</head>
<body>
	<?php session_start() ?>

	<div>
		<form action="view.php" method="post">
			Enter amount: <input type="number" name="amount">
			<input type="submit" name="submit" value="Enter">
			<input type="submit" name="unset" value="Clear">
		</form>
	</div>

</body>
</html>