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

$nombre = trim($_POST["nombre"]);

$apellido = trim($_POST["apellido"]);

$genero = trim($_POST["genero"]);

$nacionalidad = trim($_POST["nacionalidad"]);

$cedula = trim($_POST["cedula"]);

$cedula_completa = $nacionalidad.'-'.$cedula;

$fecha_nacimiento = trim($_POST["fecha_nacimiento"]);

$pais = trim($_POST["pais"]);

$ciudad = trim($_POST["ciudad"]);

$direccion = trim($_POST["direccion"]);

$telefono = trim($_POST["telefono"]);

$telefono2 = trim($_POST["telefono2"]);

$email = trim($_POST["email"]);

$tipo_tarjeta = trim($_POST["tipo_tarjeta"]);

$codigo_tarjeta = trim($_POST["codigo_tarjeta"]);

$codigo_factura = trim($_POST["codigo_factura"]);

$fecha_entrega = trim($_POST["fecha_entrega"]);

$monto = trim($_POST["monto"]);

$status = trim($_POST["status"]);

$tienda = $_SESSION["usuario"];

@$fb = trim($_POST["fb"]);

@$tw = trim($_POST["tw"]);

@$ig = trim($_POST["ig"]);

/*$social = 'FB: '.$fb.' - '.'TW: '.$tw.' - '.'IG: '.$ig;*/


if(!is_numeric($nombre)) {
	
	if(!is_numeric($apellido)) {
		
		if(is_numeric($cedula)) {
			
			if(is_numeric($telefono)) {

				if(is_numeric($codigo_tarjeta)) {
			
					if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $fecha_entrega)) {
						
						if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $fecha_nacimiento)) {
							
							if(preg_match("/([0-9]+[.][0-9])/", $monto)) {
			

$cuenta = $db->query('SELECT COUNT(*) FROM clientes WHERE cedula_completa="'.$cedula_completa.'"');
$num_filas = $cuenta->fetchColumn();
						
if($num_filas > 0) {
	
	echo '<br><br><br><br><br><p align="center">Este cliente ya se encuentra registrado<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
}

else {
	
	$cuenta2 = $db->query('SELECT COUNT(*) FROM clientes WHERE codigo_tarjeta="'.$codigo_tarjeta.'"');
	$num_filas2 = $cuenta2->fetchColumn();
						
	if($num_filas2 > 0) {
	
		echo '<br><br><br><br><br><p align="center">Este numero de tarjeta ya esta registrado<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
	}

	else {
		
		$cuenta3 = $db->query('SELECT COUNT(*) FROM tarjetas WHERE codigo="'.$codigo_tarjeta.'"');
		$num_filas3 = $cuenta3->fetchColumn();
						
		if($num_filas3 == 0) {
		
			echo '<br><br><br><br><br><p align="center">Este numero de tarjeta no se encuentra en el sistema para ser asignado a un cliente<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
			
		}
		
		else {
		
			$consulta = $db->query('SELECT * FROM tarjetas WHERE codigo="'.$codigo_tarjeta.'"');
			$filas = $consulta->fetch(PDO::FETCH_BOTH);
			$tienda_bd = $filas['tienda'];
							
			if($tienda_bd <> $tienda) {
			
				echo '<br><br><br><br><br><p align="center">Este numero de tarjeta no se encuentra asignado a esta tienda, verifique e intente de nuevo<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
				
			}
		
			else {
				
				if($tipo_tarjeta==1 && $monto < 25000.00) {
					
					echo '<br><br><br><br><br><p align="center">La compra debe ser mayor a 25000,00 Bs para registrar una tarjeta Platinum<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
					
				}
				
				else {
					
					if($tipo_tarjeta==2 && $monto < 15000.00) {
					
					echo '<br><br><br><br><br><p align="center">La compra debe ser mayor a 15000,00 Bs y menor a 25000,00 Bs para registrar una tarjeta Gold<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
					
					}
				
					else {
						
						if($tipo_tarjeta==2 && $monto >= 25000.00) {
					
						echo '<br><br><br><br><br><p align="center">La compra debe ser mayor a 15000,00 Bs y menor a 25000,00 Bs para registrar una tarjeta Gold<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
					
						}
				
						else {
							
							$insert = $db->query("INSERT INTO clientes (nombre, apellido, genero, cedula_completa, fecha_nacimiento, pais, ciudad, direccion, telefono, telefono2, email, fb, tw, ig, codigo_tarjeta, tipo_tarjeta, codigo_factura, fecha_entrega, monto, tienda) VALUES ('$nombre', '$apellido', '$genero', '$cedula_completa', '$fecha_nacimiento', '$pais', '$ciudad', '$direccion', '$telefono', '$telefono2', '$email', '$fb', '$tw', '$ig', '$codigo_tarjeta', '$tipo_tarjeta', '$codigo_factura', '$fecha_entrega', '$monto', '$tienda');");
							
							$act = $db->query('UPDATE tarjetas set status="'.$status.'" WHERE codigo="'.$codigo_tarjeta.'"');
							
							$insert2 = $db->query("INSERT INTO compras (codigo_tarjeta, cedula_cliente, codigo_factura, fecha, monto, tienda) VALUES ('$codigo_tarjeta', '$cedula_completa', '$codigo_factura', '$fecha_entrega', '$monto', '$tienda');");
			
							print "<meta http-equiv=Refresh content=\"5 ; url=_vip-menu.php\">";
			
							echo '<p align="center">'.
								 '<br><br><br><br><br>'.
								 'El cliente ha sido registrado con exito.'.
								 '<br><br>'.
								 '<a id="buscar2" href="_vip-menu.php">Continuar</a>'.
								 '<br><br><br><br><br>'.
								 '</p>';
						
						}
					}
				}
			}
		}
	}
}
							}
							else {
								echo '<br><br><br><br><br><p align="center">El monto no tiene un formato valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
							}
							
						}
						else {
							echo '<br><br><br><br><br><p align="center">Introduzca una fecha de nacimiento valida<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
						}
					
					}
					else {
						echo '<br><br><br><br><br><p align="center">Introduzca una fecha con formato valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
					}
			
				}
				else {
					echo '<br><br><br><br><br><p align="center">Introduzca un numero de codigo (serial) valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
				}

			}
			else {
				echo '<br><br><br><br><br><p align="center">Introduzca un numero de telefono valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
			}

		}
		else {
			echo '<br><br><br><br><br><p align="center">Introduzca un numero de cedula valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
		}

	}
	else {
		echo '<br><br><br><br><br><p align="center">Introduzca un apellido valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
	}

}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un nombre valido<br><br><a id="buscar2" href="_vip-clienteregistro.php">Volver</a></p><br><br><br><br><br>';
}

?>


</div>

<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>