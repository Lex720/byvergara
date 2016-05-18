<?php

//Conectar a una base de datos ODBC invocando al controlador 
$dsn = 'mysql:host=vipvergara.db.2987539.hostedresource.com;dbname=vipvergara';
$usuario = 'vipvergara';
$contraseña = 'VIP@Vergara14';

try {
	$db = new PDO($dsn, $usuario, $contraseña);
}
catch (PDOException $e) {
	echo 'Falló la conexión: ' . $e->getMessage();
}


//Realizar la consulta a la base de datos y formatear la fecha
$consulta = $db->query('SELECT * FROM gcventas');

while($filas = $consulta->fetch(PDO::FETCH_BOTH)) {

	$codigo = $filas['codigo_gc'];
	$date = $filas['fecha_venta'];
	$caracter = '/';
	$caracter2 = '-';
	$date = str_replace($caracter, $caracter2, $date);
	
	$date0 = new DateTime($date);
	$date0 = $date0->format('Y-m-d');
	
	
	//Sacar la cuenta de diferencia de dias y hacer la actualizacion a la BD
	date_default_timezone_set('America/Caracas');
	
	$date1 = new DateTime($date0);
	$date2 = new DateTime(date('Y-m-d'));
	
	$interval = $date1->diff($date2);
	$dias = $interval->days;
	
	// Comprobar los dias y hacer la actualizacion a la BD
	if ($dias <= 14) {
		$resultado = 'No desactivada<br>';
	}
	
	else {
		$status = 'vencida';
		$act = $db->query('UPDATE giftcards set status="'.$status.'" WHERE codigo="'.$codigo.'"');
		
		$resultado = 'Desactivada: '.$codigo.' === '.$dias.' '.'dias'.' ==== '.$date.'<br>';
	}
	
	echo $resultado;

}

?>