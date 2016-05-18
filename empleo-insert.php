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

//INFORMACIÓN PERSONAL

$nombre = trim($_POST["nombre"]);
$_SESSION['nombre'] = $_POST["nombre"];

$apellido = trim($_POST["apellido"]);
$_SESSION['apellido'] = $_POST["apellido"];

$nacionalidad = trim($_POST["nacionalidad"]);
$cedula = trim($_POST["cedula"]);
$_SESSION['cedula'] = $_POST["cedula"];
$cedula_completa = $nacionalidad.'-'.$cedula;

$genero = trim($_POST["genero"]);

$civil = trim($_POST["civil"]);

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

$telfijo = trim($_POST["telfijo"]);
$_SESSION['telfijo'] = $_POST["telfijo"];

$telcel = trim($_POST["telcel"]);
$_SESSION['telcel'] = $_POST["telcel"];

$email = trim($_POST["email"]);
$_SESSION['email'] = $_POST["email"];

@$fb = trim($_POST["fb"]);

@$tw = trim($_POST["tw"]);

@$ig = trim($_POST["ig"]);

$licencia = trim($_POST["licencia"]);

$vehiculo = trim($_POST["vehiculo"]);


//EDUCACION

$educacion = trim($_POST["educacion"]);

$institucion = trim($_POST["institucion"]);
$_SESSION['institucion'] = $_POST["institucion"];

$fecha_graduacion = trim($_POST["fecha_graduacion"]);
$_SESSION['fecha_graduacion'] = $_POST["fecha_graduacion"];

$titulo = trim($_POST["titulo"]);
$_SESSION['titulo'] = $_POST["titulo"];

$conocimiento = trim($_POST["conocimiento"]);
$_SESSION['conocimiento'] = $_POST["conocimiento"];

$lengua = trim($_POST["lengua"]);
$_SESSION['lengua'] = $_POST["lengua"];

@$lengua2 = trim($_POST["lengua2"]);
@$_SESSION['lengua2'] = $_POST["lengua2"];


//ULTIMA EXPERIENCIA LABORAL

$empresa = trim($_POST["empresa"]);
$_SESSION['empresa'] = $_POST["empresa"];

$cargo = trim($_POST["cargo"]);
$_SESSION['cargo'] = $_POST["cargo"];

$telfax = trim($_POST["telfax"]);
$_SESSION['telfax'] = $_POST["telfax"];

$fecha_ingreso = trim($_POST["fecha_ingreso"]);
$_SESSION['fecha_ingreso'] = $_POST["fecha_ingreso"];

$fecha_egreso = trim($_POST["fecha_egreso"]);
$_SESSION['fecha_egreso'] = $_POST["fecha_egreso"];

$resumen = trim($_POST["resumen"]);
$_SESSION['resumen'] = $_POST["resumen"];

$razon = trim($_POST["razon"]);
$_SESSION['razon'] = $_POST["razon"];


//AREA DE INTERES

$areas = trim($_POST["areas"]);

$ciudad_trabajo = trim($_POST["ciudad_trabajo"]);
$_SESSION['ciudad_trabajo'] = $_POST["ciudad_trabajo"];

$fecha_disponibilidad = trim($_POST["fecha_disponibilidad"]);
$_SESSION['fecha_disponibilidad'] = $_POST["fecha_disponibilidad"];

$remuneracion = trim($_POST["remuneracion"]);
$_SESSION['remuneracion'] = $_POST["remuneracion"];

$libre = trim($_POST["libre"]);
$_SESSION['libre'] = $_POST["libre"];


//CREAR CARPETA

$carpeta = '_archivos/'.$cedula_completa;
if (!file_exists($carpeta)) {
    mkdir($carpeta, 0777, true);
}


//FOTO ADJUNTA

$foto = $_FILES['foto']['name'];
$foto = preg_replace("/ +/","",$foto);
$foto_tmp = $_FILES['foto']['tmp_name'];
$tipo_foto = $_FILES['foto']['type'];
$tamano_foto = $_FILES['foto']['size'];

$ext_permitidas_foto = array('jpeg','png','jpg');
$partes_nombre_foto = explode('.', $foto);
$extension_foto = end( $partes_nombre_foto );
$ext_correcta_foto = in_array($extension_foto, $ext_permitidas_foto);

$limite_foto = 2000 * 1024;

if( $ext_correcta_foto && $tamano_foto <= $limite_foto ){

	move_uploaded_file($foto_tmp, "_archivos/".$cedula_completa.'/'.$foto);

	$error_foto = false;

	//echo "<br/>Guardado en: " . "archivos/" . $foto;
}
else {
	$error_foto = true;
}


//CV ADJUNTO

$cv = $_FILES['cv']['name'];
$cv = preg_replace("/ +/","",$cv);
$cv_tmp = $_FILES['cv']['tmp_name'];
$tipo_cv = $_FILES['cv']['type'];
$tamano_cv = $_FILES['cv']['size'];

$ext_permitidas_cv = array('pdf','docx','pptx', 'rar', 'zip');
$partes_nombre_cv = explode('.', $cv);
$extension_cv = end( $partes_nombre_cv );
$ext_correcta_cv = in_array($extension_cv, $ext_permitidas_cv);

$limite_cv = 2000 * 1024;

if( $ext_correcta_cv && $tamano_cv <= $limite_cv ){

	move_uploaded_file($cv_tmp, "_archivos/".$cedula_completa.'/'.$cv);

	$error_cv = false;

	//echo "<br/>Guardado en: " . "archivos/" . $cv;
}
else {
	$error_cv = true;
}


//VALIDACION

if(!is_numeric($nombre)&&($apellido)) {
	
	if(is_numeric($cedula)) {
	
		if(preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$/", $email)) {
			
			if(preg_match("/([0-9]{2})\/([0-9]{2})\/([0-9]{4})/", $fecha_nacimiento)) {	
			
				if(!is_numeric($pais)) {
					
					if(!is_numeric($estado)) {
						
						if(!is_numeric($ciudad)) {
							
							if(is_numeric($telfijo)) {
								
								if(is_numeric($telcel)) {

									if($error_foto <> true) {

										if($error_cv <> true) {
		

$sentencia="
	INSERT INTO empleo 
(nombre, apellido, cedula_completa, genero, fecha_nacimiento, pais, estado, ciudad, direccion, telfijo, telcel, email, fb, tw, ig, licencia, vehiculo, educacion, institucion, fecha_graduacion, titulo, conocimiento, lengua, lengua2, empresa, cargo, telfax, fecha_ingreso, fecha_egreso, resumen, razon, areas, ciudad_trabajo, fecha_disponibilidad, remuneracion, libre) 
	VALUES 
('$nombre', '$apellido', '$cedula_completa', '$genero', '$fecha_nacimiento', '$pais', '$estado', '$ciudad', '$direccion', '$telfijo', '$telcel', '$email', '$fb', '$tw', '$ig', '$licencia', '$vehiculo', '$educacion', '$institucion', '$fecha_graduacion', '$titulo', '$conocimiento', '$lengua', '$lengua2', '$empresa', '$cargo', '$telfax', '$fecha_ingreso', '$fecha_egreso', '$resumen', '$razon', '$areas', '$ciudad_trabajo', '$fecha_disponibilidad', '$remuneracion' , '$libre')
";
						
$resultado=mysql_query($sentencia) or die ('<br><br><br><br><br><p align="center">Error al insertar en la BD</p>');
						   
echo '

<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://es.byvergara.com/localidades-franquicias.php">

<div class="logo"><img src="img/vip3.jpg"></div>

<br><br>

<h2 align="center">Solicitud exitosa</h2>

<br>

<p class="exito" align="center">Dentro de poco uno de nuestros ejecutivos se comunicara con usted.</p>

<br>

<p class="exito" align="center">En pocos segundos sera redireccionado de nuevo a nuestra pagina.</p>

';


$nombre_origen    = "VERGARA";
$email_origen     = $email;
//$email_copia      = "webmaster@vermilinternacional.com";
//$email_ocultos    = "byvergara.com@gmail.com";
$email_destino    = "rrhh@byvergara.com";

//$email_destino      = "webmaster@vermilinternacional.com";

$asunto           = "Se ha realizado una solicitud de empleo";

$mensaje          = 'INFORMACION PERSONAL'.'<br>'
					.'Nombre del aspirante: '.$nombre.' '.$apellido.'<br>'
					.'Cedula de identidad: '.$cedula_completa.'<br>'
					.'Genero: '.$genero.'<br>'
					.'Fecha de nacimiento: '.$fecha_nacimiento.'<br>'
					.'Direccion: '.$pais.' - '.$estado.' - '.$ciudad.'<br>'
					.'Direccion2: '.$direccion.'<br>'
					.'Telefonos: '.$telfijo.'<br>'.$telcel.'<br>'
					.'Email: '.$email.'<br>'
					.'¿Posee licencia de conducir? '.$licencia.'<br>'
					.'¿Posee licencia de vehiculo? '.$vehiculo.'<br>'
					.'Foto: '.'http://es.byvergara.com/_archivos/'.$cedula_completa.'/'.$foto.'<br><br>'
					
					.'EDUCACION'.'<br>'
					.'Nivel de educacion: '.$educacion.'<br>'
					.'Institucion: '.$institucion.'<br>'
					.'Fecha de graduacion: '.$fecha_graduacion.'<br>'
					.'Titulo obtenido: '.$titulo.'<br>'
					.'Especialidad: '.$conocimiento.'<br>'
					.'Idiomas conocidos: '.$lengua.' '.$lengua2.'<br><br>'
					
					.'ULTIMA EXPERIENCIA LABORAL'.'<br>'
					.'Empresa: '.$empresa.'<br>'
					.'Cargo desempeñado: '.$cargo.'<br>'
					.'Telefono/Fax: '.$telfax.'<br>'
					.'Periodo de trabajo: '.$fecha_ingreso.' - '.$fecha_egreso.'<br>'
					.'Resumen de tareas: '.$resumen.'<br>'
					.'Razon por la que dejo el empleo: '.$razon.'<br><br>'
					
					.'AREA DE INTERES'.'<br>'
					.'Area donde le gustaria desempeñarse: '.$areas.'<br>'
					.'Ciudad donde le gustaria trabajar: '.$ciudad_trabajo.'<br>'
					.'Fecha de disponibilidad: '.$fecha_disponibilidad.'<br>'
					.'Remuneracion deseada: '.$remuneracion.'<br>'
					.'Cualidades y aptitudes: '.$libre.'<br>'
					.'CV: '.'http://es.byvergara.com/_archivos/'.$cedula_completa.'/'.$cv;

$formato          = "html";

$headers  = "From: $nombre_origen <$email_origen> \r\n";
//$headers .= "Return-Path: <$email_origen> \r\n";
$headers .= "Reply-To: $email_origen \r\n";
//$headers .= "Cc: $email_copia \r\n";
//$headers .= "Bcc: $email_ocultos \r\n";
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
											echo '<br><br><br><br><br><p align="center">El formato de su CV no es válido o excedió el peso deseado<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
										}

									}
									else {
										echo '<br><br><br><br><br><p align="center">El formato de su foto no es válido o excedió el peso deseado<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
									}
								
								}
								else {
									echo '<br><br><br><br><br><p align="center">Introduzca un telefono movil valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
								}
							
							}
							else {
								echo '<br><br><br><br><br><p align="center">Introduzca un telefono fijo valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
							}
				
						}
						else {
							echo '<br><br><br><br><br><p align="center">Introduzca una ciudad valida<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
						}
				
					}
					else {
						echo '<br><br><br><br><br><p align="center">Introduzca un estado valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
					}
				
				}
				else {
					echo '<br><br><br><br><br><p align="center">Introduzca un pais valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
				}
				
			}
			else {
				echo '<br><br><br><br><br><p align="center">Introduzca una fecha de nacimiento valida<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
			}

		}
		else {
			echo '<br><br><br><br><br><p align="center">Introduzca un correo valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>'; 
		}
	
	}
	else {
		echo '<br><br><br><br><br><p align="center">Introduzca una cedula valida<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
	}
	
}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un nombre o apellido valido<br><br><a id="buscar2" href="empleo.php">Volver</a></p>';
}

?>