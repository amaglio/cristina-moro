
<style type="text/css">
.imagen_carrusel{ 
   height:350px; 
   background-size:cover;
   background-position: center center;
   width: inherit;
}

.row-striped:nth-of-type(odd){
  background-color: #efefef;
  border-left: 4px #000000 solid;
}

.row-striped:nth-of-type(even){
  background-color: #ffffff;
  border-left: 4px #efefef solid;
}

.row-striped {
    padding: 5px 0;

}

.list-inline{
	margin-bottom:0px;
}

</style>
<section id="home">
	
		
	<section id="slider">
		<div class="container">
		
			<div class="row div_row">
				
				<div class="col-lg-8" >
				
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
			                       <img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/aaaa.jpg">
			                    </div>
			              </div>
			              <div class="carousel-item">
			                 	<div class="col-lg-12 mx-auto ">
			                       <img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/spa-toulouse-centre.jpg">
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
				<div class="col-lg-4" >
					<div class="row row-striped">
						<div class="col-2 text-right">
							<span class="badge badge-secondary" style="font-size: 15px">23</span> 
						</div>
						<div class="col-10">
							<h6 class="text-uppercase"><strong>Ice Cream Social</strong></h6>
							<ul class="list-inline">
							    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
								<li class="list-inline-item"><i class="fa fa-clock-o" aria-hidden="true"></i> 12:30 PM - 2:00 PM 
							</ul>
						 
						</div>
					</div>

					<div class="row row-striped">
						<div class="col-2 text-right">
							<span class="badge badge-secondary" style="font-size: 15px">23</span> 
						</div>
						<div class="col-10">
							<h6 class="text-uppercase"><strong>Ice Cream Social</strong></h6>
							<ul class="list-inline">
							    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
							 
							</ul>
							 
						</div>
					</div>

					<div class="row row-striped">
						<div class="col-2 text-right">
							<span class="badge badge-secondary" style="font-size: 15px">23</span> 
						</div>
						<div class="col-10">
							<h6 class="text-uppercase"><strong>Ice Cream Social</strong></h6>
							<ul class="list-inline">
							    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
								 
							</ul>
							 
						</div>
					</div>

					<div class="row row-striped">
						<div class="col-2 text-right">
							<span class="badge badge-secondary" style="font-size: 15px">23</span> 
						</div>
						<div class="col-10">
							<h6 class="text-uppercase"><strong>Ice Cream Social</strong></h6>
							<ul class="list-inline">
							    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
								 
							</ul>
							 
						</div>
					</div>

					<div class="row row-striped">
						<div class="col-2 text-right">
							<span class="badge badge-secondary" style="font-size: 15px">23</span> 
						</div>
						<div class="col-10">
							<h6 class="text-uppercase"><strong>Ice Cream Social</strong></h6>
							<ul class="list-inline">
							    <li class="list-inline-item"><i class="fa fa-calendar-o" aria-hidden="true"></i> Monday</li>
								 
							</ul>
							 
						</div>
					</div>


				</div>

			</div>

		</div>
	</section>

	<section id="productos">	
		<div class="container">
			<?  for ($i=0; $i < count($productos) ; $i++): ?>

				<div class="row div_row">

					<div class="col-lg-4" >
						<div class="row">
							<div class="col-lg-6" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
							</div>
							<div class="col-lg-5" >
								<h5><?=$productos[$i]['nombre']?></h5> 
								 
								<div class="form-group row">
									<div class="col-sm-12">
								    	<?=$productos[$i]['descripcion']?>
								   </div>
								</div>
							</div>
						</div>  
					</div>

					<?  $i++;

						if( isset($productos[$i]) ): ?>

							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-5" >
										<h5><?=$productos[$i]['nombre']?></h5> 
										 
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$productos[$i]['descripcion']?>
										   </div>
										</div>
									</div>
								</div>    
							</div>
 

					<?	endif;	?>

					<?  $i++;

						if( isset($productos[$i]) ): ?>

							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-5" >
										<h5><?=$productos[$i]['nombre']?></h5> 
										 
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$productos[$i]['descripcion']?>
										   </div>
										</div>
									</div>
								</div>  
							</div>
 

					<?	endif;	?>

					 


				</div>

			<? endfor; ?>

		</div>

	</section>

	<section id="servicios_spa">

		<div class="container">

			<?  for ($i=0; $i < count($servicios_spa) ; $i++): ?>

				<div class="row div_row">

					<div class="col-lg-6" >
						<div class="row">
							<div class="col-lg-4" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
							</div>
							<div class="col-lg-8" >
								<h5><?=$servicios_spa[$i]['titulo']?></h5> 
								<div class="form-group row">
								    <label class="col-sm-2">Tipo</label>
								    <div class="col-sm-3">
								     <?=$servicios_spa[$i]['descripcion_tipo_servicio']?>
								    </div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
								    	<?=$servicios_spa[$i]['descripcion']?>
								   </div>
								</div>
							</div>
						</div>  
					</div>

					<?   ?>

					<?  $i++;

						if( isset($servicios_spa[$i]) ): ?>

							<div class="col-lg-6" >
								<div class="row">
									<div class="col-lg-4"  >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
									</div>
									<div class="col-lg-8" >
										<h5><?=$servicios_spa[$i]['titulo']?></h5> 
										<div class="form-group row">
										    <label class="col-sm-2">Tipo</label>
										    <div class="col-sm-8">
										     <?=$servicios_spa[$i]['descripcion_tipo_servicio']?>
										    </div>
										</div>
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$servicios_spa[$i]['descripcion']?>
										   </div>
										</div>

									</div>
								</div>  
							</div> 

						<?	endif;	?>

				</div>
 
			<? endfor; ?>

		</div>

	</section>
	
</section>