<?php

/* Conectar a una base de datos ODBC invocando al controlador */
$dsn = 'mysql:host=vipvergara.db.2987539.hostedresource.com;dbname=vipvergara';
$usuario = 'vipvergara';
$contraseña = 'VIP@Vergara14';

try {
	$db = new PDO($dsn, $usuario, $contraseña);
}
catch (PDOException $e) {
	echo 'Falló la conexión: ' . $e->getMessage();
}

?>