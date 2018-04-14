<section id="cursos">
 	
	<div class="container">
		<div class="row">
			
			<div class="col-lg-10" >

				<div class="row div_buscador"  >
					<div class="col-lg-12"   >

						<form id="form_buscar_cursos" name="form_buscar_cursos" class="form-inline" method="post" action="<?=site_url('curso/buscar_cursos')?>">
							<div class="form-group col-lg-5" >
								<label for="id_tema" class="col-lg-2">Tema</label>
								<select class="custom-select col-lg-8 phone-group" id="id_tema" name="id_tema">

									<option selected value="">Elegir...</option>
									<? foreach ($cursos_tema as $row_tema): ?>
									    
									    <option value="<?=$row_tema['id_tema']?>"><?=$row_tema['descripcion']?></option> 

									<?	endforeach; ?>
								</select>
							</div>
							<div class="form-group col-lg-5">
								<label for="id_modalidad" class="col-lg-4">Modalidad</label>
								<select class="custom-select col-lg-8 phone-group" id="id_modalidad" name="id_modalidad">

									<option selected value="">Elegir...</option>
									<? foreach ($cursos_modalidad as $row_modalidad): ?>
									    
									    <option value="<?=$row_modalidad['id_modalidad']?>"><?=$row_modalidad['descripcion']?></option> 

									<?	endforeach; ?>
								</select>
							</div>
							<div class="form-group col-lg-2">
								<button type="submit" class="btn btn-primary my-1">Buscar</button>
							</div>
						</form>

					</div>

				</div>
				
					
					<? foreach ($cursos as $row): ?>

						<div class="row div_row" >
							<div class="col-lg-4" >
									
								<img class="img-rounded img-thumbnail thumbnail" src="<?=base_url()?>assets/img/cursos/<?=$row['foto']?>">
							</div>
							<div class="col-lg-8" >
		
								<h5><?=$row['nombre']?></h5> 
								<div class="form-group row">
								    <label class="col-sm-2">Duracion</label>
								    <div class="col-sm-3">
								      <?=$row['duracion']?>
								    </div>
								    <label class="col-sm-3">Dia y horario</label>
								    <div class="col-sm-4">
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

			<div class="col-lg-2" >
			  AVALES
			</div>

			 
		</div>

	</div>

</section>