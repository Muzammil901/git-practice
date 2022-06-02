<?php
session_start();

class CalcAmount {


	public function getAmount($amount) {

		if(empty($_SESSION['amount'])){
			$_SESSION['count'] = 0;
		}

		$_SESSION['amount'][$_SESSION['count']] = $amount;
		$_SESSION['count'] += 1;
	}
}
?>