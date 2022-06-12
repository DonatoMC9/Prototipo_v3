<?php
include 'session.php';

if (isset($_POST['search'])) {
    $valueToSearh = $_POST['valueToSearh'];
    $query =
        "SELECT * FROM postulantes WHERE nombres LIKE '%" .
        $valueToSearh .
        "%' OR ape_paterno LIKE '%" .
        $valueToSearh .
        "%'";
    $result = filterRecord($query);
} else {
    $query = 'SELECT * FROM postulantes';
    $result = filterRecord($query);
}

function filterRecord($query)
{
    include 'config.php';
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Postulantes </title>

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
	<a class="active" href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
	<a href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
	<a href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	<a href="resultados.php"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></a>
	<a href="graficos.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
	<a href="print_all.php" target="_blank" class="imprimir" ><i class="fa fa-print"></i></a>
	<a href="logout.php" class="salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
	</div>
	
	<div  id="fondo">
			
			<h2>Lista Postulantes</h2>
			<hr/>
			<div class="container">
				<!-- Buscador -->
				<form action="" method="POST" class="form-inline">
					<div>			
						<input type="search" name="valueToSearh" class="form-control-sm" placeholder="Buscar" autocomplete="off">		
						<button type="submit" class="btn btn-primary mb-2 btn-sm" name="search">Buscar</button>
					</div>
				</form>			
				
				<br/>		
			<!-- Inicio de la Tabla -->
			<div>
				<div>
				<?php
    				echo "<table border='1' class='table table-hover table-sm table-light'>
					<thead class='table-secondary'>
						<tr>
							<th>Nombres</th>
							<th>Ape. Paterno</th>
							<th>Ape. Materno</th>
							<th>C.I.</th>
							<th>Edad</th>
							<th>Teléfono</th>
							<th class='table-success text-center text-success'>Editar</th>
							<th class='table-danger text-center text-danger'>Eliminar</th>
							<th class='table-primary text-center text-primary'>Imprimir</th>
						</tr>
					</thead>";

					while ($row = mysqli_fetch_array($result)) {
						echo '<tr>';
						echo '<td>' . $row['nombres'] . '</td>';
						echo '<td>' . $row['ape_paterno'] . '</td>';
						echo '<td>' . $row['ape_materno'] . '</td>';
						echo '<td>' . $row['ci'] . '</td>';
						echo '<td>' . $row['edad'] . '</td>';
						echo '<td>' . $row['telefono'] . '</td>';

						echo "<td class='table-success text-center'><a href='edit.php?id=" .
							$row['id'] .
							"'><img class='tamIconos' src='./iconos/01_Editar.svg' alt='Edit'></a></td>";
						
						echo "<td class='table-danger text-center'><a href='delete.php?id=" .
							$row['id'] .
							"'><img class='tamIconos' src='./iconos/02_Eliminar.svg' alt='Delete'></a></td>";
						
						echo "<td class='table-primary text-center'><a target='_blank' href='print.php?id=" .
							$row['id'] .
							"'><img class='tamIconos' src='./iconos/03_Imprimir.svg' alt='Print'></a></td>";
						
						echo '</tr>';
					}
					echo '</table>';
					?>
					</div>
				</div>
		</div>
	</div>	
	
</body>
</html> 