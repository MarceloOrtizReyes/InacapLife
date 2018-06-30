<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  	<div class="w3-row">
  		<div class="w3-col m9 w3-right" style="margin-top:-30%">

		  	<div class="w3-row">
		  		<div class="w3-container w3-col l4 m4 s4 w3-center">
		  			
		  		</div>

		  		<div class="w3-col l4 m4 s4">
		  			<div class="w3-row">
		  				<div class="w3-half">
		  					<label><b>Organizar Por:</b></label>
							<select class="w3-select">
								<option value="0">--Seleccionar Costo--</option>
								<option value="1">Mayor Costo</option>
								<option value="2">Menor Costo</option>
							</select>
		  				</div>
		  				<div class="w3-half">
		  					<label><b>Organizar Por:</b></label>
							<select class="w3-select">
								<option value="0">--Seleccionar Costo--</option>
								<option value="1">Mayor Costo</option>
								<option value="2">Menor Costo</option>
							</select>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="w3-container w3-col l4 m4 s4 w3-center">
		  			
		  		</div>
		  	</div>
		  	<style type="text/css">
		  		.descripcionBeneficio{
		  			width: 150px;
		  			height: 150px;
		  		}
		  	</style>

		  	<div class="w3-container w3-row w3-margin-top">
		  		
		  		<div class = 'w3-col l3 m3 s3'>
						<h2>Hospedaje</h2>
						<hr>
			  		<div class = 'w3-container w3-row w3-margin-top' >
						<div class = 'w3-col l8 m8 s8'>
							<fieldset class = 'descripcionBeneficio'></fieldset> 				
						 </div>
					</div>
				</div>

		  		<div class = 'w3-col l3 m3 s3'>
						<h2>Comestible</h2>
						<hr>
					<div class = 'w3-container w3-row w3-margin-top' >
						<div class = 'w3-col l8 m8 s8'>		
							<fieldset class = 'descripcionBeneficio'></fieldset> 				
						</div>
					</div>
				</div>
		  	
		  		<div class = 'w3-col l3 m3 s3' >
						<h2>Articulo</h2>
						<hr>
					<div class = 'w3-container w3-row w3-margin-top' >
						 <div class = 'w3-col l8 m8 s8'>		
						  	<fieldset class = 'descripcionBeneficio'></fieldset> 				
						  </div>
					</div>
				</div>
		  		
		  		<div class = 'w3-col l3 m3 s3' >
						<h2>Impresiones</h2>
						<hr>
					<div class = 'w3-container w3-row w3-margin-top' >
						 <div class = 'w3-col l8 m8 s8'>		
						  	<fieldset class = 'descripcionBeneficio'></fieldset> 				
						  </div>
					</div>
				</div>
		  					
		  	</div>
			<!-- The Modal -->
			 <div id="id01" class="w3-modal">
			    <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

			      <div class="w3-center"><br>
			        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
			      </div>

			      <form class="w3-container" method="post" action="<?=site_url('Administrador/ingresarBeneficio');?>">
			        <div class="w3-section">
		        		<h2>Añadir Beneficio</h2>
			          <div class="row">
			          	<div class="w3-col l6 m6 s6">
			          		<label>Fecha inicio</label>
			          		<input type="date" name="beneficio[ben_feInicio]" required>
			          	</div>
			          	<div class="w3-col l6 m6 s6">
			          		<label>Fecha termino</label>
			          		<input type="date" name="beneficio[ben_feTermino]" required>
			          	</div>
			          </div>
			          <div class="w3-row">
			          	<div class="w3-col l6 m6 s6">
			          		<label><b>Tipo Beneficio</b></label>
					          <select class="w3-input w3-border w3-margin-bottom" name="beneficio[ben_tipo]" required>
					          	<option value="0" selected disabled>- Seleccione tipo -</option>
					          	<option value="1">- Hospedaje -</option>
					          	<option value="2">- Comestible -</option>
					          	<option value="3">- Articulo -</option>
					          	<option value="4">- Impresiones -</option>					          	
					          </select>	
			          	</div>
			          	<div class="w3-col l6 m6 s6">
			          		<label><b>Costo ICoins</b></label>
			          		<input class="w3-input w3-border" type="number" placeholder="000000" name="beneficio[ben_valor]" required>
			          	</div>
			          	<div class="w3-col l12 m12 s12">
		          			<label><b>Descripción</b></label>
          					<textarea name="beneficio[ben_descripcion]" style="width: 100%; height: 100px"></textarea>
						</div>
			          </div>
			          <div class="row">
			          	<div class="w3-col l12 m12 s12">
			          		<label><b>Sede</b></label>
					          <select class="w3-input w3-border w3-margin-bottom" name="beneficio[ben_sed_id]" required>
					          	<option value="0" selected disabled>- Seleccione sede -</option>
					          	<option value="1">- Renca -</option>
					          	<option value="2">- Valparaiso -</option>					          	
					          </select>
			          	</div>
			          </div>
			          <div class="w3-container">

			          	<div class="w3-row">
			          	<button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Añadir Beneficio</button>

			          	<button class="w3-button w3-padding-large w3-red w3-col m12" onclick="document.getElementById('id01').style.display='none'">Cancelar</button>
			      		</div>


			          </div>

			        </div>
			      </form>

			    </div>
			  </div>
		</div>
  	</div>
</div>
