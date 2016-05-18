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

<!--- Menu nav script -->
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

<!--- Empieza el body -->
<body>                                     

<?php include_once("_analyticstracking.php") ?>

<!--- Empieza el header -->
<?php include ('_header.php'); ?>


<!--- Empieza el nav -->
<?php include ('_nav.php'); ?>


<!--- Empieza el main -->

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

<?php if (isset($_SESSION['institucion'])) $institucion=$_SESSION['institucion']; else  $institucion=''; ?>
<?php if (isset($_SESSION['fecha_graduacion'])) $fecha_graduacion=$_SESSION['fecha_graduacion']; else  $fecha_graduacion=''; ?>
<?php if (isset($_SESSION['titulo'])) $titulo=$_SESSION['titulo']; else  $titulo=''; ?>
<?php if (isset($_SESSION['conocimiento'])) $conocimiento=$_SESSION['conocimiento']; else  $conocimiento=''; ?>
<?php if (isset($_SESSION['lengua'])) $lengua=$_SESSION['lengua']; else  $lengua=''; ?>
<?php if (isset($_SESSION['lengua2'])) $lengua2=$_SESSION['lengua2']; else  $lengua2=''; ?>

<?php if (isset($_SESSION['empresa'])) $empresa=$_SESSION['empresa']; else  $empresa=''; ?>
<?php if (isset($_SESSION['cargo'])) $cargo=$_SESSION['cargo']; else  $cargo=''; ?>
<?php if (isset($_SESSION['telfax'])) $telfax=$_SESSION['telfax']; else  $telfax=''; ?>
<?php if (isset($_SESSION['fecha_ingreso'])) $fecha_ingreso=$_SESSION['fecha_ingreso']; else  $fecha_ingreso=''; ?>
<?php if (isset($_SESSION['fecha_egreso'])) $fecha_egreso=$_SESSION['fecha_egreso']; else  $fecha_egreso=''; ?>
<?php if (isset($_SESSION['resumen'])) $resumen=$_SESSION['resumen']; else  $resumen=''; ?>
<?php if (isset($_SESSION['razon'])) $razon=$_SESSION['razon']; else  $razon=''; ?>

<?php if (isset($_SESSION['ciudad_trabajo'])) $ciudad_trabajo=$_SESSION['ciudad_trabajo']; else  $ciudad_trabajo=''; ?>
<?php if (isset($_SESSION['fecha_disponibilidad'])) $fecha_disponibilidad=$_SESSION['fecha_disponibilidad']; else  $fecha_disponibilidad=''; ?>
<?php if (isset($_SESSION['remuneracion'])) $remuneracion=$_SESSION['remuneracion']; else  $remuneracion=''; ?>
<?php if (isset($_SESSION['libre'])) $libre=$_SESSION['libre']; else  $libre=''; ?>

<div class="main">

	<div class="unete">
    
    <br>
    
    	<h1 align="center">¡Solicitud de empleo!</h1>
        
        <p>Si quieres postular te para uno de nuestros puestos de trabajo disponibles, solo tienes que llenar los siguientes campos y en breve nos comunicaremos contigo.</p>
        
        <br>
        
        	<form method="post" action="empleo-insert.php" enctype="multipart/form-data">
            
            <p><label><strong>INFORMACIÓN PERSONAL:</strong></label></p>
            	
			<p><input name="nombre" type="text" required="required" class="formulario" id="nombre" value="<?=$nombre;?>" placeholder="Nombre" size="45%" maxlength="30"></input></p>
            
			<p><input name="apellido" type="text" required="required" class="formulario" id="apellido" value="<?=$apellido;?>" placeholder="Apellido" size="45%" maxlength="30"></input></p>
            
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
            
            <p>
            <label>Estado civil:</label>
            &nbsp;
            <select id="civil" name="civil">
  				<option value="Soltero(a)" selected="selected">Soltero (a)</option>
  				<option value="Casado(a)">Casado (a)</option>
  				<option value="Divorciado(a)">Divorciado (a)</option>
			</select>
            </p>
            
            <p><input class="formulario" id="fecha_nacimiento" value="<?=$fecha_nacimiento;?>" size="45%" type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento: dd/mm/aaaa" required="required"></input></p>
            
            <p><input name="pais" type="text" required="required" class="formulario" id="pais" value="<?=$pais;?>" placeholder="País de residencia" size="45%" maxlength="20"></input></p>
            
            <p><input name="estado" type="text" required="required" class="formulario" id="estado" value="<?=$estado;?>" placeholder="Estado" size="45%" maxlength="20"></input></p>
            
            <p><input name="ciudad" type="text" required="required" class="formulario" id="ciudad" value="<?=$ciudad;?>" placeholder="Ciudad" size="45%" maxlength="20"></input></p>
            
            <p><textarea class="formulario" id="direccion" value="<?=$direccion;?>" cols="45%" rows="3" name="direccion" placeholder="Dirección" required="required"></textarea></p>
            
            <p><input name="telfijo" type="text" required="required" class="formulario" id="telfijo" value="<?=$telfijo;?>" placeholder="Teléfono fijo" size="45%" maxlength="15"></input></p>
			
            <p><input name="telcel" type="text" required="required" class="formulario" id="telcel" value="<?=$telcel;?>" placeholder="Teléfono celular" size="45%" maxlength="15"></input></p>
            
            <p><input class="formulario" id="email" value="<?=$email;?>" size="45%" type="email" name="email" placeholder="Email" required="required"></input></p>
            
            <p align="center">
            <input class="formulario" id="fb" size="45%" type="text" name="fb" placeholder="Facebook (opcional)"></input>
            </p>
            
            <p align="center">
            <input class="formulario" id="tw" size="45%" type="text" name="tw" placeholder="Twitter (opcional)"></input>
            </p>
            
            <p align="center">
            <input class="formulario" id="ig" size="45%" type="text" name="ig" placeholder="Instagram (opcional)"></input>
            </p>
            
            <p>
            <label>¿Posee licencia de conducir?</label>&nbsp;
            <select id="licencia" name="licencia">
			  <option value="Si" selected="selected">Si</option>
			  <option value="No">No</option>
			</select>
            </p>
            
            <p>
            <label>¿Posee vehículo?</label>
            &nbsp;
            <select id="vehiculo" name="vehiculo">
			  <option value="Si" selected="selected">Si</option>
			  <option value="No">No</option>
			</select>
            </p>

            <p>
            <label>Adjunta una foto personal (jpeg o png)</label>
            <br><br>
            <input id="foto" type="file" name="foto" value="foto" required="required"></input>
            </p>
            
            <br>
            
            <p><label><strong>EDUCACIÓN:</strong></label></p>
            
            <p>
            <label>Nivel de educación:</label>
            &nbsp;
            <select id="educacion" name="educacion">
  				<option value="Secundaria" selected="selected">Secundaria</option>
  				<option value="Tecnica">Técnica</option>
  				<option value="Universitaria">Universitaria</option>
  				<option value="Post-Grado">Pos-Grado</option>
			</select>
            </p>
            
            <p><input name="institucion" type="text" required="required" class="formulario" id="institucion" value="<?=$institucion;?>" placeholder="Nombre de la institucion" size="45%" maxlength="40"></input></p>
            
            <p><input class="formulario" id="fecha_graduacion" value="<?=$fecha_graduacion;?>" size="45%" type="text" name="fecha_graduacion" placeholder="Fecha de graduacion: dd/mm/aaaa" required="required"></input></p>
            
            <p><input name="titulo" type="text" required="required" class="formulario" id="titulo" value="<?=$titulo;?>" placeholder="Titulo recibido" size="45%" maxlength="30"></input></p>
            
            <p><input name="conocimiento" type="text" required="required" class="formulario" id="conocimiento" value="<?=$conocimiento;?>" placeholder="Conocimiento o habilidad especifica" size="45%" maxlength="40"></input></p>
            
            <p><input name="lengua" type="text" required="required" class="formulario" id="lengua" value="<?=$lengua;?>" placeholder="Lengua materna" size="45%" maxlength="40"></input></p>
            
            <p><input name="lengua2" type="text" class="formulario" id="lengua2" value="<?=$lengua2;?>" placeholder="Otra lengua (opcional)" size="45%" maxlength="40"></input></p>
            
            <br>
            
            <p><label><strong>ULTIMA EXPERIENCIA LABORAL:</strong></label></p>
            
            <p><input name="empresa" type="text" required="required" class="formulario" id="empresa" value="<?=$empresa;?>" placeholder="Nombre de la empresa/institucion" size="45%" maxlength="40"></input></p>
            
            <p><input name="cargo" type="text" required="required" class="formulario" id="cargo" value="<?=$cargo;?>" placeholder="Cargo desempeñado" size="45%" maxlength="30"></input></p>
            
            <p><input name="telfax" type="text" required="required" class="formulario" id="telfax" value="<?=$telfax;?>" placeholder="Teléfono/Fax" size="45%" maxlength="15"></input></p>
            
            <p>
            <label>Desde:</label>
            &nbsp;
            <input class="formulario" id="fecha_ingreso" value="<?=$fecha_ingreso;?>" size="12%" type="text" name="fecha_ingreso" placeholder="dd/mm/aaaa" required="required"></input>
            &nbsp;
            <label>hasta:</label>
            &nbsp;
            <input class="formulario" id="fecha_egreso" value="<?=$fecha_egreso;?>" size="12%" type="text" name="fecha_egreso" placeholder="dd/mm/aaaa" required="required"></input>
            </p>
            
            <p><textarea class="formulario" id="resumen" value="<?=$resumen;?>" cols="45%" rows="5" name="resumen" placeholder="Resumen de actividades realizadas" required="required"></textarea></p>
            
            <p><input name="razon" type="text" required="required" class="formulario" id="razon" value="<?=$razon;?>" placeholder="Razon para dejar su ultimo empleo" size="45%" maxlength="40"></input></p>
            
            <br>
            
            <p><label><strong>AREA DE INTERES:</strong></label></p>
            
            <p>
            <label>¿En que area de nuestra organizacion le gustaria desempeñarse?</label>
            </p>
            
            <p>
            <label>Seleccione un departamento:</label>&nbsp;
            <select id="areas" name="areas">
  				<option value="Administracion" selected="selected">Administración</option>
                <option value="Almacen">Almacén</option>
  				<option value="Ventas">Ventas</option>
  				<option value="Publicaciones">Publicaciones</option>
  				<option value="ArtesGraficas">Artes Gráficas</option>
                <option value="Mercadeo">Mercadeo</option>
                <option value="Sistemas">Sistemas</option>
			</select>
            </p>
            
            <p><input name="ciudad_trabajo" type="text" required="required" class="formulario" id="ciudad_trabajo" value="<?=$ciudad_trabajo;?>" placeholder="Ciudad donde desea trabajar" size="45%" maxlength="20"></input></p>
            
            <p><input class="formulario" id="fecha_disponibilidad" value="<?=$fecha_disponibilidad;?>" size="45%" type="text" name="fecha_disponibilidad" placeholder="Fecha de disponibilidad: dd/mm/aaaa" required="required"></input></p>
            
            <p>
            <label>Remuneración deseada:</label>
            &nbsp;
            <input name="remuneracion" type="text" required="required" class="formulario" id="remuneracion" value="<?=$remuneracion;?>" placeholder="0.00" size="22%" maxlength="15"></input>
            </p>
            
            <p>
            <textarea class="formulario" id="libre" value="<?=$libre;?>" cols="45%" rows="5" name="libre" placeholder="Describa sus mejores cualidades y aptitudes" required="required"></textarea>
            </p>

            <p>
            <label>Adjunta tu CV (PDF, Word, Rar, Zip)</label>
            <br><br>
            <input id="cv" type="file" name="cv" value="cv" required="required"></input>
            </p>
            
            <br>
            
            <p align="center"><button id="enviar" name="enviar" type="submit" class="verde">Enviar</button>
        	<button id="reset" name="reset" type="reset" class="verde">Limpiar</button></p>
        
        </form>
        
        <br>
    
    </div>
    
    <div class="empleo">
        <p>
        * Lea toda la planilla y verifique que sus datos sean correctos antes de enviar la solicitud.<br>
        * Caulquier dato o información suministrada en esta planilla será tratado por la empresa de manera confidencial.<br>
        * El hecho de enviar esra solicitud no le garantiza a usted empleo en la empresa, y de resultar seleccionado como candidato para ocupar alguna vancante en la organización deberá asistir a una entrevista personal bajo las condiciones que le explicaremos en su oportunidad, de no resultar seleccionado en la actualidad, conservaremos su solicitud para futuras referencias.
        </p>
    </div>
    
    <br>

</div>


<!--- Empieza el footer -->
<?php include ('_footer.php'); ?>

</body>
