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

//$codigo_tarjeta = trim($_POST["codigo_tarjeta"]);

$motivo = trim($_POST["motivo"]);

$status = 'anulada';

/* EMAIL */
$nombre_origen    = "VERGARA";
$email_origen     = "webmaster@vermilinternacional.com";
//$email_copia      = "webmaster@vermilinternacional.com";
$email_ocultos    = "webmaster@vermilinternacional.com";
$email_destino    = "contacto@byvergara.com";

$asunto           = "Se ha reportado el extravio de una tarjeta VIP";

$mensaje          = "Se ha reportado el extravio de una tarjeta VIP".'<br><br>'.'Cedula del cliente: '.$cedula_completa.'<br><br>'.'Motivo de la anulacion: '.$motivo;

$formato          = "html";

$headers  = "From: $nombre_origen <$email_origen> \r\n";
//$headers .= "Return-Path: <$email_origen> \r\n";
$headers .= "Reply-To: $email_origen \r\n";
//$headers .= "Cc: $email_copia \r\n";
$headers .= "Bcc: $email_ocultos \r\n";
$headers .= "X-Sender: $email_origen \r\n";
//$headers .= "X-Mailer: Enviado con Script de: \r\n";
$headers .= "X-Priority: 3 \r\n";
$headers .= "MIME-Version: 1.0 \r\n";
$headers .= "Content-Transfer-Encoding: 7bit \r\n";
$headers .= "Disposition-Notification-To: \"$nombre_origen\" <$email_origen> \r\n";

if($formato == "html")
{ 
$headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";  
}
else
{ 
$headers .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";  
}

		
if(!is_numeric($cedula)) {
	
	echo '<br><br><br><br><br><p align="center">Introduzca un numero de cedula valido<br><br><a id="buscar2" href="_vip1-tarjetaextravio.php">Volver</a></p><br><br><br><br><br>';
}
	
else {
			
	$cuenta = $db->query('SELECT COUNT(*) FROM clientes WHERE cedula_completa="'.$cedula_completa.'"'); 
	$num_filas = $cuenta->fetchColumn();
												
	if($num_filas == 0) {

		echo '<br><br><br><br><br><p align="center">Este cliente no se encuentra registrado en el sistema<br><br><a id="buscar2" href="_vip1-tarjetaextravio.php">Volver</a></p><br><br><br><br><br>';

	}
						
	/*else {
		
		$cuenta2 = $db->query('SELECT COUNT(*) FROM tarjetas WHERE codigo="'.$codigo_tarjeta.'"'); 
		$num_filas2 = $cuenta2->fetchColumn();
		
		if ($num_filas2 == 0) {
			
			echo '<br><br><br><br><br><p align="center">Esta tarjeta VIP no se encuentra registrada en el sistema<br><br><a id="buscar2" href="_vip1-tarjetaextravio.php">Volver</a></p><br><br><br><br><br>';
		
		}
		
		else {

			$consulta = $db->query('SELECT * FROM clientes WHERE cedula_completa="'.$cedula_completa.'"');

			$filas = $consulta->fetch(PDO::FETCH_BOTH);
			$codigo = $filas['codigo_tarjeta'];
			
			if ($codigo<>$codigo_tarjeta) {
				
				echo '<br><br><br><br><br><p align="center">Esta tarjeta VIP no esta asociada al cliente.<br><br><a id="buscar2" href="_vip1-tarjetaextravio.php">Volver</a></p><br><br><br><br><br>';
				
			}*/
			
			else {
				
				// Duplicado
				$consulta = $db->query('SELECT * FROM clientes WHERE cedula_completa="'.$cedula_completa.'"');

				$filas = $consulta->fetch(PDO::FETCH_BOTH);
				$codigo = $filas['codigo_tarjeta'];
				//
				
				$act = $db->query('UPDATE tarjetas set status="'.$status.'" WHERE codigo="'.$codigo.'"');
				
				if(isset($_SESSION["log"])) {
					
					print "<meta http-equiv=Refresh content=\"5 ; url=_vip-menu.php\">";
		
					echo '<p align="center">'.
						 '<br><br><br><br><br>'.
						 'El extravio ha sido reportado, dentro de poco nos comunicaremos con usted.'.
						 '<br><br>'.
						 '<a id="buscar2" href="_vip-menu.php">Continuar</a>'.
						 '<br><br><br><br><br>'.
						 '</p>';
					
					mail($email_destino, $asunto, $mensaje, $headers);
				}
				
				else {
					
					print "<meta http-equiv=Refresh content=\"5 ; url=_vip1.php\">";
		
					echo '<p align="center">'.
						 '<br><br><br><br><br>'.
						 'El extravio ha sido reportado, dentro de poco nos comunicaremos con usted.'.
						 '<br><br>'.
						 '<a id="buscar2" href="_vip1.php">Continuar</a>'.
						 '<br><br><br><br><br>'.
						 '</p>';
						 
					mail($email_destino, $asunto, $mensaje, $headers);
				}
			}
		//}
	//}
}

?>

</div>

<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>