<?php

session_start(); 
include ("_conexion-vip.php");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class="no-js" xml:lang="es" lang="es-es">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport"></meta>

<title>VERGARA</title>
<link rel="shortcut icon" href="_favicon.ico">
<link href="http://byvergara.com/" rel="canonical"></link>
<meta content="Vermil Internacional" name="author"></meta>
<meta content="Página oficial de la marca VERGARA. Somos tu tienda de moda online. En nuestro catálogo encontrarás las nuevas propuestas de ropa y complementos para la mujer, además de toda la información que necesitas para emprender tu propio negocio." name="description"></meta>
<meta content="vergara, tienda, mujer, belleza, ropa, tiendas vegara, tiendas de ropa, moda, moda mujer, tiendas ropa mujer, tiendas venezuela, vestidos, trajes, bragas, complementos de mujer, complementos moda mujer, calzado mujer, zapatos de mujer, bolsos de mujer, pantalones mujer, chaquetas mujer, blusas mujer, tops, moda." name="keywords"></meta>
<meta content="Spanish" name="Language"></meta>

<meta content="es_ES" property="og:locale"></meta>
<meta content="article" property="og:type"></meta>
<meta content="Ropa excusiva impprtada | Vergara | Importaciones | Mercadeo | Venezuela" property="og:title"></meta>
<meta content="Vergara es una marca prestigosa exclusiva. ¡Conoce nuestra coleccion y diseños!." property="og:description"></meta>
<meta content="http://byvergara.com/" property="og:url"></meta>
<meta content="https://www.facebook.com/#" property="article:publisher"></meta>

<meta name="robots" content="index"></meta>
<meta name="googlebot" content="index"></meta>
        
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/complementos.css" rel="stylesheet" type="text/css" />
<link href="css/resoluciones.css" rel="stylesheet" type="text/css" />

</head>

<!-------------------------------------------- Empieza el body ------------------------------------------------------->
<body>                                     

<?php include_once("_analyticstracking.php") ?>

<!-------------------------------------------- Empieza el header ----------------------------------------------------->

<?php include ('_header.php'); ?>

<!---------------------------------------------- Empieza el nav ------------------------------------------------------>

<?php include ('_nav.php'); ?>

<!-------------------------------------------- Empieza el main -------------------------------------------------------->
<div class="main">

<?php

$codigo = trim($_POST["codigo"]);

$tipo = trim($_POST["tipo"]);

$fecha_entrega = trim($_POST["fecha_entrega"]);

$tienda = trim($_POST["tienda"]);

$status = trim($_POST["status"]);


if(is_numeric($codigo)) {
			
	if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $fecha_entrega)) {
			
												
$cuenta = $db->query('SELECT COUNT(*) FROM tarjetas WHERE codigo="'.$codigo.'"'); 
$num_filas = $cuenta->fetchColumn();
						
if($num_filas > 0) echo '<br><br><br><br><br><p align="center">Este codigo ya se encuentra registrado<br><br><a id="buscar2" href="_vip-tarjetaregistro.php">Volver</a></p><br><br><br><br><br>';
						
else {				

	$insert = $db->query("INSERT INTO tarjetas (codigo, tipo, fecha_entrega, tienda, status) VALUES ('$codigo', '$tipo', '$fecha_entrega', '$tienda', '$status');");

	print "<meta http-equiv=Refresh content=\"5 ; url=_vip-tarjetaregistro.php\">";
		
	echo '<p align="center">'.
		 '<br><br><br><br><br>'.
		 'La tarjeta fue registrada con exito.'.
		 '<br><br>'.
		 '<a id="buscar2" href="_vip-tarjetaregistro.php">Continuar</a>'.
		 '<br><br><br><br><br>'.
		 '</p>';
}
											
	}
	else {
		echo '<br><br><br><br><br><p align="center">Introduzca una fecha con formato valido<br><br><a id="buscar2" href="_vip-tarjetaregistro.php">Volver</a></p><br><br><br><br><br>';
	}
			
}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un numero de codigo (serial) valido<br><br><a id="buscar2" href="_vip-tarjetaregistro.php">Volver</a></p><br><br><br><br><br>';
}

?>

</div>

<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>