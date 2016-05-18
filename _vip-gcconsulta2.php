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
    
    	<h1 align="center">Consulta de Gift Cards</h1>
        
        <br>
        
        <table width="100%" border="0"> 
			
            <tr>
                
            	<td align="left" colspan="3"><a id="buscar2" href="_vip-gcconsulta2-export.php">Descargar reporte</a></td>   
            
            	<form method="post" action="">
                <td align="right" colspan="3">
                <input type="text" id="buscar1" name="code" id="code" size="30%" placeholder="Codigo de giftcard"></input>
                <input type="submit" id="buscar2" name="buscar" id="buscar" value="Buscar"></input>
                </td>
            	</form>  
              
            </tr>
        
            <tr>
            	<td colspan="6">&nbsp;</td>
            </tr>
        
            <tr>
            	<td colspan="6"><h3 align="center">Listado de giftcards</h3></td>
            </tr>
            
            <tr>
            	<td colspan="6">&nbsp;</td>
            </tr>
        
            <tr align="center">
            	<td width="10%"><b>Borrar</b></td>
                <td width="25%"><b>Código</b></td>
                <td width="10%"><b>Tipo</b></td>
                <td width="25%"><b>Fecha registro</b></td>
                <td width="15%"><b>Tienda</b></td>
                <td width="15%"><b>Estatus</b></td>
            </tr>
            
            <tr>
            	<td colspan="6"></span></td>
            </tr>
        
<?php
		
		//Paginacion
		
		$cuenta = $db->query('SELECT COUNT(*) FROM giftcards'); 
		$num_filas = $cuenta->fetchColumn();
		
		$nro_reg=$num_filas;
	
		$reg_por_pagina=10;
		
		if (isset($_GET['num']))
		{
			$nro_pagina=$_GET['num'];
		}
		else
		{
			$nro_pagina=1;
		}
		
		if (is_numeric($nro_pagina)) 
			$inicio=($nro_pagina-1)*$reg_por_pagina;
		
		else 
			$inicio=0;
			
			$can_paginas=ceil($nro_reg/$reg_por_pagina);
		
		//End
		
		if (isset($_POST['buscar'])) {
			
			$codigo = $_POST['code'];
			
			$cuenta = $db->query('SELECT COUNT(*) FROM giftcards WHERE codigo="'.$codigo.'"'); 
			$num_filas = $cuenta->fetchColumn();
		
			if($num_filas == 0) {
				
				$resultado='<br><br><p align="center">No se encontr&oacute el codigo de giftcard solicitado.</p>';
			}
			
			else {
				
				$consulta = $db->query('SELECT * FROM giftcards WHERE codigo="'.$codigo.'"');
				
				$filas = $consulta->fetch(PDO::FETCH_BOTH);
				
				$codigo=$filas['codigo'];
				$tipo=$filas['tipo'];
				$fecha_entrega=$filas['fecha_entrega'];
				$tienda=$filas['tienda'];
				$status=$filas['status'];
				
				$resultado='
					<form method="post" action="_vip-gcconsulta2-insert.php">
						<input id="codigo" type="hidden" name="codigo" value="'.$codigo.'"></input>
						<tr align="center">
							<td align="center" width="10%"><button id="borrar" name="borrar" class="transparente" type="submit"><img src="img/trash.png"/></button></td>
							<td width="25%">'.$codigo.'</td>
							<td width="10%">Tipo '.$tipo.'</td>
							<td width="25%">'.$fecha_entrega.'</td>
							<td width="15%">'.$tienda.'</td>
							<td width="15%">'.$status.'</td>
						</tr>
						<tr>
							<td colspan="6"></span></td>
						</tr>
					</form>
				'; 
			}
			
?>
		<tr align="center">
            <td colspan="6"><?php echo $resultado; ?></td>
        </tr>
<?php	
			
		}
		
		else {
		
			$consulta = $db->query("SELECT * FROM giftcards LIMIT $inicio,$reg_por_pagina");
			
			while($filas = $consulta->fetch(PDO::FETCH_BOTH)) {
				
				$codigo=$filas['codigo'];
				$tipo=$filas['tipo'];
				$fecha_entrega=$filas['fecha_entrega'];
				$tienda=$filas['tienda'];
				$status=$filas['status'];
	?>	
				<form method="post" action="_vip-gcconsulta2-insert.php" onsubmit="return confirm('¿Desea borrar este registro?')">
                <input id="codigo" type="hidden" name="codigo" value="<?=$codigo;?>"></input>
                <tr align="center">
                	<td align="center" width="10%"><button id="borrar" name="borrar" class="transparente" type="submit"><img src="img/trash.png"/></button></td>
					<td width="25%"><?php echo $codigo ?></td>
					<td width="10%">Tipo <?php echo $tipo ?></td>
					<td width="25%"><?php echo $fecha_entrega ?></td>
					<td width="15%"><?php echo $tienda ?></td>
					<td width="15%"><?php echo $status ?></td>
				</tr>
                <tr>
                	<td colspan="6"></span></td>
                </tr>
                </form>

<?php	
			}
		}
?>
    	<tr>
            <td colspan="5"><br><br><br></td>
        </tr>
    
    	<tr align="center">
            <td colspan="6">
            	<div id="paginador">
					<?php 
                        if($nro_pagina>1)
                        echo "<a href='_vip-gcconsulta2.php?num=".($nro_pagina-1)."'>Anterior</a> ";
                    
                        for ($i=1;$i<=$can_paginas;$i++)
                        {
                            if ($i==$nro_pagina)
                                echo $i." ";
                            else
                                echo "<a href='_vip-gcconsulta2.php?num=$i'>$i</a> ";	
                        }
                        
                        if($nro_pagina<$can_paginas)
                        echo "<a href='_vip-gcconsulta2.php?num=".($nro_pagina+1)."'>Siguiente</a> ";
                    ?>
                </div>
            </td>
        </tr>

    </table>

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
