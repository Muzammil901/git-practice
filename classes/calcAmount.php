<?php
session_start();

class CalcAmount {


	public function getAmount() {

		if(empty($_SESSION['amounts'])){
			$_SESSION['count'] = 0;
		}

		$_SESSION['amount'][$_SESSION['count']] = $_POST['amount'];
		$_SESSION['count'] += 1;
	}
}
?>