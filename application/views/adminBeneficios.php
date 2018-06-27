<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;">    
  <!-- The Grid -->
  	<div class="w3-row">
  		<div class="w3-col m9 w3-right" style="margin-top:-30%">

		  	<div class="w3-row">
		  		<div class="w3-container w3-col l4 m4 s4 w3-center">
		  			<button onclick="document.getElementById('id01').style.display='block'"
					class="w3-btn w3-ripple w3-green w3-margin-left w3-large">Añadir</button>
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
		  			<a class="w3-button w3-large w3-circle w3-xlarge w3-white w3-hover-green w3-border" style="z-index:0"><i class="fa fa-trash"></i></a>
		  		</div>
		  	</div>

		  	

		  	<div class="w3-container w3-row w3-margin-top">
		  		<div class="w3-col l3 m3 s3">
		  			<h2>Comestibles</h2>
		  			<hr>
		  			<div class="w3-container w3-row w3-margin-top">
		  				<div class="w3-col l4 m4 s4">
		  					
		  				</div>
		  				<div class="w3-col l8 m8 s8 ">
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>	    				
		  				</div>
		  			</div>
		  		</div>
		  		<div class="w3-col l3 m3 s3">
		  			<h2>Hospedaje</h2>
		  			<hr>
		  			<div class="w3-container w3-row w3-margin-top">
		  				
		  				<div class="w3-col l8 m8 s8 ">
		  					<i class="fas fa-bed w3-xxlarge">Hooola</i>
		  					<i class="fas fa-bed w3-xxlarge">Hooola</i>
		  					<i class="fas fa-bed w3-xxlarge">Hooola</i>
		  					<i class="fas fa-bed w3-xxlarge">Hooola</i>	  				
		  				</div>
		  			</div>
		  		</div>
		  		<div class="w3-col l3 m3 s3">
		  			<h2>Articulos</h2>
		  			<hr>
		  			<div class="w3-container w3-row w3-margin-top">
		  				<div class="w3-col l4 m4 s4">
		  					
		  				</div>
		  				<div class="w3-col l8 m8 s8 ">
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>	  		  				
		  				</div>
		  			</div>
		  		</div>
		  		<div class="w3-col l3 m3 s3">
		  			<h2>Impresiones</h2>
		  			<hr>
		  			<div class="w3-container w3-row w3-margin-top">
		  				<div class="w3-col l4 m4 s4">
		  					
		  				</div>
		  				<div class="w3-col l8 m8 s8 ">
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>
		  					<i class="fas fa-file w3-xxlarge">Hooola</i>	    				
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

			      <form class="w3-container" action="/action_page.php">
			        <div class="w3-section">
		        		<h2>Añadir Beneficio</h2>
			          <label><b>Nombre</b></label>
			          <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Ingrese nombre" name="usrname" required>

			          <div class="w3-row">
			          	<div class="w3-col l6 m6 s6">
			          		<label><b>Tipo Beneficio</b></label>
					          <select class="w3-input w3-border w3-margin-bottom" name="psw" required>
					          	<option value="0" selected disabled>- Seleccione tipo -</option>
					          	<option value="1">- Hospedaje -</option>
					          	<option value="2">- Comestible -</option>
					          	<option value="1">- Articulo -</option>
					          	<option value="1">- Impresiones -</option>
					          	
					          </select>	
			          	</div>
			          	<div class="w3-col l6 m6 s6">
			          		<label><b>Costo ICoins</b></label>
			          		<input class="w3-input w3-border" type="number" placeholder="000000" name="psw" required>
			          	</div>
			          	<div class="w3-col l12 m12 s12">
		          			<label><b>Descripción</b></label>
          					<textarea style="width: 100%; height: 100px"></textarea>
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