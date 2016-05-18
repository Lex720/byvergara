<?php 

include ("_conexion.php"); 

session_start(); 

$nombre = trim($_POST["nombre"]);

$apellido = trim($_POST["apellido"]);

$fecha_nacimiento = trim($_POST["fecha_nacimiento"]);

$pais = trim($_POST["pais"]);

$email = trim($_POST["email"]);			

if(!is_numeric($nombre)&&($apellido)) {
	
		if(preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@([_a-zA-Z0-9-]+\.)*[a-zA-Z0-9-]{2,200}\.[a-zA-Z]{2,6}$/", $email)) {
			
				if(!is_numeric($pais)) {
					
					if(preg_match("/([0-9]{2})\/([0-9]{2})/", $fecha_nacimiento)) {
												
$consulta = mysql_query("SELECT email FROM cumpleanos WHERE email='".$email."'");
						
if(mysql_num_rows($consulta) > 0) {

$cad="UPDATE cumpleanos set nombre='$nombre', apellido='$apellido', fecha_nacimiento='$fecha_nacimiento', pais='$pais' WHERE email='$email'";

mysql_query($cad);

echo '<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://es.byvergara.com/localidades-franquicias.php">
<p align="center"><br><br><br>Solicitud exitosa:<br><br>Gracias por actualizar sus datos en la linea de afliados VERGARA.</p>';

}
						
else {
	
$sentencia="INSERT INTO cumpleanos (nombre, apellido, fecha_nacimiento, pais, email) VALUES('$nombre', '$apellido', '$fecha_nacimiento', '$pais', '$email')";
						
$resultado=mysql_query($sentencia) or die (include ('<br><br><br><br><br><p align="center">Error al insertar en la BD</p>'));

echo '<META HTTP-EQUIV="Refresh" CONTENT="5; URL=http://es.byvergara.com/localidades-franquicias.php">
<p align="center"><br><br><br>Solicitud exitosa:<br><br>Gracias por actualizar sus datos en la linea de afliados VERGARA.</p>';				

}

$nombre_origen    = "VERGARA";
$email_origen     = $email;
//$email_copia      = "webmaster@vermilinternacional.com";
//$email_ocultos    = "byvergara.com@gmail.com";
$email_destino    = "contacto@byvergara.com";

$asunto           = "Un cliente ha actualizado sus datos personales";

$mensaje          = "Un cliente ha actualizado sus datos personales".'<br>'.$nombre.'<br>'.$apellido.'<br>'.$fecha_nacimiento.'<br>'.$pais.'<br>'.$email;

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
							echo '<br><br><br><br><br><p align="center">Introduzca una fecha de nacimiento valida<br><br><a href="_actualizardatos.php">Volver</a></p>';
						}	
				
				}
				else {
					echo '<br><br><br><br><br><p align="center">Introduzca un pais valido<br><br><a href="_actualizardatos.php">Volver</a></p>';
				}

		}
		else {
			echo '<br><br><br><br><br><p align="center">Introduzca un correo valido<br><br><a href="_actualizardatos.php">Volver</a></p>'; 
		}
	
}
else {
	echo '<br><br><br><br><br><p align="center">Introduzca un nombre o apellido valido<br><br><a href="_actualizardatos.php">Volver</a></p>';
}

?>