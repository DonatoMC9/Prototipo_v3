<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Registro </title>
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

<section class="layout">

<!-- INICIO DEL HEADER -->
<div class="header">

<!-- Barra de Iconos -->
  <div class="icon-bar">
      <a href="home.php" class="hogar"><i class="fa fa-home" aria-hidden="true"></i></a> 
      <a href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
      <a class="active" href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
      <a href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
      <a href="resultados.php"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></a>
      <a href="graficos.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
      <a href="#" class="imprimir" ><i class="fa fa-print"></i></a>
      <a href="logout.php" class="salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
  </div>

</div>


<!-- INICIO DEL MAIN -->
<div class="main" id="fondo">

<h2>Registro Postulante: </h2>
<hr/>

<form action="register.php" method="POST">
  <div class="container">
  <div class="form-row">
    <div class="col col-md-7">
      <div class="form-group">
          <label class="bold">Nombres:</label>
          <input type="text" class="form-control" name="nombres" placeholder="Nombres" required autocomplete="off" >
      </div>
      <div class="form-group">
          <label class="bold">Apellido Paterno:</label>
          <input type="text" class="form-control" name="ape_paterno" placeholder="Apellido Paterno" required autocomplete="off" >
      </div>
      <div class="form-group">
          <label class="bold">Apellido Materno:</label>
          <input type="text" class="form-control" name="ape_materno" placeholder="Apellido Materno" required autocomplete="off" >
      </div>
      <div class="form-group">
          <labe class="bold"l>C.I.:</label>
          <input type="text" class="form-control" name="ci" placeholder="Cedula de Identidad" required autocomplete="off" >
      </div>
      <div class="form-group">
          <label class="bold">Edad:</label>
          <input type="text" class="form-control" name="edad" placeholder="Edad" required autocomplete="off" >
      </div>
      <div class="form-group">
          <label class="bold">Telefono:</label>
          <input type="text" class="form-control" name="telefono" placeholder="Telefono" required autocomplete="off" >
      </div>

      <br>
      <div class="clearfix">

        <button type="submit" class="btn btn-success">Registrarse</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </div>
      </div>
    </div>
  </div>
</form>


<!-- Termina el DIV main-->
</div>


</section>

</div>
</body>
</html>