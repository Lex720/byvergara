<?php include ('_session.php'); ?>
<?php include ('_conexion-vip.php'); ?>

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

<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){
z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2AjrzBBqhiu2hOHP2FNObc1dDbY336Sz';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script--> 

<!----------------------------------- Menu nav script -------------------------------------->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>

</head>

<!-------------------------------------------- Empieza el body ------------------------------------------------------->
<body>                                     

<?php include_once("_analyticstracking.php") ?>

<!-------------------------------------------- Empieza el header ----------------------------------------------------->
<?php include ('_header.php'); ?>


<!---------------------------------------------- Empieza el nav ------------------------------------------------------>
<?php include ('_nav.php'); ?>


<!-------------------------------------------- Empieza el main -------------------------------------------------------->

<?php

	if (isset($_SESSION['codigo'])) $codigo=$_SESSION['codigo']; else  $codigo='';
	
	if (isset($_POST['buscar'])) {
		
		$codigo=$_POST['codigo'];
		
		$cuenta = $db->query('SELECT COUNT(*) FROM tarjetas WHERE codigo="'.$codigo.'"'); 
		
		$num_filas = $cuenta->fetchColumn();
		
		if($num_filas == 0) {
			
			$error = '<br>No se encontr&oacute la tarjeta solicitada.<br>';
		
			$status='';
			
			$status2 = '';
		}
		
		else {
			
			$error = '';
			
			$consulta = $db->query('SELECT * FROM tarjetas WHERE codigo="'.$codigo.'"');
			
			$filas = $consulta->fetch(PDO::FETCH_BOTH);
		
			$status = $filas['status'];
			
			$status2 = '<h3 align="center">El estatus de la tarjeta es: '.$status.'.</h3>';
		}
		
	}
	
	else {
		
		$error = '';
		
		$status = '';
		
		$status2 = '';
	}

?>

<div class="main">

	<div class="vip">
    
    <br>
    
    	<h1 align="center">Consulta de Tarjetas VIP</h1>
        
        <p align="center">Ingresa el código de la tarjeta para consultar su estatus.</p>
        
        <br>
        
        <form method="post" action="">
        
        	<p align="center">
            
			<label for="buscar">Código de tarjeta:</label>
            
        	<br><br>
            
			<input class="formulario2" id="codigo" size="35%" type="text" value="<?php echo $codigo ?>" name="codigo" placeholder="Introduce el codigo aqui" required="required"></input>
            
            <br><br>
            
            <button id="buscar" name="buscar" type="submit" class="verde">Consultar</button>
        
        	</p>
                
        </form>
            
       		<p align="center"><?php echo $error ?></p>
            
            <br>

			<p align="center">
            
            <label><?php echo $status2 ?></label>
            
            </p>

    <br>

    </div>
    
    <br>
    
    <p align="center"><a href="_vip1.php" class="negro">Regresar al menú</a></p>


</div>


<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
