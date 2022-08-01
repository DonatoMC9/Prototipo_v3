<?php
include 'session.php';
include 'config.php';    

$query = "SELECT * FROM postulantes p INNER JOIN evaluacion e ON p.id = e.id_postulante";
$result = mysqli_query($mysqli, $query);    

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Resultados de los postulantes evaluados:</title>

	<!-- Icono-->
    <link rel="icon" type="image/x-icon" href="img/proto.ico" />
	
	<!-- Estilos propios -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
	
	<!-- Libreria de los iconos -->
	<script src="https://kit.fontawesome.com/8f433c1396.js" crossorigin="anonymous"></script>
	
	<!-- Boostrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>

	<!-- Barra de Iconos -->
	<div class="icon-bar">
	<a href="home.php" class="hogar"><i class="fa fa-home" aria-hidden="true"></i></a> 
	<a href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
	<a href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
	<a href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	<a class="active" href="resultados.php"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></a>
	<a href="graficos.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
	<a href="print_all.php" target="_blank" class="imprimir" ><i class="fa fa-print"></i></a>
	<a href="logout.php" class="salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
	</div>

	<!-- Contenido -->

	<div id="fondo">
		<h2> Resultados de los Postulantes</h2>
		<hr/>

		<div class="container">	
	
		<!-- Inicio de la Tabla -->
		<?php
			
			echo "<table border='1' class='table table-hover table-sm table-light'>
			<thead class='table-secondary'>
			<tr>
				<th class='text-center'>Nombres</th>
				<th class='text-center'>Ape. Pat.</th>
				<th class='text-center'>Ape. Mat.</th>
				<th class='table-warning text-center'>CD Nota</th>
				<th class='table-warning text-center'>CD Salida</th>
				<th class='table-success text-center'>COM</th>
				<th class='table-success text-center'>CDD</th>
				<th class='table-success text-center'>INI</th>
				<th class='table-success text-center'>TRE</th>
				<th class='table-success text-center'>INT</th>
				<th class='table-warning text-center'>CB Nota</th>
				<th class='table-warning text-center'>CB Salida</th>
				<th class='table-danger text-center'>Resultado</th>				
			</tr>
			</thead>";
		
		while ($row = mysqli_fetch_array($result)) {
			echo '<tr>';
			echo '<td>' . $row['nombres'] . '</td>';
			echo '<td>' . $row['ape_paterno'] . '</td>';
			echo '<td>' . $row['ape_materno'] . '</td>';		
			echo '<td class="table-warning text-center">' . $row['vcd_suma'] . '</td>';
			echo '<td class="table-warning text-center">' . $row['vcd_salida'] . '</td>';
			echo '<td class="table-success text-center">' . $row['vcb_com'] . '</td>';
			echo '<td class="table-success text-center">' . $row['vcb_cdd'] . '</td>';
			echo '<td class="table-success text-center">' . $row['vcb_ini'] . '</td>';
			echo '<td class="table-success text-center">' . $row['vcb_tre'] . '</td>';
			echo '<td class="table-success text-center">' . $row['vcb_int'] . '</td>';
			echo '<td class="table-warning text-center">' . $row['vcb_suma'] . '</td>';
			echo '<td class="table-warning text-center">' . $row['vcb_salida'] . '</td>';
			echo '<td class="table-danger text-center bold">' . $row['resultado'] . '</td>';
			echo '</tr>';			
		}
		echo '</table>';
		?>

	
		</div>
	</div>
</body>
</html> 
