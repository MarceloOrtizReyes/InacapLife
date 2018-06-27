<div class="w3-container w3-content"  style="max-width:1200px;margin-left:5px" >   
  <div class="w3-row" >  
    <!-- Left Column -->
    <div class="w3-col m3" style="margin-top:80px">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
         <h4 class="w3-center">Nombre Tutor</h4>
         <p class="w3-center"><img src="<?base_url('/Resources/avatar3.png')?>" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
         <hr>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i>Sede</p>
         <p><i class="fa fa-notebook fa-fw w3-margin-right w3-text-theme"></i>Carrera</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i>Semestre</p>
        </div>
      </div>
      <br>
      
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="document.getElementById('id04').style.display='block'" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Agregar disponibilidad</button>
          <button onclick="document.getElementById('id03').style.display='block'" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Agregar Actividades</button>
          <button onclick="myFunction('actividades')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>Mis Actividades</button>
          <div id="actividades" class="w3-hide w3-container">
            <p>Mostrar Actividades</p>
          </div>
          <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa- fa-fw w3-margin-right"></i>Beneficios</button>
          <button class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-home fa-fw w3-margin-right"></i>Sedes</button>
          </div>
        </div>
      <!-- Interests --> 
      
      
    <!-- End Left Column -->
    </div>

    <div id="id04" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
              <span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" action="/action_page.php">
              <div class="w3-section">
                <h2>Agregar disponibilidad</h2>
                <label><b>Fecha disponibilidad</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Ingrese nombre" name="usrname" required>

                <div class="w3-row">
                  <div class="w3-col l8 m8 s8">
                    <label><b>Horario</b></label>
                    <input class="w3-input w3-border" type="time" placeholder="0000" name="psw" required>
                      
                  </div>
                  
                </div>
                
                  <div class="w3-row">
                  <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Agregar disponibilidad</button>

                  <button class="w3-button w3-padding-large w3-red w3-col m12" onclick="document.getElementById('id04').style.display='none'">Cancelar</button>
                </div>


                

              </div>
            </form>

          </div>
        </div>

    <!-- Modal -->
    <div id="id03" class="w3-modal">
          <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

            <div class="w3-center"><br>
              <span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Modal">&times;</span>
            </div>

            <form class="w3-container" action="/action_page.php">
              <div class="w3-section">
                <h2>Agregar la actividad</h2>
                <label><b>Fecha actividad</b></label>
                <input class="w3-input w3-border w3-margin-bottom" type="date" placeholder="Ingrese nombre" name="usrname" required>

                <div class="w3-row">
                  
                  
                  <div class="w3-col l12 m12 s12">
                    <label><b>Descripción</b></label>
                    <textarea style="width: 100%; height: 100px"></textarea>
            </div>
                </div>
                
                
                  <div class="w3-row">
                  <button class="w3-button w3-block w3-green w3-section w3-padding" type="submit">Agregar actividad</button>

                  <button class="w3-button w3-padding-large w3-red w3-col m12" onclick="document.getElementById('id03').style.display='none'">Cancelar</button>
                </div>


                

              </div>
            </form>

          </div>
        </div>
    
  </div>
</div>