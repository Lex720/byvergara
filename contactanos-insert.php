<?php session_start(); ?>

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

<?php

include ("_conexion.php"); 

$nombre = trim($_POST["nombre"]);

$apellido = trim($_POST["apellido"]);

$pais = trim($_POST["pais"]);

$estado = trim($_POST["estado"]);

$ciudad = trim($_POST["ciudad"]);

$email = trim($_POST["email"]);

$telfijo = trim($_POST["telfijo"]);

$telcel = trim($_POST["telcel"]);

$comentarios = trim($_POST["comentarios"]);
						

if(!is_numeric($nombre)&&($apellido)) {
	
		if(preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$/", $email)) {
			
				if(!is_numeric($pais)) {
					
					if(!is_numeric($estado)) {
						
						if(!is_numeric($ciudad)) {
							
							if(is_numeric($telfijo)) {
								
								if(is_numeric($telcel)) {
												
$consulta = mysql_query("SELECT email FROM contactanos WHERE email='".$email."'");
						
if(mysql_num_rows($consulta) > 0) echo '<br><br><br><br><br><p align="center">Este email ya se encuentra registrado<br><br><a href="contactanos.php">Volver</a></p>';
						
else {
	
$sentencia="INSERT INTO contactanos (nombre, apellido, pais, estado, ciudad, email, telfijo, telcel, comentarios) VALUES('$nombre', '$apellido', '$pais', '$estado', '$ciudad', '$email', '$telfijo', '$telcel', '$comentarios')";
						
$resultado=mysql_query($sentencia) or die (include ('<br><br><br><br><br><p align="center">Error al insertar en la BD</p>'));

echo '

<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://es.byvergara.com/localidades-franquicias.php">

<div class="logo"><img src="img/vip3.jpg"></div>

<br><br>

<h2 align="center">Solicitud exitosa</h2>

<br>

<p class="exito" align="center">Dentro de poco uno de nuestros ejecutivos de venta se comunicara con usted.</p>

<br>

<p class="exito" align="center">En pocos segundos sera redireccionado de nuevo a nuestra pagina.</p>

';			

}

$nombre_origen    = "VERGARA";
$email_origen     = $email;
//$email_copia      = "webmaster@vermilinternacional.com";
$email_ocultos    = "byvergara.com@gmail.com";
$email_destino    = "info@byvergara.com";

$asunto           = "Un cliente ha contactado con nosotros";

$mensaje          = "Un cliente ha contactado con nosotros".'<br>'.$nombre.'<br>'.$apellido.'<br>'.$pais.'<br>'.$estado.'<br>'.$ciudad.'<br>'.$email.'<br>'.$telfijo.'<br>'.$telcel.'<br>'.$comentarios;

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

mail($email_destino, $asunto, $mensaje, $headers);

session_destroy();
								
								}
								else {
									echo '<br><br><br><br><br><p align="center">Introduzca un telefono movil valido<br><br><a href="contactanos.php">Volver</a></p>';
								}
							
							}
							else {
								echo '<br><br><br><br><br><p align="center">Introduzca un telefono fijo valido<br><br><a href="contactanos.php">Volver</a></p>';
							}
				
						}
						else {
							echo '<br><br><br><br><br><p align="center">Introduzca una ciudad valida<br><br><a href="contactanos.php">Volver</a></p>';
						}
				
					}
					else {
						echo '<br><br><br><br><br><p align="center">Introduzca un estado valido<br><br><a href="contactanos.php">Volver</a></p>';
					}
				
				}
				else {
					echo '<br><br><br><br><br><p align="center">Introduzca un pais valido<br><br><a href="contactanos.php">Volver</a></p>';
				}

		}
		else {
			echo '<br><br><br><br><br><p align="center">Introduzca un correo valido<br><br><a href="contactanos.php">Volver</a></p>'; 
		}
	
}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un nombre o apellido valido<br><br><a href="contactanos.php">Volver</a></p>';
}

?>