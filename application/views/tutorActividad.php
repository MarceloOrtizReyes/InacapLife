
<div class="w3-col m9 w3-right w3-margin-right" style="margin-top:-27%">
<div class="month"> 
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>August<br><span style="font-size:18px">2018</span></li>
  </ul>
</div>

<ul class="weekdays">
  <li>Lunes</li>
  <li>Martes</li>
  <li>Miercoles</li>
  <li>Jueves</li>
  <li>Viernes</li>
  <li>Sabado</li>
  <li>Domngo</li>
</ul>

<ul class="days"> 
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li>10</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li><span class="active">24</span></li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  
</ul>

</div>

<div class="w3-container">
  <div class="w3-row">
    <?php
      if (isset($dataActividades)) {
        foreach ($dataActividades as $key => $actividades) {
        $actividades = $actividades->toArray();
        $actividad = $actividades['_columns'];
        $fechaInicio = $actividad['act_feInicio'];
        $fechaTermino = $actividad['act_feTermino'];
        echo "<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";                 
        echo "<span class='w3-right w3-opacity'>".$actividad['act_tipo']."</span>";
        echo "<h3>Actividad</h3>";
        echo "<label>".$actividad['act_descripcion']."</label>";
        echo "<hr class='w3-clea'></hr>";
        echo "<h5>Fecha inicio: ".$actividad['act_feInicio']."</h5>";
        echo "<h5>Fecha termino: ".$actividad['act_feTermino']."</h5>";
        echo "<h5>tipo actividad: ".$actividad['act_tipo']."</h5>";
        echo "<h5>id alumno ".$actividad['act_alu_id']."</h5><br> ";
        echo "</div>";
      }
      }else{
        echo "no hay actividades agendadas";
      }      
    ?>
  </div>
</div>

<style type="text/css">
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

/* Month header */
.month {
    padding: 25px 25px;
    width: 100%;
    background: #1abc9c;
    text-align: center;
}

/* Month list */
.month ul {
    margin: 0;
    padding: 0;
}

.month ul li {
    color: white;
    font-size: 20px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

/* Previous button inside month header */
.month .prev {
    float: left;
    padding-top: 10px;
}

/* Next button */
.month .next {
    float: right;
    padding-top: 10px;
}

/* Weekdays (Mon-Sun) */
.weekdays {
    margin: 0;
    padding: 10px 0;
    background-color:#ddd;
}

.weekdays li {
    display: inline-block;
    padding: 15px 15px;
    width: 13.6%;
    color: #666;
    text-align: center;
}

/* Days (1-31) */
.days {
    padding: 10px 0;
    background: #eee;
    margin: 0;
}

.days li {
    list-style-type: none;
    display: inline-block;
    width: 13.6%;
    padding: 20px 20px;
    text-align: center;
    margin-bottom: 5px;
    font-size:12px;
    color: #777;
}

/* Highlight the "current" day */
.days li .active {
    padding: 5px;
    background: #1abc9c;
    color: white !important
}
