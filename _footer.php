<!-------------------------------------------- Empieza el footer ------------------------------------------------------>

<footer>

	<div class="seccion1">
    	
        <div class="seccion1a">
        
        	<div class="seccion1ai"><a href="galeria-videos.php">Ver mas vídeos</a></div>
            
        	<video width="100%" height="auto" preload controls poster="video/1.jpg">
				<source src="video/1.mp4" type="video/mp4" />
				<p>Tu navegador no soporta HTML5</p>
 			</video>
        	
        </div>
        
        <div class="seccion1a"><a href="ofertasempleo.php"><img src="img/empleo/1.jpg"></a></div>
        <div class="seccion1a"><a href="nosotros-tiendas.php"><img src="img/tiendas.jpg"/></a></div>
        
	</div>
        
    <div class="seccion2">
    
    	<div class="seccion2a">
        
        	<h5>COLECCION</h5>
        	<p><a href="catalogo.php">Cat&aacute;logo</a></p>
        	<p><a href="galeria.php">Galería</a></p>
        
        </div>
        
		<div class="seccion2a">
        
        	<h5>MARCA</h5>
        	<p><a href="_vip1.php">Programa VIP</a></p>
            <p><a href="publicidad.php">Publicidad</a></p>
            <p><a href="redessociales.php">Redes sociales</a></p>
        
        </div>
        
		<div class="seccion2b">
        
        	<table width="100%" border="0">
            
            	<tr><td align="center" colspan="5"><ul><li></li></ul></td></tr>
                
                <tr>

                	<td align="center" colspan="1" width="10%"><ul><li><img src="img/telf.png"></li></ul></td>
                    <td align="center" colspan="1" width="2%">&nbsp;</td>
            
            		<td align="justify" colspan="3" width="88%">
                    	<ul>
                        	<li>USA:  (+1) 213 858 3704 / 754 422 9250</li>
                            <li>PAN: (+507)  314-8009</li>
                            <li>BRA:  (+55) 21 972175598</li>
                    		<li>VZLA: (+58) (0416) 6842850 / (0281) 2810014 EXT17</li>
                            <li><img src="img/wa.png"/></li>
                    	</ul>
                	</td>
                    
				</tr>
                
			</table>

        </div>
        
        <div class="seccion2c">
        
			<p align="center">Ingresa tu E-mail para recibir nuestras Novedades y Promociones</p>
            
            <form method="post" action="index-insert.php">

				<p align="center"><input class="" id="email" size="40%" type="email" name="email" placeholder="Email" required="required"></input></p>
                <p align="center"><button id="enviar2" name="enviar2" type="submit" class="verde">Enviar</button></p>
      
            </form>
            
			<?php /*
				@$email_f=$_POST['email_f'];

				$nombre_origen    = "VERGARA";
				$email_origen     = "info@byvergara.com";
				//$email_copia      = "webmaster@vermilinternacional.com";
				//$email_ocultos_f    = "webmaster@vermilinternacional.com";
				$email_destino_f   = $email_f;

				$asunto_f           = "Gracias por su afiliacion en VERGARA";

				$mensaje_f          = "Puede descargar nuestro catalogo de el siguiente link http://es.byvergara.com/_catalogo.rar";

				$formato_f          = "html";

				@$headers_f  = "From: $nombre_origen <$email_origen> \r\n";
				//$headers_f .= "Return-Path: <$email_origen> \r\n";
				@$headers_f .= "Reply-To: $email_origen \r\n";
				//$headers_f .= "Cc: $email_copia \r\n";
				//$headers_f .= "Bcc: $email_ocultos_f \r\n";
				$headers_f .= "X-Sender: $email_origen \r\n";
				//$headers_f .= "X-Mailer: Enviado con Script de: \r\n";
				$headers_f .= "X-Priority: 3 \r\n";
				$headers_f .= "MIME-Version: 1.0 \r\n";
				$headers_f .= "Content-Transfer-Encoding: 7bit \r\n";
				$headers_f .= "Disposition-Notification-To: \"$nombre_origen\" <$email_origen> \r\n";

				if(@$formato == "html")
				{ 
				$headers_f .= "Content-Type: text/html; charset=iso-8859-1 \r\n";  
				}
				else
				{ 
				$headers_f .= "Content-Type: text/plain; charset=iso-8859-1 \r\n";  
				}

				@mail($email_destino_f, $asunto_f, $mensaje_f, $headers_f);*/
			?>
        
        </div>
        
    </div>

    <div class="seccion3">
    
    	<div class="seccion3a">
    
    		<p>El contenido de www.byvergara.com, así como todas las marcas, logos o símbolos que mostramos, son propiedad intelectual de VERGARA , de sus filiales o de sus licenciantes. 2012 .Todos los derechos reservados. Cualquier uso sin autorización previa está estrictamente prohibido y dará lugar a sanciones penales y civiles. Realizado por el Departamento de Mercadotecnia, Investigación y Desarrollo de VERGARA en los Estados Unidos de Norte América.</p>
    
    	</div>
        
        <div class="seccion3b">
        
        	<p><a href="http://en.byvergara.com">EN&nbsp;<img src="img/b2.png"></a></p>
            
        	<p><a href="http://pt.byvergara.com">PT&nbsp;<img src="img/b3.png"></a></p>
        
        </div>
    
    </div>

</footer>
