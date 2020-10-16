<?php
	include("header.php");
?>

<div class="presentacion">
		<div class="row">
			<div class="col-12 col-md-6">
				<section id="carrusel">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="img/carrusel1.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/carrusel2.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/carrusel3.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/carrusel4.jpg" class="d-block w-100" alt="...">
							</div>
							<div class="carousel-item">
								<img src="img/carrusel5.jpg" class="d-block w-100" alt="...">
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
				</section>
			</div>
			<div class="col-12 col-md-6 align-self-center text-center context-center">
				<h1>En SERFIMED </h1>

				<p>somos la empresa ecuatoriana líder en soluciones integrales de protección radiológica; prestamos servicios de asesoría especializada en aplicaciones de las radiaciones ionizantes en el ámbito hospitalario e industrial.</p>
			</div>
		</div>
	</div>

	<div class="portafolio">
		<div class="container-fluid">
			<div class="context-center">
				<h1>Nuestros Servicios</h1>
			</div>
		</div>
		<div class="row plantilla-car">
			<div class="col col-sm-6 col-md-4 portafolio-contenedor">
				<div class="card" style="width: 18rem;">
					<img src="img/asesoria.png" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="servicios.html"><h5 class="card-title">Asesoría y Licenciamiento</h5></a>
					</div>
				</div>
			</div>
			<div class="col col-sm-6 col-md-4 portafolio-contenedor">
				<div class="card" style="width: 18rem;">
					<img src="img/evaluacion.png" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="servicios.html"><h5 class="card-title">Evaluación de blindaje</h5></a>
					</div>
				</div>
			</div>
			<div class="col col-sm-6 col-md-4 portafolio-contenedor">
				<div class="card" style="width: 18rem;">
					<img src="img/calculo_blindaje.png" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="servicios.html"><h5 class="card-title">Cálculo de blindaje</h5></a>
					</div>
				</div>
			</div>			
		</div>
	
		<div class="row">
			<div class="col col-sm-6 col-md-4 portafolio-contenedor">
				<div class="card" style="width: 18rem;">
					<img src="img/licenciamiento.png" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="catalogo.html"><h5 class="card-title">Mandiles plomados</h5></a>
					</div>
				</div>
			</div>
			<div class="col col-sm-6 col-md-4 portafolio-contenedor">
				<div class="card" style="width: 18rem;">
					<img src="img/programaPR.png" class="card-img-top" alt="...">
					<div class="card-body">
						<a href="servicios.html"><h5 class="card-title">Programa de protección radiológica</h5></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section id="servicios">
		<div class="container">
			<div class="titulo">
				<h2 style="color: rgb(130,131,128);">Conoce Algunos</h2>
				<h1>de nuestros clientes</h1>
			</div>
			<div class="empresasCliente">
				<div class="row">
					<div class="col col-sm-6 col-md-4">
						<div class="card" style="width: 10rem;">
							<img src="img/cliente1.jpeg" class="card-img-top d-block w-0" alt="...">
						</div>
					</div>
					<div class="col col-sm-6 col-md-4">
						<div class="card" style="width: 10rem;">
							<img src="img/cliente2.jpeg" class="card-img-top d-block w-0" alt="...">
						</div>
					</div>
					<div class="col col-sm-6 col-md-4">
						<div class="card" style="width: 10rem;">
							<img src="img/cliente3.jpeg" class="card-img-top d-block w-0" alt="...">
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>

<?php
	include("footer.php");
?>