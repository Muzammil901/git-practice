<?php

class UnsetSessions {


	public function unsetSession(){
		session_start();

		if(isset($_POST['unset'])){
			session_unset();
			session_destroy();
		}
	}
}
?>