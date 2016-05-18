<?php

session_start();

if(isset($_SESSION["log"])) {

	unset ($_SESSION["log"]);
	session_destroy();
	header("Location: _vip-acceder.php");
}
		
else {
	
	session_destroy();
	header("Location: _vip-acceder.php");
}

?>
