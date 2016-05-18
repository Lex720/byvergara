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

<!--3D Grid Gallery-->
<link rel="stylesheet" type="text/css" href="css/3dgrid/component.css" />
<link rel="stylesheet" type="text/css" href="css/3dgrid/normalize.css" />
<script src="js/3dgrid/modernizr.custom.js"></script>

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
    
    <div class="catalogo-productos">
    
    	<h1 align="center">¡Catalogo de productos!</h1>
        
        <p>Selecciona la sección que quieres visitar y conoce nuestra gran variedad de ropa y accesorios para damas.</p>
        
        <br>
    
    	<div class="container">
			
			<section class="grid3d horizontal" id="grid3d">
            
				<div class="grid-wrap">
                
					<div class="grid">
                    	
                        <figure><a href="catalogo-productos-zapatos.php"><img src="img/catalogo/productos/calzados.jpg"/></a></figure>
						<figure><a href="catalogo-productos-myc.php"><img src="img/catalogo/productos/myc.jpg"/></a></figure>
						<figure><a href="catalogo-productos-lentes.php"><img src="img/catalogo/productos/lentes.jpg"/></a></figure>
                        <figure><a href="catalogo-productos-carteras.php"><img src="img/catalogo/productos/carteras.jpg"/></a></figure>
                        <figure><a href="catalogo-productos-prendas.php"><img src="img/catalogo/productos/prendas.jpg"/></a></figure>
                        <figure><a href="catalogo-productos-relojes.php"><img src="img/catalogo/productos/relojes.jpg"/></a></figure>
                        
					</div>
                    
				</div><!-- /grid-wrap -->
            
            </section>              
			
		</div><!-- /container -->
        
		<script src="js/3dgrid/classie.js"></script>
		<script src="js/3dgrid/helper.js"></script>
		<script src="js/3dgrid/grid3d.js"></script>
		
		<script>
			new grid3D( document.getElementById( 'grid3d' ) );
		</script>
        
	</div>
    
    <br><br>
    
    <div class="galeria-menu"><a href="catalogo-productos-ultimos.php">
        
        	<h4 align="justify">Nuevos productos</h4>
        	<p align="justify">Mira lo nuevo que VERGARA trae para ti aquí.</p>
        
	</a></div>
    
    <br><br>
    
    <div class="catalogo-menu">
        
        <h3 align="justify">Catalogo Clásico</h3>
        <p align="justify"><a href="catalogo-libro.php">¿Quieres ver nuestros mejores conjuntos? Mira el catalogo clásico aquí.</a></p>
        
    </div>
    
    <br>

</div>

<!-------------------------------------------- Empieza el FOOTER ------------------------------------------------------>
<?php include ('_footer.php'); ?>

</body>
