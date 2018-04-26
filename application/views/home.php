<link href="<?=base_url()?>/assets/css/home_css.css" rel="stylesheet">
 
<section id="home">
	
	<section id="slider">
		<div class="container">
			
			<!-- CARRUSEL / LISTADO  -->
			<div class="row div_row">
				
				<!-- COLUMNA CARRUSEL -->
				<div class="col-lg-8" style="padding-left: 0px" >
				
					<div id="demo" class="carousel slide" data-ride="carousel">

			            <!-- Indicators -->
			            <ul class="carousel-indicators">
							<li data-target ="#demo" data-slide-to="0" class="active"></li>
							<li data-target ="#demo" data-slide-to="1"></li>
							<li data-target ="#demo" data-slide-to="2"></li>
			            </ul>
 
			            <div class="carousel-inner" style="margin-top: 5px;">

		 					<? 	$i = 0; ?>
			            	<?  foreach ($slider_home as $row ): ?>

			            			<div class="carousel-item <? if(!$i){ echo 'active'; $i++; }?> "  >               
					                    <div class="col-lg-12 mx-auto ">
					                    	
					                    	<span class="titulo_slider"> 
					                    		<h3 ><?=$row['titulo']?>  </h3> 
					                    		
					                    	
					                    	<? 	if(isset($row['link'])): ?>
					                    		<a href="<?=$row['link']?>" class="btn btn-primary btn-xs" style="text-shadow:none; font-size: 14px">Ver mas</a>
					                    		 
					                    	<?	endif;	?>

					                    	</span>

					                       	<img class="imagen_carrusel" src="<?=base_url()?>/assets/img/carrusel/<?=$row['foto']?>">
					                    </div>
					              	</div>

			            	<?	endforeach; ?>	
 
			            </div> 
 
			        </div>

				</div>
 				
 				<!-- COLUMNA LISTADO -->
				<div class="col-lg-4" >
					<div class="country">
 
 						<h5 id="titulo_curso"> Nuestros próximos cursos </h5>
	            		<a class="list-control control-height up" href="#" >
							<i class="fa fa-angle-up " style="width: -webkit-fill-available; "></i> 
						</a>
			 
	             		<div class="list">
							
							<div class="cities-list">
 
								<div class="list-group">
 									
									<? foreach ($cursos_home as $row_cursos): 

										$id_curso = $row_cursos['id_curso'];
									?>

										<div class=" row row-striped ">
											<div class="col-3 text-right">
												<span class="badge badge-secondary" style="font-size: 15px">
												<?
													$phpdate = strtotime( $row_cursos['fecha']);  
													echo date( 'd - M', $phpdate );  
												?>
												</span> 
											</div>
											<div class="col-9">
												<span class="text-uppercase titulo_curso">
												 
														<a class="nombre_curso" href='<?=site_url("curso/ver_curso/$id_curso")?>'><?=$row_cursos['nombre']?></a>
												 
												</span>
												<ul class="list-inline">
												    <li class="list-inline-item">
												    	<i class="fa fa-angle-right aria-hidden="true"></i> <?=$row_cursos['dia_horario']?>
												    </li>
												 
												</ul>
												 
											</div>
										</div>


									<? endforeach; ?>

								</div>

							</div>
							
	             		</div>

	             		<a class="list-control control-height down" href="#">
	           					<i class="fa fa-angle-down " style="width: -webkit-fill-available; "></i> 
	           			</a>
	              	</div>
				</div>
			</div>

		</div>		
	</section>

	<!-- Productos -->
	<section id="productos">	
		<div class="container">
			
			<!-- Productos -->
			<div class="row div_row">

				<?  for ($i=0; $i < count($productos) ; $i++): 

					$id_producto = $productos[$i]['id_producto'];
				?>			

					<div class="col-lg-4" >
						<div class="row">
							<div class="col-lg-6" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
							</div>
							<div class="col-lg-6" >
								
								<a class="nombre_producto" href='<?=site_url("producto/ver_producto/$id_producto")?>'>
										<?=$productos[$i]['nombre']?>	
								</a>

								<div class="form-group row">
									<div class="col-sm-12">
								    	<label>Tipo: </label> <?=$productos[$i]['descripcion_tipo_producto']?>
								   </div>
								</div>

								<div class="form-group row">
									<div class="col-sm-12">
								    	<?=$productos[$i]['descripcion']?>
								   </div>
								</div>
							</div>
						</div>  
					</div>

					<?  $i++;

						if( isset($productos[$i]) ): 
							$id_producto = $productos[$i]['id_producto'];
						?>	

							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-6" >
										<a class="nombre_producto" href='<?=site_url("producto/ver_producto/$id_producto")?>'>
											 <?=$productos[$i]['nombre']?> 
										</a>
										<div class="form-group row">
											<div class="col-sm-12">
										    	<label>Tipo: </label> <?=$productos[$i]['descripcion_tipo_producto']?>
										   </div>
										</div> 
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

						if( isset($productos[$i]) ): 
							$id_producto = $productos[$i]['id_producto'];
						?>	
							<div class="col-lg-4" >
								<div class="row">
									<div class="col-lg-6" >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/productos/<?=$productos[$i]['foto']?>">
									</div>
									<div class="col-lg-6" >
										<a class="nombre_producto" href='<?=site_url("producto/ver_producto/$id_producto")?>'>
											 <?=$productos[$i]['nombre']?> 
										</a>
										<div class="form-group row">
											<div class="col-sm-12">
										    	<label>Tipo: </label> <?=$productos[$i]['descripcion_tipo_producto']?>
										   </div>
										</div> 
										<div class="form-group row">
											<div class="col-sm-12">
										    	<?=$productos[$i]['descripcion']?>
										   </div>
										</div>
									</div>
								</div>  
							</div>
 

					<?	endif;	?> 
				
				<? endfor; ?>

				<div class="col-lg-12" style="text-align: right; font-size: 12px" >
					<a href="<?=site_url('producto/index')?>" class="btn btn_home"> <i class="fa fa-plus"></i> Productos </a>
				</div>

			</div>

		</div>

	</section>

	<!-- Servicios -->
	<section id="servicios_spa">

		<div class="container">
			
			<!-- Servicios -->
			<div class="row div_row">
			
				<?  for ($i=0; $i < count($servicios_spa) ; $i++): 

						$id_servicio = $servicios_spa[$i]['id_servicio_spa'];

					?>	
					<div class="col-lg-6" >
						<div class="row">
							<div class="col-lg-4" >
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
							</div>
							<div class="col-lg-8" >
								
								<a class="nombre_servicio" href='<?=site_url("servicio/ver_servicio/$id_servicio")?>'>
									 <?=$servicios_spa[$i]['titulo']?>  
								</a>
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

						if( isset($servicios_spa[$i]) ): 

								$id_servicio = $servicios_spa[$i]['id_servicio_spa'];

							?>	
							<div class="col-lg-6" >
								<div class="row">
									<div class="col-lg-4"  >
										<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/servicios/<?=$servicios_spa[$i]['foto']?>">
									</div>
									<div class="col-lg-8" >
										<a class="nombre_servicio" href='<?=site_url("servicio/ver_servicio/$id_servicio")?>'>
											<?=$servicios_spa[$i]['titulo']?>	
										</a> 
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

				
 
				<? endfor; ?>
					<div class="col-lg-12" style="text-align: right" >
						<a href="<?=site_url('servicio/index')?>" class="btn btn_home"> <i class="fa fa-plus"></i> Servicios </a>
					</div>
			</div>

		</div>

	</section>
	
</section>