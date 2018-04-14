		<footer>
 
				<div id="footer">
				       <section class="index-link">
						    <div class="container">
						        <div class="row">
						            <div class="col-md-3">
						                <div class="link-area">
						                    <h3>MORO SPA</h3>
						                    <P>Building Consensus among your Senior leaders to leverage your digital strengths and work on gaps which are hindering your growth.</P>
						                    
						                </div>
						            </div>
						            <div class="col-md-3">
						                <div class="link-area">
						                    <h3>PRODUCT</h3>
						                    <ul>
						                    <li><a href="#"> SERVICIOS SPA </a></li>
						                    <li><a href="#"> PRODUCTOS </a></li>
						                    <li><a href="#"> CURSOS </a></li>
						                    <li><a href="#"> HISTORIA  </a></li>
						                    <li><a href="#"> CONTACTO </a></li>
						                    </ul>
						                </div>
						            </div>
						            <div class="col-md-3">
						                <div class="link-area">
						                    <h3>Sede microcentro</h3>
						                    <ul>
							                    <li><a href="#"> San Martín 522 Piso 3° 5. Capital Federal </a></li>
							                    <li><a href="#"> (5411) 4393.1090/1099</a></li>
							                    <li><a href="#"> EMAIL</a></li>
						                    </ul>
						                </div>
						            </div>
						            <div class="col-md-3">
						               <div class="link-area">
						                    <h3>Sede zona sur- Bernal</h3>
						                    <ul>
							                    <li><a href="#"> 9 de Julio 146 “A” </a></li>
							                    <li><a href="#">  (5411) 4252.4630/4251.6533 </a></li>
							                    <li><a href="#"> EMAIL</a></li>
						                    </ul>
						                </div>
						            </div>
						        </div>
						    </div>
						</section>
				</div>
	 

		</footer>
	</body>
	
	 <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> 

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="<?=base_url()?>/assets/js/scrolling-nav.js"></script>

    <!-- Jquery validate -->
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js" ></script>
  	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/additional-methods.min.js" ></script>

   	<script>
            var q = jQuery.noConflict();
    </script>



  	<script language="javascript" type="text/javascript" >

      
		q(function(){

			q("#cargando").hide();   
			});

		q(function(){

		      q('#form_buscar_cursos').validate({

		          rules :{

						id_tema : {
						  	require_from_group: [1, ".phone-group"]
						},
						id_modalidad : {
						  	require_from_group: [1, ".phone-group"]
						}
		          },
		          messages : {

	                  	id_tema : {
	                      require_from_group: "Debe seleccionar al menos un filtro"
	                  	},
	                  	id_modalidad : {
	                      require_from_group: "Debe seleccionar al menos un filtro"
	                  	}, 
		          } 
		      });    
		}); 

   

    </script>

</html>