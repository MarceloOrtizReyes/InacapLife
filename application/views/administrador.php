<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">   
  <div class="row">  
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div>
<form action="<?=site_url('Controlador/registroAlumnoDos');?>" method="post">
<label>Ingrese nombre</label>
<input type="text" name="alumno[alu_nombre]">
<br>
<label>Ingrese apellido paterno</label>
<input type="text" name="alumno[alu_apellidoPaterno]">
<br>
<label>Ingrese nombre</label>
<input type="text" name="alumno[alu_apellidoMaterno]">
<br>
<label>Ingrese rut</label>
<input type="text" name="alumno[alu_rut]">
<label>-</label>
<input type="text" name="alumno[alu_dv]">
<br>
<label>Ingrese email</label>
<input type="text" name="alumno[alu_email]">
<br>
<label>Ingrese pass</label>
<input type="password" name="alumno[alu_pass]">
<br>
<select name="alumno[alu_car_id]">
	<option value="1">Analista Programador</option>
	<option value="2">Ing Informatica</option>
</select>
<br>
<select name="alumno[alu_sed_id]">
	<option value="1">Renca</option>
	<option value="2">Valparaiso</option>
</select>
<input type="submit" name="guardar" value="agregar">
</form>
	
</div>
      <br>
    	</div>
	</div>
</div>
