<?php include ('_session.php'); ?>

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

<?php if (isset($_SESSION['nombre'])) $nombre=$_SESSION['nombre']; else  $nombre=''; ?>
<?php if (isset($_SESSION['apellido'])) $apellido=$_SESSION['apellido']; else  $apellido=''; ?>
<?php if (isset($_SESSION['cedula'])) $cedula=$_SESSION['cedula']; else  $cedula=''; ?>
<?php if (isset($_SESSION['fecha_nacimiento'])) $fecha_nacimiento=$_SESSION['fecha_nacimiento']; else  $fecha_nacimiento=''; ?>
<?php if (isset($_SESSION['pais'])) $pais=$_SESSION['pais']; else  $pais=''; ?>
<?php if (isset($_SESSION['estado'])) $estado=$_SESSION['estado']; else  $estado=''; ?>
<?php if (isset($_SESSION['ciudad'])) $ciudad=$_SESSION['ciudad']; else  $ciudad=''; ?>
<?php if (isset($_SESSION['direccion'])) $direccion=$_SESSION['direccion']; else  $direccion=''; ?>
<?php if (isset($_SESSION['email'])) $email=$_SESSION['email']; else  $email=''; ?>
<?php if (isset($_SESSION['telfijo'])) $telfijo=$_SESSION['telfijo']; else  $telfijo=''; ?>
<?php if (isset($_SESSION['telcel'])) $telcel=$_SESSION['telcel']; else  $telcel=''; ?>
<?php if (isset($_SESSION['empresa_actual'])) $empresa_actual=$_SESSION['empresa_actual']; else  $empresa_actual=''; ?>
<?php if (isset($_SESSION['ocupacion'])) $ocupacion=$_SESSION['ocupacion']; else  $ocupacion=''; ?>
<?php if (isset($_SESSION['comentarios'])) $comentarios=$_SESSION['comentarios']; else  $comentarios=''; ?>

<div class="main">

	<div class="unete">
    
    <br>
    
    	<h1 align="center">¡Solicita tu franquicia!</h1>
        
        <p>Si esta interesado en formar parte de nuestra red de franquiciados, por favor rellene el formulario con sus datos y a la brevedad posible uno de nuestros asesores de negocios se pondrá en contacto con usted para suministrarle la información necesaria. Gracias por interes y confianza en VERGARA.</p>
        
        <br>
        
        <div class="unete1">
        
        	<form method="post" action="unete-insert.php">
            	
			<p><input name="nombre" type="text" required="required" class="formulario" id="nombre" value="<?=$nombre;?>" placeholder="Nombre" size="45%" maxlength="15"></input></p>
            
			<p><input name="apellido" type="text" required="required" class="formulario" id="apellido" value="<?=$apellido;?>" placeholder="Apellido" size="45%" maxlength="15"></input></p>
            
            <p>
            <label>Cédula:</label>&nbsp;
            <select id="nacionalidad" name="nacionalidad">
			  <option value="V" selected="selected">V</option>
			  <option value="E">E</option>
			</select>
            &nbsp;
            <input name="cedula" type="text" required="required" class="formulario" id="cedula" value="<?=$cedula;?>" placeholder="" size="30%" maxlength="8"></input>
            </p>
            
            <p>
            <label>Selecciona tu género:</label>&nbsp;
            <input class="formulario" id="hombre" type="radio" name="genero" value="hombre" checked = "checked">Hombre</input>&nbsp;
            <input class="formulario" id="mujer" type="radio" name="genero" value="mujer">Mujer</input>
            </p>
            
            <p><input class="formulario" id="fecha_nacimiento" value="<?=$fecha_nacimiento;?>" size="45%" type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento: dd/mm/aaaa" required="required"></input></p>
            
            <p><input name="pais" type="text" required="required" class="formulario" id="pais" value="<?=$pais;?>" placeholder="País de residencia" size="45%" maxlength="20"></input></p>
            
            <p><input name="estado" type="text" required="required" class="formulario" id="estado" value="<?=$estado;?>" placeholder="Estado/Provincia" size="45%" maxlength="20"></input></p>
            
            <p><input name="ciudad" type="text" required="required" class="formulario" id="ciudad" value="<?=$ciudad;?>" placeholder="Ciudad" size="45%" maxlength="20"></input></p>
            
            <p><textarea class="formulario" id="direccion" value="<?=$direccion;?>" cols="45%" rows="5" name="direccion" placeholder="Dirección" required="required"></textarea></p>
            
            <p><input class="formulario" id="email" value="<?=$email;?>" size="45%" type="email" name="email" placeholder="Email" required="required"></input></p>
        
        </div>
        
        <div class="unete2">
        
        	<p><input name="telfijo" type="text" required="required" class="formulario" id="telfijo" value="<?=$telfijo;?>" placeholder="Teléfono fijo" size="45%" maxlength="15"></input></p>

            <p><input name="telcel" type="text" required="required" class="formulario" id="telcel" value="<?=$telcel;?>" placeholder="Teléfono celular" size="45%" maxlength="15"></input></p>
            
			<p><input name="empresa_actual" type="text" required="required" class="formulario" id="empresa_actual" value="<?=$empresa_actual;?>" placeholder="Empresa donde labora" size="45%" maxlength="20"></input></p>
            
			<p><input name="ocupacion" type="text" required="required" class="formulario" id="ocupacion" value="<?=$ocupacion;?>" placeholder="Ocupación" size="45%" maxlength="20"></input></p>
            
            <p>
            <label>Área interés:</label>&nbsp;
            <select id="areas" name="areas">
  				<option value="Ventas como asesor independiente" selected="selected">Ventas como asesor independiente</option>
  				<option value="Ventas como distribuidor autorizado">Ventas como distribuidor autorizado</option>
  				<option value="Ventas como franquicia">Ventas como franquicia</option>
  				<option value="Almacén">Almacén</option>
                <option value="Administración">Administración</option>
                <option value="Sistemas">Sistemas</option>
			</select>
            </p>
            
            <p>
            <label>¿Como te enteraste de VERGARA?</label>&nbsp;
            <select id="enteraste" name="enteraste">
  				<option value="Por un amigo" selected="selected">Por un amigo</option>
  				<option value="Revista">Revista</option>
                <option value="Prensa">Prensa</option>
  				<option value="Radio">Radio</option>
  				<option value="Television">Televisión</option>
                <option value="Internet">Internet</option>
			</select>
            </p>
            
            <p>
            <label>¿Deseas recibir novedades en?</label>&nbsp;
            <input class="formulario" id="boletin" type="checkbox" name="boletin" value="boletin">
            Boletín</input>&nbsp;
            <input class="formulario" id="sms" type="checkbox" name="sms" value="sms">SMS</input>
            </p>
            
            <p><textarea class="formulario" id="comentarios" value="<?=$comentarios;?>" cols="45%" rows="6" name="comentarios" placeholder="Comentarios" required="required"></textarea></p>
            
            <p align="center"><button id="enviar" name="enviar" type="submit" class="verde">Enviar</button>
        	<button id="reset" name="reset" type="reset" class="verde">Limpiar</button></p>
            
        </div>
        
        </form>
    
    </div>
    
    <br>

</div>


<!-------------------------------------------- Empieza el footer ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
