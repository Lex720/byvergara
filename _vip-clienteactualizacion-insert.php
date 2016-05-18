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

$nacionalidad = trim($_POST["nacionalidad"]);

$cedula = trim($_POST["cedula"]);

$cedula_completa = $nacionalidad.'-'.$cedula;

@$pais = trim($_POST["pais"]);

@$ciudad = trim($_POST["ciudad"]);

@$direccion = trim($_POST["direccion"]);

@$telefono = trim($_POST["telefono"]);

@$telefono2 = trim($_POST["telefono2"]);

@$email = trim($_POST["email"]);

@$fb = trim($_POST["fb"]);

@$tw = trim($_POST["tw"]);

@$ig = trim($_POST["ig"]);

			
$cuenta = $db->query('SELECT COUNT(*) FROM clientes WHERE cedula_completa="'.$cedula_completa.'"'); 
$num_filas = $cuenta->fetchColumn();
											
if($num_filas == 0) {

	echo '<br><br><br><br><br><p align="center">Este cliente no se encuentra registrado.<br><br><a id="buscar2" href="_vip-clienteactualizacion.php">Volver</a></p><br><br><br><br><br>';
}
					
else {
	
if ($pais == NULL && $ciudad == NULL && $direccion == NULL && $telefono == NULL && $telefono2 == NULL && $email == NULL && $fb == NULL && $tw == NULL && $ig == NULL) {
	
	echo '<br><br><br><br><br><p align="center">Debe incluir al menos un campo para actualizar.<br><br><a id="buscar2" href="_vip-clienteactualizacion.php">Volver</a></p><br><br><br><br><br>';
}

else {
	
	if(empty($pais)){}
	
	else {

		$act = $db->query('UPDATE clientes set pais="'.$pais.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($ciudad)){}
	
	else {

		$act = $db->query('UPDATE clientes set ciudad="'.$ciudad.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($direccion)){}
	
	else {

		$act = $db->query('UPDATE clientes set direccion="'.$direccion.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($telefono)){}
	
	else {

		$act = $db->query('UPDATE clientes set telefono="'.$telefono.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($telefono2)){}
	
	else {

		$act = $db->query('UPDATE clientes set telefono2="'.$telefono2.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($email)){}
	
	else {

		$act = $db->query('UPDATE clientes set email="'.$email.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($fb)){}
	
	else {

		$act = $db->query('UPDATE clientes set fb="'.$fb.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($tw)){}
	
	else {

		$act = $db->query('UPDATE clientes set tw="'.$tw.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
	
	if(empty($ig)){}
	
	else {

		$act = $db->query('UPDATE clientes set ig="'.$ig.'" WHERE cedula_completa="'.$cedula_completa.'"');
	}
		
	print "<meta http-equiv=Refresh content=\"5 ; url=_vip-menu.php\">";
	
	echo '<p align="center">'.
		 '<br><br><br><br><br>'.
		 'La informacion del cliente ha sido actualizada exitosamente.'.
		 '<br><br>'.
		 '<a id="buscar2" href="_vip-menu.php">Continuar</a>'.
		 '<br><br><br><br><br>'.
		 '</p>';

}
}

?>

</div>

<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>