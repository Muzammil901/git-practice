<?php
session_start();

class CalcAmount {


	public function $getAmount() {

		if(empty($_SESSION['amounts'])){
			$_SESSION['count'] = 0;
		}
	}


}