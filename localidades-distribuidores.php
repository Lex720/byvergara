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

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&amp;language=es"></script>
<script type="text/javascript" src="js/map.js"></script> 

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


<!---------------------------------------------- Empieza el Nav ------------------------------------------------------>
<?php include ('_nav.php'); ?>

<!-------------------------------------------- Empieza el main -------------------------------------------------------->
<div class="main">

<br>

	<h2 align="center">Conoce a nuestros distribuidores</h2>
    
    <br>

    <div class="localidades">
    
    	<p>¿No te encuentras en el mapa? Te mostramos tu ubicación actual <a href="#" onclick="geolocalizame()">aquí.</a></p>

		<div id="map_canvas"></div>

    	<ul id="og-grid" class="og-grid">

    		<li>
            	<div class="franquicias">
                	<h3>PANAMA</h3>
                    <p>
                    <!--Albrook Mall, pasillo del pinguino, 2do piso. Panamá.<br>-->
                    Contacto:<br> (507) 3148009<br> panama@byvergara.com
                    </p>
            		<a href="#" onclick="lugar7()">Ver ubicación</a>
            	</div>
            </li>

            <li>
            	<div class="franquicias">
                	<h3>ECUADOR:</h3>
                    <p>
                    <!--Samanes 1mz 113 villa 3, oficina 2211319. Ecuador.<br>-->
                    Contacto:<br> (098) 1053563<br> guayas@byvergara.com
                    </p>
            		<a href="#" onclick="lugar10()">Ver ubicación</a>
            	</div>
            </li>
            
            <li>
            	<div class="franquicias">
                	<h3>BRASIL:</h3>
                    <p>
                    <!--. Brasil.<br>-->
                    Contacto:<br> (55) 21972175598<br> brasil@byvergara.com
                    </p>
            		<a href="#" onclick="lugar11()">Ver ubicación</a>
            	</div>
            </li>
  
		</ul>
        
        <p>Puedes visitar también nuestra sección de <a href="localidades-franquicias.php">Franquicias</a>.</p>
    
    </div>
    
    <br>

</div>

<!-------------------------------------------- Empieza el FOOTER ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
