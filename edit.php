<?php
	include("session.php");
	include("config.php");
	$id = $_GET['id'];

  
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Editar </title>

  <!-- Estilos propios -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
	
	<!-- Libreria de los iconos -->
	<script src="https://kit.fontawesome.com/8f433c1396.js" crossorigin="anonymous"></script>
	
	<!-- Boostrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">	
	<script src="/js/bootstrap.min.js"></script>
  
</head>
<body>

  <div id="fondo">

      <!-- Barra de Iconos -->
      <div class="icon-bar">
            <a href="home.php"><i class="fa fa-home" aria-hidden="true"></i></a> 
            <a href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
            <a class="active" href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
            <a href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
            <a href="informes.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
            <a href="print_all.php" target="_blank"><i class="fa fa-print"></i></a>
            <a class="salir" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
            </div>

    <div  id="fondo">

    <h2>Editar datos del postulante:</h2>

    <hr/>

    <form action="update.php" method="POST">
      <div class="container">
      <div class="form-row">
      <div class="col col-md-7">
          <?php
          $result = mysqli_query($mysqli,"SELECT * FROM postulantes WHERE id ='$id'");
          while($row = mysqli_fetch_array($result))
          {
            echo"<input type='hidden' name='id' value='{$row['id']}' required>";
            
            echo"<label class='bold'>Nombres:</label>";
            echo"<input type='text' placeholder='Nombres' name='nombres' value='{$row['nombres']}' required class='form-control'>";

            echo"<label class='bold'>Apellido Paterno:</label>";
            echo"<input type='text' placeholder='Apellido Paterno' name='ape_paterno' value='{$row['ape_paterno']}' required class='form-control'>";

            echo"<label class='bold'>Apellido Materno:</label>";
            echo"<input type='text' placeholder='Apellido Materno' name='ape_materno' value='{$row['ape_materno']}' required class='form-control'>";

            echo"<label class='bold'>C.I.:</label>";
            echo"<input type='text' placeholder='C.I.' name='ci' value='{$row['ci']}' required class='form-control'>";

            echo"<label class='bold'>Edad:</label>";
            echo"<input type='text' placeholder='Edad' name='edad' value='{$row['edad']}' required class='form-control'>";

            echo"<label class='bold'>Telefono:</label>";
            echo"<input type='text' placeholder='Telefono' name='telefono' value='{$row['telefono']}' required class='form-control'>";

            echo"<br>";
            echo"<div class='clearfix'>";
            echo"<button type='submit' class='btn btn-warning'>Editar</button>";
          echo"</div>";
          }?>
  </div>  
  </div>  
    </div>
    </form>

  </div>
</body>
</html> 