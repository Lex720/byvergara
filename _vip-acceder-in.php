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

$usuario = trim($_POST["usuario"]);

$pass = trim($_POST["pass"]);


if(!isset($_SESSION["log"])){	
	
	$consulta = $db->query('SELECT * FROM usuarios WHERE usuario="'.$usuario.'"');
	
	$filas = $consulta->fetch(PDO::FETCH_BOTH);
	
	$usuario_bd = $filas['usuario'];
	$pass_bd = $filas['pass'];

	if($usuario_bd==$usuario and $pass_bd==$pass) {
	
		session_name("login_usuario");
		$_SESSION["usuario"]=$usuario;
		$_SESSION["log"]="ok";
		$_SESSION["ultimoAcceso"]=date("Y-n-j H:i:s");
		print "<meta http-equiv=Refresh content=\"2 ; url=_vip-menu.php\">"; 
		
		echo '<br><br><br><br><br><h1 align="center">&iexcl;Bienvenido '.$usuario.'!'.'</h1><br><br><br><br><br>';
	
	}
	else {
		echo '<br><br><br><br><br><p align="center">Datos invalidos, verifique e intente de nuevo.<br><br><a id="buscar2" href="_vip-acceder.php">Volver</a></p><br><br><br><br><br>';
	}

}
else {
	echo '<br><br><br><br><br><p align="center">Ya su sesion esta activa.<br><br><br><a id="buscar2" href="_session-close.php">Cerrar sesi&oacuten</a>'.'<br><br>'.'<a id="buscar2" href="_vip1.php">Regresar al menu</a></p><br><br><br><br><br>';
}

?>


</div>

<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
