<?php
	include("header.php");
?>

<div class="bloque-presentacion">
		<div class="row">
			<div class="col-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="img/contacto1.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="img/contacto2.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="img/contacto3.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="img/contacto4.jpg" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="img/contacto5.jpg" class="d-block w-100" alt="...">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>	
			</div>
		</div>
	</div>

	<div class="contacto-info">
		<div class="container">
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>Ubicación</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<p>
						Guayaquil provincia del Guayas
					</p>
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>Horario de Trabajo</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<p>
						Lunes a Sábado de 8:00 a 17:00
					</p>
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>Teléfonos</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<p>
						+593 998250610 / +593 963021078
					</p>
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>whatsapp</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					+593 963021078
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>Correo electrónico</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<p>
						<a href="#">gerencia@serfimed.com / asesor@serfimed.com</a>
					</p>
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>instagram</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<a href="https://www.instagram.com/serfimed.ec/" target="_blank">serfimed.ec</a>
				</div>
			</div>
			<div class="row" >
				<div class="col-12 col-sm-6">
					<h2><strong>twitter</strong></h2>
				</div>
				<div class="col-12 col-sm-6">
					<a href="https://twitter.com/SERFIMED_EC" target="_blank">serfimed_ec</a>
				</div>
			</div>		
		</div>
	</div>

	<div class="contenedor-formulario">
		<div class="formulario">
			<form method="" name="form1">
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" id="nombre" class="form-control">
				</div>
				<div class="form-group">
					<label for="eamil">Email</label>
					<input type="text" for="eamil" class="form-control" name="email">
				</div>
				<div class="form-group">
					<label for="asunto">Asunto</label>
					<input type="text" for="asunto" class="form-control">
				</div>
				<div class="form-group">
					<label for="exampleFormControlTextarea1">Mensaje</label>
					<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" placeholder="Lo sentido esté apartado está en construcción"></textarea>
				</div>
				<button type="button" class="btn btn-primary btn-lg" name="enviar">Enviar</button>
			</form>
		</div>
	</div>

	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d7971.201758770572!2d-80.37725164539333!3d-2.6346555184994935!3m2!1i1024!2i768!4f13.1!4m8!3e2!4m0!4m5!1s0x90326c24d45c40df%3A0x13610e1c73cf3f52!2sGeneral%20Villamil%20(Playas)!3m2!1d-2.6347489!2d-80.37692129999999!5e0!3m2!1ses!2sve!4v1602450159785!5m2!1ses!2sve"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>

<?php
	include("footer.php");
?>
