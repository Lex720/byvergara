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
if(isset($_SESSION["log"]))
{
	if (isset($_SESSION['codigo'])) $codigo=$_SESSION['codigo']; else  $codigo='';
?>

<div class="main">

    <div class="vip">
    
    <br>
    
        <h1 align="center">Consulta de Tarjetas VIP</h1>
        
        <p align="center">Ingresa el código de la tarjeta para tener información referente a la misma.</p>
        
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

<?php	

	if (isset($_POST['buscar'])) {
		
		$codigo=$_POST['codigo'];
	
		$cuenta = $db->query('SELECT COUNT(*) FROM tarjetas WHERE codigo="'.$codigo.'"'); 
		$num_filas = $cuenta->fetchColumn();
		
		if($num_filas == 0) {
			
			$error = '<br>No se encontr&oacute la tarjeta solicitada.<br>';
			
			?>
            <p align="center"><br><label class="error"><?php echo $error ?></label><br></p>
            <?php
			
		}
		
		else {
			
			$consulta = $db->query('SELECT * FROM tarjetas WHERE codigo="'.$codigo.'"');
		
			$filas = $consulta->fetch(PDO::FETCH_BOTH);
		
			$tipo=$filas['tipo'];
		
			$fecha_entrega=$filas['fecha_entrega'];
		
			$tienda=$filas['tienda'];
		
			$status=$filas['status'];
			
			if ($tipo=='1') { 
				
				$tipo2='Platinum'; 
			} 
			else { 
			
				$tipo2='Gold'; 
			}
			
			$cuenta2 = $db->query('SELECT COUNT(*) FROM clientes WHERE codigo_tarjeta="'.$codigo.'"'); 
			$num_filas2 = $cuenta2->fetchColumn();
			
			if($num_filas2 == 0) {
			
				$resultado = '<br>La tarjeta no ha sido asignada a ningun cliente.<br>';
			}
			else {
				
				$consulta2 = $db->query('SELECT * FROM clientes WHERE codigo_tarjeta="'.$codigo.'"');
		
				$filas2 = $consulta2->fetch(PDO::FETCH_BOTH);
					
				$nombre=$filas2['nombre'];
				
				$apellido=$filas2['apellido'];
				
				$cedula=$filas2['cedula_completa'];
			
				$resultado = '
				<label>Nombre del cliente:</label>
				<br><br>
				<input class="formulario2" type="text" name="status" id="status" value="'.$nombre.' '.$apellido.'" size="35%" readonly="readonly"></input>
				<br><br>
				<label>Documento de identidad:</label>
				<br><br>
				<input class="formulario2" type="text" name="status" id="status" value="'.$cedula.'" size="35%" readonly="readonly"></input>';
			
			}
			
			?>
            
            <p align="center">
            
            <br><br>

             <label>Tipo de tarjeta:</label>
            <br><br>
            <input class="formulario2" type="text" name="tipo" id="tipo" value="<?php echo $tipo2 ?>" size="35%" readonly="readonly"></input>
            
            <br><br>
            
            <label>Fecha de registro:</label>
            <br><br>
            <input class="formulario2" type="text" name="fecha_entrega" id="fecha_entrega" value="<?php echo $fecha_entrega ?>" size="35%" readonly="readonly"></input>
            
            <br><br>
            
            <label>Tienda a la que se le entrego:</label>
            <br><br>
            <input class="formulario2" type="text" name="tienda" id="tienda" value="<?php echo $tienda ?>" size="35%" readonly="readonly"></input>
            
            <br><br>
            
            <label>Estatus de la tarjeta:</label>
            <br><br>
            <input class="formulario2" type="text" name="status" id="status" value="<?php echo $status ?>" size="35%" readonly="readonly"></input>
            
            <br><br>
            
            <label><?php echo $resultado ?></label>
            
            </p>   
            
            <?php
			
		}
		
	}
	
	else {
	}

?>
    <br>

    </div>
    
    <br>
    
    <p align="center"><a href="_vip-menu.php" class="negro">Regresar al menú</a></p>
        
    <br>
    
    <p align="center"><strong>Bienvenido,</strong>
    
	<?php 
			echo $_SESSION["usuario"].' '.'(<a href="_session-close.php">salir</a>).';
	?>
    
    </p>

<?php
}
else
{
echo '<br><br><br><br><br><br><br>'.'<h3 align="center">'.'Debe haber iniciado sesi&oacuten para entrar en esta secci&oacuten.'
     .'<br><br>'.'<a href="_vip-acceder.php">Iniciar Sesi&oacuten.</a>'.'</h3>'.'<br><br><br><br><br><br>';
}
?>

</div>


<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
