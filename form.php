<!-- Hacer formulario por método POST con tecnología HTML y PHP , que envíe a una casilla de correo el texto plano ingresado en el campo "TEXTO"  -->

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
		    

   
    <link rel="shortcut icon" type="image/png" href="imgs/IsoLogo.png"/>
	<title>Marca Empresa - Emmanuel Carcomo</title>
	<link rel="stylesheet" href="css/estilos.css">

	<script src="https://kit.fontawesome.com/d279f26f0f.js" crossorigin="anonymous"></script>
</head>
<body>
			
			<?php
				$mailto="email_to_send@gmail.com";

				$texto= $_POST['campo-texto'];

				$options= $_POST['campo-options'];
				$subjet= "$options";

				$name= $_POST['campo-nombre'];

				$tel=$_POST['campo-telefono'];

				$email=$_POST['campo-email'];


				$ready_headers="From: $name <$email>"."\r\n";
				$ready_headers.= 'MIME-Version: 1.0'."\r\n";
				$ready_headers.= 'Content-type: text/html; charset=iso-8859-1';

				$ready_subjet="$name -Marca Empresa - $subjet";



				$ready_body='<html>
							<head>
							  <title></title>
							</head>
							<body>';

				$ready_body='<h2>Nuevo Contacto:</h2>';
				$ready_body.='<h3>Nombre:</h3>'."$name";
				$ready_body.='<h3>Email:</h3>'."$email";
				$ready_body.='<h3>Telefono:</h3>'.'<a href='."tel:$tel".'>'."$tel".'</a>';
				$ready_body.='<br><h3>Mensaje:</h3>';
				$ready_body.="$texto";
				$ready_body.='<br><center><h4>---Envíado desde Formulario2---</h4></center>';
				$ready_body.='</body></html>';




				mail($mailto,$ready_subjet,$ready_body,$ready_headers);
			?>

	<content>
		<header>
			<!--<h1 id="title"><center>Nombre de empresa</center></h1> -->
			<img src="imgs/logo.png" width="200px">
		</header>
		<hr>
		<br>
		<section class="info_wrap">
				<div class="sub-wrap-text">
					<p>Curabitur at nulla luctus arcu semper accumsan. Donec malesuada rhoncus eros eget iaculis. Nullam nibh ligula, consectetur vitae enim eu, tincidunt tristique eros. Etiam ut dolor pellentesque, hendrerit justo nec, ullamcorper libero. Nullam facilisis nibh congue erat molestie consectetur ac quis augue. Nunc at lorem dapibus, bibendum elit eget, euismod ipsum. Phasellus blandit massa sit amet lacus scelerisque, eget imperdiet nisl volutpat. Nam nec neque augue. Nullam pretium erat magna, sed sagittis nisi lacinia id.</p>
					<br>
					<u><h4>Nuestros servicios:</h4></u>
					<ul>
						<li>Servicio 1</li>
						<li>Servicio 2</li>
						<li>Servicio 3</li>
					</ul>
				</div>
				<div class="sub-wrap-imgs">
					<img id="img1" src="/imgs/img1.jpg" width="200" class="border-rad">
					<img id="img2" src="/imgs/fondo.jpg" width="200" class="border-rad">
				</div>
		</section>


		 <section class="call_wrap">
		        <section class="call_info">
		            <u><h4>Horarios de atencion:</h4></u>
					<ul>
						<li>De Lun a Vier -> 9:30 a 18:30hs</li>
						<li>Sabados -> 9:30 a 12:30hs</li>
					</ul>
		        </section>

		      	<section class="call_action">
		           <a id="btnE" class="btn-llamada green" href="tel:+54911xxxxxxxx"> ---LLAMADA DIRECTA--- </a>
					<a id="btnD" class="btn-llamada red"  href="#" disabled> ---Temporalmente cerrado--- </a>
		      	 </section>

	    </section>


		 <section class="form_wrap">
		        <section class="cantact_info">
		            <section class="info_title">
		                <span class="far fa-id-card"></span>
		                <h2>INFORMACION<br>DE CONTACTO</h2>
		            </section>
		            <section class="info_items">
		                <!--<p><span class="far fa-envelope"></span> info.contact@gmail.com</p>-->
		                <p><span class="fas fa-phone-square-alt"></span>+54 11 XXXX XXXX</p>
		            </section>
		        </section>
		        <div class="gracias">
		        	<h2>Gracias Por Comunicarte! Nos Contactaremos a la brevedad</h2>
		        </div>
	    </section>


		<section id="section-reviews">
			
		</section>
	</content>
	<footer>
		<p style="text-align: center;">Marca Empresa 2020 | Desing by DevAds</p>
	</footer>

	<script type="text/javascript" src="js/horario.js"></script>
</body>
</html>