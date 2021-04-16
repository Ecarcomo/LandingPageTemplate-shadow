<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
	<!-- Event snippet for Envío de formulario conversion page -->
	<script>
	  gtag('event', 'conversion', {'send_to': 'AW-397889652/wU4rCILbif4BEPSg3b0B'});
	</script>
	

	<?php
		$mailto="vixionsolucionesinformaticas@gmail.com";

		$texto= $_POST['campo-texto'];

		$options= $_POST['campo-options'];

		$type= $_POST['campo-tipo-cliente'];

		$name= $_POST['campo-nombre'];

		$tel=$_POST['campo-telefono'];

		$email=$_POST['campo-email'];


		$ready_headers="From: $name <$email>"."\r\n";
		$ready_headers.= 'MIME-Version: 1.0'."\r\n";
		$ready_headers.= 'Content-type: text/html; charset=iso-8859-1';

		$subjet= "$options - $name [$type]";



		$ready_body='<html>
					<head>
					</head>
					<body>';

		$ready_body='<h2>Nuevo Contacto:</h2>';
		$ready_body.='<h3>Nombre:</h3>'."$name";
		$ready_body.='<h3>Email:</h3>'."$email";
		$ready_body.='<h3>Telefono:</h3>'.'<a href='."tel:$tel".'>'."$tel".'</a>';
		$ready_body.='<br><h3>Mensaje:</h3>';
		$ready_body.="$texto";
		$ready_body.='<br><center><h4>---Envíado desde Mi página---</h4></center>';
		$ready_body.='</body></html>';




		mail($mailto,$subjet,$ready_body,$ready_headers);
	?>



	<content>
		<header>
			<img src="imgs/logo.png" height="80px">
			<h2>Soluciones Informáticas</h2>
		</header>
		<div id="Info-warp" class="padding1">
			<p>Servicio tecnico a domicilio de equipos informáticos de particulares y empresas.</p>
			<br>
			<u><h4>Servicios más destacados:</h4></u>
			<ul>
				<li>Optimizacion y eliminacion de malware</li>
				<li>BackUps, Formateo e instalación de SO's, antivirus y software's</li>
				<li>Instalacion de paquete Office</li>
				<li>Limpieza profunda de PC</li>
				<li>Reparaciones de PC</li>
				<li>Armado de PC's y cambios de Hardware</li>
			</ul>
			<br>
			<p><strong>Tambien se ofrece servicios más complejos como armado de redes informáticas ,servidores y puntos de acceso.</strong></p>
		</div>
		<div id="Image-warp">
			<img src="imgs/img1.jpg" height="150px">
			<img src="imgs/img2.jpg" height="150px">
			<img src="imgs/img3.jpg" height="150px">
		</div>


					<!--Contact Form to wpp and cellphone number>-->
			<div id="call-warp">
		        <section class="call_info">
		            <u><h4>Horarios de atencion:</h4></u>
		            <br>
					<ul>
						<li>De Lun a Vier -> 9 a 13 hs</li>
						<li style="font-weight: 600;color:#33f">Técnico Emmanuel C.</li>
					</ul>
					</ul>
					<br>
		        </section>

		      	<section class="call_action">
		           <a style="font-weight: 600;color:#fff" id="btnE" class="btn-llamada green" href="https://wa.me/5491135737686"><i class="fa fa-whatsapp"></i> 11-3573-7686 </a>
					<!--<a id="btnD" class="btn-llamada red"  href="#" disabled> ---Cerrado Ahora--- </a>-->
		      	 </section>
			</div>
				<!--Confirm Send email>-->
			<div class="gracias">
	        	<h2>Gracias Por Comunicarte! Nos Contactaremos a la brevedad</h2>
	        </div>
	


		<div id="Review-warp" class="padding1" style="display: none">
			<h1>texto</h1>
		</div>
	</content>
	<footer>
		<p style="text-align: center;">Vixion Soluciones Informaticas S.A.	2020 | Desing by <a href="https://devads.tech">DevAds</a></p>
	</footer>

	<!--Float Whatsapp Button -->
	<a href="https://api.whatsapp.com/send?phone=5491135737686&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20" class="float" target="_blank">
	  <i class="fa fa-whatsapp my-float"></i>
	</a>
	<!--<script type="text/javascript" src="js/horario.js"></script>-->
</body>
</html>