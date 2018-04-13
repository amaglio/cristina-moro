<section id="cursos">
 	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-9" >
				<div class="row">
					<div class="col-lg-12" >
						BUSCADOR
					</div>

				</div>
				
					
					<? foreach ($cursos as $row): ?>

						<div class="row">
							<div class="col-lg-4" >
									
								<img class="img-rounded thumbnail" src="<?=base_url()?>assets/img/cursos/<?=$row['foto']?>">
							</div>
							<div class="col-lg-8" >
		
								 <h4><?=$row['nombre']?></h4> 
								<div class="form-group row">
								    <label class="col-sm-2">Duracion</label>
								    <div class="col-sm-3">
								      <?=$row['duracion']?>
								    </div>
								    <label class="col-sm-3">Dia y horario</label>
								    <div class="col-sm-3">
								      <?=$row['dia_horario']?>
								    </div>
								</div>
								<div class="form-group row">
								    
								</div>
								<div class="form-group row">
								    <label class="col-sm-2">Modalidad</label>
								    <div class="col-sm-3">
								      <?=$row['descripcion_modalidad']?>
								    </div>

								    <label class="col-sm-3">Tema</label>
								    <div class="col-sm-3">
								      <?=$row['descripcion_tema']?>
								    </div>
								</div>
							 
								<p> <?=$row['descripcion']?> </p>
							</div> 
						</div>
						
					<? endforeach; ?>
			  
			</div>

			<div class="col-lg-3" >
			  AVALES
			</div>

			 
		</div>

	</div>

</section>