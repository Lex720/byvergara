<?php 

session_start();

if(isset($_SESSION["log"])) {
	
	$fechaGuardada = $_SESSION["ultimoAcceso"];
	$ahora = date("Y-n-j H:i:s");
	$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));

	if($tiempo_transcurrido >= 1200) {
		
		session_destroy();
		header("Location: _vip-acceder.php");
		return false;
	}
	
	else {
		$_SESSION["ultimoAcceso"]=date("Y-n-j H:i:s");
	}
}
?>