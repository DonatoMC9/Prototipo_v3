<?php
	include("session.php");
  include("config.php");
	$id = $_GET['id'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Evaluación </title>
  <!-- Icono-->
  <link rel="icon" type="image/x-icon" href="img/proto.ico" />
  
  <!-- Estilos propios -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
	
	<!-- Libreria de los iconos -->
	<script src="https://kit.fontawesome.com/8f433c1396.js" crossorigin="anonymous"></script>
	
	<!-- Boostrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">	
	<script src="js/bootstrap.min.js"></script>

    
</head>
<body>

      <!-- Barra de Iconos -->
      <div class="icon-bar">
      <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i></a> 
      <a href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
      <a href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
      <a class="active" href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
      <a href="resultados.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
      <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
      <a class="salir" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
      </div>

  <div id="fondo2">

      <h2>Evaluación Postulante: </h2>
      <hr/>


<form action="evaluar.php" method="POST">
  <div class="container">
    <!-- POnemos el nombre del postulante a evaluar -->

    <?php
      $result = mysqli_query($mysqli, "SELECT * FROM postulantes WHERE id='$id'");
      while($row = mysqli_fetch_array($result)){
        echo"<input type='hidden' name='id' value='{$row['id']}'>";

        echo"<div class='row'>";
          echo"<div class='col-md-3'>";
            echo"<label class='bold'>Nombres: </label>";
            echo"<input type='text' name='nombres' value='{$row['nombres']}' class='form-control form-control-sm' readonly>";
          echo"</div>";
          echo"<div class='col-md-3'>";
            echo"<label class='bold'>Apellido Paterno: </label>";
            echo"<input type='text' name='nombres' value='{$row['ape_paterno']}' class='form-control form-control-sm' readonly>";
          echo"</div>";
          echo"<div class='col-md-3'>";
            echo"<label class='bold'>Apellido Materno: </label>";
            echo"<input type='text' name='nombres' value='{$row['ape_materno']}' class='form-control form-control-sm' readonly>";
          echo"</div>";
          echo"<div class='col-md-3'>";
            echo"<label class='bold'>Cedula de Identidad: </label>";
            echo"<input type='text' name='nombres' value='{$row['ci']}' class='form-control form-control-sm' readonly>";
          echo"</div>";
        echo"</div>";
      }
    ?>
    <br>
    
    <!-- Iniciamos el form de evaluación -->
    <h5>COMPETENCIAS DURAS (Cuantificables) </h5>   

    <div class="form-row">
      <div class="col col-md-12"> 

    <p class="bold"> Formación Académica Principal:</p>
    <div class="input-group mb-3">      
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect01"> Cuenta con: Título Profesional a nivel Licenciatura, Técnico Superios o Técnico Medio.....(30 pts.)</label>
      </div>
      <select class="custom-select" name="vcd_fap" id="inputGroupSelect01">
        <option selected>Opciones...</option>
        <option value="30">Cumple</option>
        <option value="0">No cumple</option>
      </select>      
    </div>

    <p class="bold"> Formación Académica Suplementaria:</p> 
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect02">Cuenta con: Maestria en Educación Superior, Diplomados, Cursos especialidad u otros.  (10 pts.)</label>
      </div>
      <select class="custom-select" name="vcd_fas" id="inputGroupSelect02">
        <option selected>Opciones...</option>
        <option value="10">Cumple</option>
        <option value="0">No cumple</option>
      </select>
    </div>

    <p class="bold"> Experiencia Laboral General:</p> 
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect03">Cuenta con: Experiencia laboral mayor a 3 años, pudiendo ser en cualquier área............... (10 pts.)</label>
      </div>
      <select class="custom-select" name="vcd_elg" id="inputGroupSelect03">
        <option selected>Opciones...</option>
        <option value="10">Cumple</option>
        <option value="0">No cumple</option>
      </select>
    </div>

    <p class="bold"> Experiencia Laboral Específica:</p>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect04">Cuenta con: Experiencia laboral mayor a 1 años, especificamente en el área o rubro......... (20 pts.)</label>
      </div>
      <select class="custom-select" name="vcd_ele" id="inputGroupSelect04">
        <option selected>Opciones...</option>
        <option value="20">Cumple</option>
        <option value="0">No cumple</option>
      </select>
    </div>

    <p class="bold"> Conocimientos Técnicos:</p>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text" for="inputGroupSelect05">Cumple con: La aprobación de la prueba de conociento sobre el áera a la que postula.... (30 pts.)</label>
      </div>
      <select class="custom-select" name="vcd_cte" id="inputGroupSelect05">
        <option selected>Opciones...</option>
        <option value="30">Cumple</option>
        <option value="0">No cumple</option>
      </select>
    </div>

    </div>      
    </div>


    <h5>COMPETENCIAS BLANDAS (Cualificables) </h5>   

    <div class="form-row">
      <div class="col col-md-7">
        
        <!-- Comunicación -->
        <div class="slidecontainer">
          <label class="col-form-label bold">Comunicación:</label>
          <input type="range" min="1" max="100" value="1" class="slider" name="vcb_com">
          <p class="rango">............................................Bajo................................Medio.....................................Alto.................................Optimo</p>
        </div>

        <!-- Capacidad de decisión -->
        <div class="slidecontainer">
          <label class="col-form-label bold">Capacidad de decisión:</label>
          <input type="range" min="1" max="100" value="1" class="slider" name="vcb_cdd">
          <p class="rango">............................................Bajo................................Medio.....................................Alto.................................Optimo</p>
        </div>

        <!-- Iniciativa -->
        <div class="slidecontainer">
          <label class="col-form-label bold">Iniciativa:</label>
          <input type="range" min="1" max="100" value="1" class="slider" name="vcb_ini">
          <p class="rango">............................................Bajo................................Medio.....................................Alto.................................Optimo</p>
        </div>

        <!-- Trabajo en equipo -->
        <div class="slidecontainer">
          <label class="col-form-label bold">Trabajo en equipo:</label>
          <input type="range" min="1" max="100" value="1" class="slider" name="vcb_tre">
          <p class="rango">............................................Bajo................................Medio.....................................Alto.................................Optimo</p>
        </div>

        <!-- Integridad -->
        <div class="slidecontainer">
          <label class="col-form-label bold">Integridad:</label>
          <input type="range" min="1" max="100" value="1" class="slider" name="vcb_int">
          <p class="rango">............................................Bajo................................Medio.....................................Alto.................................Optimo</p>
          
        </div>
        
      </div>      
    </div>

    <!-- FINAL DE LA EVALUACIÓN -->
    <br>
    <div class="clearfix">

      <button type="submit" class="btn btn-success">Evaluar</button>
	    <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
    <br>
  </div>
</form>





</div>
</body>
</html>