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
$_SESSION['nombre'] = $_POST["nombre"];

$apellido = trim($_POST["apellido"]);
$_SESSION['apellido'] = $_POST["apellido"];

$nacionalidad = trim($_POST["nacionalidad"]);

$cedula = trim($_POST["cedula"]);
$_SESSION['cedula'] = $_POST["cedula"];

$cedula_completa = $nacionalidad.'-'.$cedula;

$genero = trim($_POST["genero"]);

$fecha_nacimiento = trim($_POST["fecha_nacimiento"]);
$_SESSION['fecha_nacimiento'] = $_POST["fecha_nacimiento"];

$pais = trim($_POST["pais"]);
$_SESSION['pais'] = $_POST["pais"];

$estado = trim($_POST["estado"]);
$_SESSION['estado'] = $_POST["estado"];

$ciudad = trim($_POST["ciudad"]);
$_SESSION['ciudad'] = $_POST["ciudad"];

$direccion = trim($_POST["direccion"]);
$_SESSION['direccion'] = $_POST["direccion"];

$email = trim($_POST["email"]);
$_SESSION['email'] = $_POST["email"];

$telfijo = trim($_POST["telfijo"]);
$_SESSION['telfijo'] = $_POST["telfijo"];

$telcel = trim($_POST["telcel"]);
$_SESSION['telcel'] = $_POST["telcel"];

$empresa_actual = trim($_POST["empresa_actual"]);
$_SESSION['empresa_actual'] = $_POST["empresa_actual"];

$ocupacion = trim($_POST["ocupacion"]);
$_SESSION['ocupacion'] = $_POST["ocupacion"];

$areas = trim($_POST["areas"]); 

$enteraste = trim($_POST["enteraste"]);

@$boletin = trim($_POST["boletin"]);
@$sms = trim($_POST["sms"]);
$novedades = $boletin.'-'.$sms;

$comentarios = trim($_POST["comentarios"]);
$_SESSION['comentarios'] = $_POST["comentarios"];


/*Subida de archivo

if (($_FILES['archivo'] > 0)) {
	
	$archivo = $_FILES['archivo']['name'];
	$archivo = preg_replace("/ +/","",$archivo);
	$archivo_tmp = $_FILES['archivo']['tmp_name'];
	$tipo = $_FILES['archivo']['type'];
	$tamano = $_FILES['archivo']['size'];
 
	$ext_permitidas = array('txt', 'pdf','docx','pptx');
	$partes_nombre = explode('.', $archivo);
	$extension = end( $partes_nombre );
	$ext_correcta = in_array($extension, $ext_permitidas);
 
	$limite = 2000 * 1024;
 
	if( $ext_correcta && $tamano <= $limite ){
    
		move_uploaded_file($archivo_tmp, "_archivos/" . $archivo);
 
    	echo "<br/>Guardado en: " . "archivos/" . $archivo;
	}
	else {
		echo 'Archivo invalido';
	} 
}
else {}

END */


if(!is_numeric($nombre)&&($apellido)) {
	
	if(is_numeric($cedula)) {
	
		if(preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$/", $email)) {
			
			if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $fecha_nacimiento)) {	
			
				if(!is_numeric($pais)) {
					
					if(!is_numeric($estado)) {
						
						if(!is_numeric($ciudad)) {
							
							if(is_numeric($telfijo)) {
								
								if(is_numeric($telcel)) {
												
$consulta = mysql_query("SELECT email FROM unete WHERE email='".$email."'");
						
if(mysql_num_rows($consulta) > 0) echo '<br><br><br><br><br><p align="center">Este email ya se encuentra registrado<br><br><a href="unete-plantilla.php">Volver</a></p>';
						
else {	

$consulta = mysql_query("SELECT cedula_completa FROM unete WHERE cedula_completa='".$cedula_completa."'");
						
if(mysql_num_rows($consulta) > 0) echo '<br><br><br><br><br><p align="center">Esta cedula ya se encuentra registrada<br><br><a href="unete-plantilla.php">Volver</a></p>';
						
else {			

$sentencia="INSERT INTO unete (nombre, apellido, cedula_completa, genero, fecha_nacimiento, pais, estado, ciudad, direccion, email, telfijo, telcel, empresa_actual, ocupacion, areas, enteraste, novedades, comentarios) VALUES('$nombre', '$apellido', '$cedula_completa', '$genero', '$fecha_nacimiento', '$pais', '$estado', '$ciudad', '$direccion', '$email', '$telfijo', '$telcel', '$empresa_actual', '$ocupacion', '$areas', '$enteraste', '$novedades', '$comentarios')";
						
$resultado=mysql_query($sentencia) or die ('<br><br><br><br><br><p align="center">Error al insertar en la BD</p>');
						   
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
}

$nombre_origen    = "VERGARA";
$email_origen     = $email;
//$email_copia      = "webmaster@vermilinternacional.com";
$email_ocultos    = "byvergara.com@gmail.com";
$email_destino    = "info@byvergara.com";

//$email_destino      = "webmaster@vermilinternacional.com";

$asunto           = "Un cliente se ha unido a nosotros";

$mensaje          = "Un cliente se ha unido a nosotros".'<br>'.$nombre.'<br>'.$apellido.'<br>'.$cedula_completa.'<br>'.$genero.'<br>'.$fecha_nacimiento.'<br>'.$pais.'<br>'.$estado.'<br>'.$ciudad.'<br>'.$direccion.'<br>'.$email.'<br>'.$telfijo.'<br>'.$telcel.'<br>'.$empresa_actual.'<br>'.$ocupacion.'<br>'.$areas.'<br>'.$enteraste.'<br>'.$novedades.'<br>'.$comentarios.'<br><br>';//.'Curriculum adjunto en: http://es.byvergara.com/_archivos/'.basename($archivo);

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
//$headers .= "Content-Type: multipart/mixed; \r\n";
$headers .= "Content-Transfer-Encoding: 7bit \r\n";
$headers .= "Disposition-Notification-To: \"$nombre_origen\" <$email_origen> \r\n";

if($formato == "html") { 
$headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";  
}
else { 
$headers .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";  
}

mail($email_destino, $asunto, $mensaje, $headers);

session_destroy();	
								
								}
								else {
									echo '<br><br><br><br><br><p align="center">Introduzca un telefono movil valido<br><br><a href="unete-plantilla.php">Volver</a></p>';
								}
							
							}
							else {
								echo '<br><br><br><br><br><p align="center">Introduzca un telefono fijo valido<br><br><a href="unete-plantilla.php">Volver</a></p>';
							}
				
						}
						else {
							echo '<br><br><br><br><br><p align="center">Introduzca una ciudad valida<br><br><a href="unete-plantilla.php">Volver</a></p>';
						}
				
					}
					else {
						echo '<br><br><br><br><br><p align="center">Introduzca un estado valido<br><br><a href="unete-plantilla.php">Volver</a></p>';
					}
				
				}
				else {
					echo '<br><br><br><br><br><p align="center">Introduzca un pais valido<br><br><a href="unete-plantilla.php">Volver</a></p>';
				}
				
			}
			else {
				echo '<br><br><br><br><br><p align="center">Introduzca una fecha de nacimiento valida<br><br><a href="unete-plantilla.php">Volver</a></p>';
			}

		}
		else {
			echo '<br><br><br><br><br><p align="center">Introduzca un correo valido<br><br><a href="unete-plantilla.php">Volver</a></p>'; 
		}
	
	}
	else {
		echo '<br><br><br><br><br><p align="center">Introduzca una cedula valida<br><br><a href="unete-plantilla.php">Volver</a></p>';
	}
	
}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un nombre o apellido valido<br><br><a href="unete-plantilla.php">Volver</a></p>';
}

?>