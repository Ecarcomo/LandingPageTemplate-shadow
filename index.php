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
	<title>>Marca Empresa - Emmanuel Carcomo</title>
	<link rel="stylesheet" href="css/estilos.css">

	<script src="https://kit.fontawesome.com/d279f26f0f.js" crossorigin="anonymous"></script>
</head>
<body>
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
					<img id="img1" src="imgs/img1.jpg" width="200" class="border-rad">
					<img id="img2" src="imgs/fondo.jpg" width="200" class="border-rad">
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
		           <a id="btnE" class="btn-llamada green" href="tel:+xxxxxxxxxx"> ---LLAMADA DIRECTA--- </a>
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

		       <form action="form.php" name="f1-basico" method="POST" class="form_contact">
			       	<div class="user_info">
						<label>Nombre:</label>
						<input type="text" name="campo-nombre" placeholder="Su nombre" required>
						<label>Email:</label>
						<input type="email" name="campo-email" placeholder="Email" required>
						<label>Telefono:</label>
						<input type="number" name="campo-telefono" placeholder="Numero telefonico">
						<label>Tipo de Consulta:</label>
						<select name="campo-options">
							<option value="Reparacion"> Reparacion de Pieza</option>
							<option value="Fabricacion"> Fabricacion de Pieza</option>
							<option value="Roscados"> Roscados</option>
							<option value="Otros"> Otros</option>
						</select>
						<br>
						<label>Texto:</label>
						<textarea name="campo-texto" placeholder="Su mensaje aqui"  rows="6" cols="25" required></textarea>
						<input type="submit" name="btn-enviar" value="Enviar">
					</div>
				</form>

	    </section>


		<section id="section-reviews">
			
		</section>
	</content>
	<footer>
		<p style="text-align: center;">Marca Empresa  2020 | Desing by DevAds</p>
	</footer>


	<script type="text/javascript" src="js/horario.js"></script>
</body>
</html>