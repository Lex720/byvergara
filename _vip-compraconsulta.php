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

?>

<div class="main">

	<div class="vip">
    
    <br>
    
    	<h1 align="center">Consulta de compras realizadas</h1>
        
        <p align="center">Ingresa el numero de cédula del cliente para obtener información referente a sus compras.</p>
        
        <br>
        
        <?php if (isset($_SESSION['cedula'])) $cedula=$_SESSION['cedula']; else  $cedula=''; ?>
        
        <form method="post" action="">
        
        	<p align="center">
            
			<label for="buscar">Documento de identidad:</label>
            
            <br><br>
            
            <select id="nacionalidad" name="nacionalidad">
			  <option value="V" selected="selected">V</option>
			  <option value="E">E</option>
              <option value="J">J</option>
              <option value="P">P</option>
			</select>&nbsp;
            
            <input class="formulario2" id="cedula" size="25%" type="text" value="<?php echo $cedula ?>" name="cedula" placeholder="" required="required"></input>
            
            <br><br><br>
            
            <button id="buscar" name="buscar" type="submit" class="verde">Consultar</button>
            
       		</p>
        
        </form>
            
        <br>
                     
<?php
          
        if (isset($_POST['buscar'])) {
		
		$nacionalidad=$_POST['nacionalidad'];
		
		$cedula=$_POST['cedula'];
		
		$cedula_completa = $nacionalidad.'-'.$cedula;
		
		$tienda=$_SESSION["usuario"];
		
		$cuenta = $db->query('SELECT COUNT(*) FROM compras WHERE cedula_cliente="'.$cedula_completa.'" and tienda="'.$tienda.'"'); 
		$num_filas = $cuenta->fetchColumn();
		
			if($num_filas == 0) {
			
				$error = '<br>El cliente no ha realizado compras en esta tienda o no esta registrado.<br>';
			
				$codigo_tarjeta='';
			
				$codigo_factura='';
			
				$fecha='';
		
				$monto='';
				
?>

				<p align="center"><?php echo $error ?></p>
         
<?php
			}
		
			else {
			
			?>
				
				<table width="100%" border="0">
            
					<tr class="formulario2">
    		
            			<td width="25%" align="center"><b>Código de tarjeta VIP asignada:</b></td>
    					<td width="25%" align="center"><b>Código de factura de compra:</b></td>
    					<td width="25%" align="center"><b>Fecha de la compra:</b></td>
    					<td width="25%" align="center"><b>Monto de la compra:</b></td>
  			
           			</tr>
                    
                </table>
            
            <?php 
			
				$error = '';
				
				$consulta = $db->query('SELECT * FROM compras WHERE cedula_cliente="'.$cedula_completa.'" and tienda="'.$tienda.'"');
		
				while($filas = $consulta->fetch(PDO::FETCH_BOTH)) {
				
					$codigo_tarjeta=$filas['codigo_tarjeta'];
			
					$codigo_factura=$filas['codigo_factura'];
			
					$fecha=$filas['fecha'];
		
					$monto=$filas['monto'];
				
?>
				<table width="100%" border="0">
                 
 					<tr class="formulario2">
                
    					<td width="25%" align="center"><?php echo $codigo_tarjeta ?></td>
                    
    					<td width="25%" align="center"><?php echo $codigo_factura ?></td>
    
    					<td width="25%" align="center"><?php echo $fecha ?></td>
                    
    					<td width="25%" align="center"><?php echo $monto ?></td>
                    
  					</tr>
                    
                </table>

<?php
				 
				} 	
			}
		}
	
		else {
		
			$error = '';
		
			$codigo_tarjeta='';
		
			$codigo_factura='';
		
			$fecha='';
		
			$monto='';
		}
?>      

    <br><br><br>

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
