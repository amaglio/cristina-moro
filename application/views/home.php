
<style type="text/css">
.imagen_carrusel{ 
   height:300px; 
   background-size:cover;
   background-position: center center;
}
</style>
<section id="home">
	
		
	<section id="slider">
		<div class="container">
			<div class="row">
				<div class="col-lg-8" style="background-color: red">

				 	<div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">               
                    <div class="col-lg-12 mx-auto ">
                       <img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/foto1.jpeg">
                    </div>
              </div>
              <div class="carousel-item">
                 	<div class="col-lg-12 mx-auto ">
                       <img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/foto2.jpeg">
                    </div>
              </div>
              <div class="carousel-item">
               		<div class="col-lg-12 mx-auto ">
                       <img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/foto3.jpeg">
                    </div>
              </div>
            </div>

            <!-- Left and right controls
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span class="carousel-control-next-icon"></span>
            </a> -->

          </div>

				</div>
				<div class="col-lg-4" style="background-color: green">
				calendario
				</div>

			</div>

		</div>
	</section>

	<section id="productos">	
		<div class="container">
			<div class="row">
				<div class="col-lg-3" style="background-color: yellow">
					productos
				</div>
				<div class="col-lg-3" style="background-color: yellow">
					productos
				</div>
				<div class="col-lg-3" style="background-color: yellow">
					productos
				</div>
				<div class="col-lg-3" style="background-color: yellow">
					productos
				</div>
			 
			</div>

		</div>

	</section>

	<section id="servicios_spa">

		<div class="container">
			<div class="row">
				<div class="col-lg-3" style="background-color: orange">
					servicio
				</div>
				<div class="col-lg-3" style="background-color: orange">
					servicio
				</div>
				<div class="col-lg-3" style="background-color: orange">
					servicio
				</div>
				<div class="col-lg-3" style="background-color: orange">
					servicio
				</div>
			 
			</div>

		</div>

	</section>
	
</section>