<?php
	require_once(__DIR__.'/classes/calcAmount.php');
	require_once(__DIR__.'/classes/unsetSessions.php');

	$getAmount = new CalcAmount();
	$unsetSession = new UnsetSessions();


		if(isset($_POST['submit'])){
			$getAmount->getAmount();

			for ($i = 0; $i < count($_SESSION['amount']); $i++) {
				echo $_SESSION['amount'][$i] . "<br>";
			}
            header('location: index.php');
		}
		else if(isset($_POST['unset'])){
			$unsetSession->unsetSession();
            header('location: index.php');
            
		}
	?>