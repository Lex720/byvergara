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

<div class="main">

<?php
if(isset($_SESSION["log"]))
{
	$usuario = $_SESSION["usuario"];
	
	$consulta = $db->query('SELECT * FROM usuarios WHERE usuario="'.$usuario.'"');
	
	$filas = $consulta->fetch(PDO::FETCH_BOTH);
	
	$permiso = $filas['permiso'];
	
?>

	<div class="vip">
    
    <br>
    
    	<h1 align="center">¡Programa VIP!</h1>
        
        <p align="center">Entra en cualquiera de las siguientes secciones y consulta, registra o modifica información necesaria.</p>
        
        <br>
        
        <?php
        
        if (($permiso == 1) || ($permiso == 3)) {
			
		?>

        <div class="vip-box">
            
        	<h3 align="center">Datos de clientes</h3>
            
            <p><a href="_vip-clienteregistro.php">Registro de clientes</a></p>
            
            <p><a href="_vip-clienteconsulta.php">Consulta de clientes</a></p>

            <p><a href="_vip-clienteactualizacion.php">Actualizar datos clientes</a></p>
            
            <p><a href="_vip-compraconsulta.php">Historial de compras por clientes</a></p>
            
        </div>
        
        <div class="vip-box">
            
        	<h3 align="center">Tarjetas VIP</h3>
            
            <p><a href="_vip-compraregistro.php">Compras con tarjetas VIP</a></p>
                        
            <p><a href="_vip-tarjetaconsulta.php">Consulta de tarjetas VIP</a></p>
            
            <?php
        	if ($permiso == 3) {

            	echo '<p><a href="_vip-ventaconsulta2.php">Consulta de tarjetas asignadas</a></p>';

			}
        	else {
			
				echo '<p><a href="_vip-ventaconsulta.php">Consulta de tarjetas asignadas</a></p>';	
			}
			?>
            
            <p><a href="_vip1-tarjetaextravio.php">Anulación de tarjetas VIP</a></p>
            
        </div>
        
        <div class="vip-box">
            
        	<h3 align="center">Gift Cards</h3>
            
            <p><a href="_vip-gcventa.php">Venta de giftcards</a></p>
            
            <p><a href="_vip-gcconsulta.php">Consulta de giftcards</a></p>
            
            <p><a href="_vip-gccompra.php">Compras con giftcards</a></p>
            
            <p><a href="_vip-gcanulacion.php">Anulación de giftcards</a></p>

        </div>
        
        <?php 
		}
        else {}
		?>
        
<!--------------------------------------------------------- SECCION DE EMPLEADOS DE VERMIL ---------------------------------------------------------------->
        
        <?php
        
        if (($permiso == 2) || ($permiso == 3)) {
			
		?> 
        
        <div class="vip-box">
            
        	<h3 align="center">Empleados VERMIL</h3>

            <p><a href="_vip-tarjetaregistro.php">Registro de tarjetas VIP</a></p>
            
            <p><a href="_vip-gcregistro.php">Registro de giftcards</a></p>
            
            <p><a href="_vip-tarjetaconsulta2.php">Consulta de tarjetas VIP</a></p>
            
            <p><a href="_vip-gcconsulta2.php">Consulta de giftcards</a></p>
            
        </div>
        
        <?php 
		}

        else {
			
			echo '';
		}
		
		?>
        
        <br>
        
        <p align="center"><a href="_vip-menu-videtutoriales.php">¿Necesitas ayuda? Ingresa a nuestra sección de <b>Tutoriales</b> aquí!</a></p>
        
        <br><br>
    
    </div>
    
    <p align="center"><strong>Bienvenido,</strong>
    
	<?php 

		echo $_SESSION["usuario"].' '.'(<a href="_session-close.php">salir</a>).';
		
	?>
    
    </p>

<?php
}
else
{
echo '<br><br><br><br><br><br><br><h3 align="center">Estimado cliente, esta secci&oacuten esta restringida para franquicias VERGARA.<br><br><br><a id="buscar2" href="_vip-acceder.php">Iniciar sesi&oacuten</a><br><br><br><a id="buscar2" href="_vip1.php">Regresar al menu</a></h3><br><br><br><br><br><br>';
}
?>

</div>


<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
