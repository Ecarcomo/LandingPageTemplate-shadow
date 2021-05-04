<!DOCTYPE html>
<html>
<?php include("head.php"); ?>
<body>
	<content>
		<header>
			<img src="imgs/logo.png" height="80px">
			<h2>Soluciones Informáticas</h2>
		</header>

		<h2 id="offert">20% OFF Docentes</h2>

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
			<div id="call-warp" >
		        <section class="call_info">
		        	<br>
		            <u><h4>Contacto vía Whatsapp</h4></u>
		            <br>
					<ul>
						<li>Servicio Técnico de PC a Domicilio ó Remoto</li>
						<!--<li style="font-weight: 600;color:#04040c">Técnico Emmanuel C.</li>-->
						<li style="text-align:center;font-weight: 600;color:#04040c">Equipo VIXION S.I.</li>
					</ul>
					<br>
		        </section>

		      	<section class="call_action">
		            <a style="font-weight: 600;color:#fff" id="btnE" class="btn-llamada green" href="https://wa.me/5491136993373"><i class="fa fa-whatsapp"></i> 11-3699-3373 </a>
		            <p style="font-size:13px;">E-mail: <a href="mailto:vixionsolucionesinformaticas@gmail.com">vixionsolucionesinformaticas@gmail.com</a></p>
					<!--<a id="btnD" class="btn-llamada red"  href="#" disabled> ---Cerrado Ahora--- </a>-->
		      	 </section>
			</div>


								<!--Contact Form to email>-->

			<form action="gracias.php" method="POST" class="form_contact">
				<div class="user_info">
						<label>Nombre: <p>requerido</p></label>
						<input type="text" name="campo-nombre" placeholder="Su nombre" required>
						<label>Email: <p>requerido</p></label>
						<input type="email" name="campo-email" placeholder="Email" required>
						<label>Telefono:</label>
						<input type="number" name="campo-telefono" placeholder="Numero telefonico">
						<label>Tipo de cliente: <p>requerido</p></label>
						<div id="type">
							<div><label for="choice-1">Particular</label><input type="radio" name="campo-tipo-cliente" value="Particular" id="choice-1" checked></div>
							<div><label for="choice-1">Profesional</label><input type="radio" name="campo-tipo-cliente" value="Profesional" id="choice-1"></div>
							<div><label for="choice-1">Pyme/Empresa</label><input type="radio" name="campo-tipo-cliente" value="Pyme/Empresa" id="choice-1"></div>
						</div>
						<label>Tipo de Consulta: <p>requerido</p></label>
						<select name="campo-options" required>
							<option value="Optimizacion/Virus">Optimizacion/Eliminacion Virus</option>
							<option value="Bkp/Inst">BackUps ,Instalacion de Software</option>
							<option value="Inst-SO">Instalacion Sistema Operativo</option>
							<option value="Reparacion">Reparacion de PC</option>
							<option value="Limpieza">Limpieza de PC</option>
							<option value="Armado/Mod-PC">Armado/Modificacion de PC</option>
							<option value="Wifi">Redes Wifi</option>
							<option value="Server">Armado de Server</option>
							<option value="Varios">Varios</option>
							<option value="Otro">Otro</option>
						</select>
						<br>
						<label>Texto: <p>requerido</p></label>
						<textarea name="campo-texto" placeholder="Describa más detalladamente su consulta/inconveniente para un presupuesto aproximado"  rows="6" cols="25" required></textarea>
						<input type="submit" name="btn-enviar" value="Enviar">
					</div>
			</form>


		<div id="Review-warp" class="padding1" style="display: none">
			<h1>texto</h1>
		</div>
	</content>
	<footer>
		<p style="text-align: center;">Vixion Soluciones Informaticas S.A.	2020 | Desing by <a href="https://devads.tech">DevAds</a></p>
	</footer>

	<!--Float Whatsapp Button -->
	<a href="https://api.whatsapp.com/send?phone=54911369933736&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20" class="float" target="_blank">
	  <i class="fa fa-whatsapp my-float"></i>
	</a>
	<!--<script type="text/javascript" src="js/horario.js"></script>-->
</body>
</html>