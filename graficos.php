<?php
include 'session.php';
include 'config.php';

// Query para extraer datos para la Tabla resumen
$query =
    'SELECT * FROM postulantes p INNER JOIN evaluacion e ON p.id = e.id_postulante ORDER BY vcb_suma DESC';
$result = mysqli_query($mysqli, $query);

// Query para extraer los datos para los Graficos
$query2 = 'SELECT * FROM postulantes p INNER JOIN vcb_notas v ON p.id = v.id_post ORDER BY suma DESC';
$result2 = mysqli_query($mysqli, $query2);
$cont = 1;

while($row = mysqli_fetch_array($result2) and $cont <= 3)
{
    if($cont == 1){
        $nombre_A0 = $row["nombres"];
        $nota_A1 = $row["com"];
        $nota_A2 = $row["cdd"];
        $nota_A3 = $row["ini"];
        $nota_A4 = $row["tre"];
        $nota_A5 = $row["inte"];
    }elseif($cont == 2){
        $nombre_B0 = $row["nombres"];
        $nota_B1 = $row["com"];
        $nota_B2 = $row["cdd"];
        $nota_B3 = $row["ini"];
        $nota_B4 = $row["tre"];
        $nota_B5 = $row["inte"];
    }elseif($cont == 3){
        $nombre_C0 = $row["nombres"];
        $nota_C1 = $row["com"];
        $nota_C2 = $row["cdd"];
        $nota_C3 = $row["ini"];
        $nota_C4 = $row["tre"];
        $nota_C5 = $row["inte"];
    }

    $cont = $cont + 1;
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Gráficos </title>

	<!-- Icono-->
    <link rel="icon" type="image/x-icon" href="img/proto.ico" />
	
	<!-- Estilos propios -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css" /> 
	
	<!-- Libreria de los iconos -->
	<script src="https://kit.fontawesome.com/8f433c1396.js" crossorigin="anonymous"></script>

	<!--Antes del Morris-->

    <!--Libreria jQuery-->
    <script src="libs/jquery.min.js"></script>

    <!--Libreria Raphael-->
    <script src="libs/raphael-min.js"></script>

    <!--Librerias Morris-->
    <link rel="stylesheet" href="../libs/morris.css" />
    <script src="libs/morris.min.js" charset="utf-8"></script>
	
	<!-- Boostrap-->
	<link href="css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>

	<!-- Script LineChart-->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.js"></script>

</head>
<body>

	<!-- Barra de Iconos -->
	<div class="icon-bar">
	<a href="home.php" class="hogar"><i class="fa fa-home" aria-hidden="true"></i></a> 
	<a href="users.php"><i class="fa fa-users" aria-hidden="true"></i></a> 
	<a href="registration.php"><i class="fa fa-address-book" aria-hidden="true"></i></a>
	<a href="evaluacion.php"><i class="fa fa-pencil-square" aria-hidden="true"></i></a>
	<a href="resultados.php"><i class="fa fa-sort-amount-desc" aria-hidden="true"></i></a>
	<a class="active" href="graficos.php"><i class="fa fa-bar-chart" aria-hidden="true"></i></a>
	<a href="print_terna.php" target="_blank" class="imprimir" ><i class="fa fa-print"></i></a>
	<a href="logout.php" class="salir"><i class="fa fa-sign-out" aria-hidden="true"></i></a> 
	</div>

	<!-- Contenido -->

	<div id="fondo2">
		<h2> Gráficos comparativos de la Terna con mayor calificación: </h2>
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
							$cont = 1;
				while (($row = mysqli_fetch_array($result)) and $cont <= 3) {
					
					if ($cont == 1) {
						$var1 = $row['id'] - 4;
					} elseif ($cont == 2) {
						$var2 = $row['id'] - 4;
					} else {
						$var3 = $row['id'] - 4;
					}

					$row['id'];
					echo '<tr>';
					echo '<td>' . $row['nombres'] . '</td>';
					echo '<td>' . $row['ape_paterno'] . '</td>';
					echo '<td>' . $row['ape_materno'] . '</td>';
					echo '<td class="table-warning text-center">' .
						$row['vcd_suma'] .
						'</td>';
					echo '<td class="table-warning text-center">' .
						$row['vcd_salida'] .
						'</td>';
					echo '<td class="table-success text-center">' . $row['vcb_com'] . '</td>';
					echo '<td class="table-success text-center">' . $row['vcb_cdd'] . '</td>';
					echo '<td class="table-success text-center">' . $row['vcb_ini'] . '</td>';
					echo '<td class="table-success text-center">' . $row['vcb_tre'] . '</td>';
					echo '<td class="table-success text-center">' . $row['vcb_int'] . '</td>';
					echo '<td class="table-warning text-center">' .
						$row['vcb_suma'] .
						'</td>';
					echo '<td class="table-warning text-center">' .
						$row['vcb_salida'] .
						'</td>';
					echo '<td class="table-danger text-center bold">' .
						$row['resultado'] .
						'</td>';
					echo '</tr>';
					$cont = $cont + 1;
				}
				echo '</table>';
				?>

				<hr/>

				<!-- BLOQUE PARA LOS GRAFICOS -->

				<div id="container2">

				  <!-- Cuadro del 1er Puesto -->
					<div id="left"><br>Gráfico de:
						<?php
						//echo $var1 . '<br>';
						$sql = 'SELECT * FROM postulantes WHERE id=' . $var1;
						$resultado = mysqli_query($mysqli, $sql);
						$fila = mysqli_fetch_array($resultado);

						echo $fila['nombres'];
						?>	
						<!-- Grafico -->
						<div id="graf_postulante1" style="height: 200px"></div>
												
					</div>

					<!-- Cuadro del 2do Puesto -->
					<div id="center"><br>Gráfico de: 
						<?php
						//echo $var2 . '<br>';
						$sql = 'SELECT * FROM postulantes WHERE id=' . $var2;
						$resultado = mysqli_query($mysqli, $sql);
						$fila = mysqli_fetch_array($resultado);

						echo $fila['nombres'];
			      ?>
			      <!-- Grafico -->
			      <div id="graf_postulante2" style="height: 200px"></div>
          </div>


		      <!-- Cuadro del 3er Puesto -->
		      <div id="right"><br>Gráfico de: 
			      <?php
				    //echo $var3 . '<br>';
				    $sql = 'SELECT * FROM postulantes WHERE id=' . $var3;
				    $resultado = mysqli_query($mysqli, $sql);
				    $fila = mysqli_fetch_array($resultado);

				    echo $fila['nombres'];
			      ?>
			      <!-- Grafico -->
			      <div id="graf_postulante3" style="height: 200px"></div>
		      </div>

		<hr>
  		
		      <!-- GRAFICO COMPARATIVO -->
  		    <div id="center2"><br>Gráfico comparativo:
    		    <div id="graf_comp" style="height: 200px"></div>

		      </div>

		<hr>

	</div>

</body>

</html> 


<script>
// GRAFICO DEL 1ER LUGAR
Morris.Area({
    element : 'graf_postulante1',
    data: [
    { var: 'COM', pts1: <?php echo $nota_A1; ?>},
    { var: 'CDD', pts1: <?php echo $nota_A2; ?>},
    { var: 'INI', pts1: <?php echo $nota_A3; ?>},
    { var: 'TRE', pts1: <?php echo $nota_A4; ?>},
    { var: 'INT', pts1: <?php echo $nota_A5; ?>},    
    ],
    xkey:'var',
    ykeys: ['pts1'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
    labels: ['<?php echo $nombre_A0; ?>'],
    //Redimenciona el gráfico para distintos dispositivos.
    resize: true,
  //Cambia el color de la línea.
    lineColors: ['#1597BB'],
  //Cambia el grosor de la línea.
    lineWidth: 2,
  //Valor Maximo de las Verticales Y
    ymax: 100,
  //Esconde los cuadros de datos por defecto
    hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
  //Cambia la opacidad del color de relleno del área. Acepta valores entre 0.0 (para completamente transparente) y 1.0 (para completamente opaco).
  fillOpacity: 0.5
});


// GRAFICO DEL 2DO LUGAR
Morris.Area({
    element : 'graf_postulante2',
    data: [
    { var: 'COM', pts1: <?php echo $nota_B1; ?>},
    { var: 'CDD', pts1: <?php echo $nota_B2; ?>},
    { var: 'INI', pts1: <?php echo $nota_B3; ?>},
    { var: 'TRE', pts1: <?php echo $nota_B4; ?>},
    { var: 'INT', pts1: <?php echo $nota_B5; ?>},    
    ],
    xkey:'var',
    ykeys: ['pts1'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
    labels: ['<?php echo $nombre_B0; ?>'],
    //Redimenciona el gráfico para distintos dispositivos.
    resize: true,
  //Cambia el color de la línea.
    lineColors: ['#4E9F3D'],
  //Cambia el grosor de la línea.
    lineWidth: 2,
  //Valor Maximo de las Verticales Y
    ymax: 100,
  //Esconde los cuadros de datos por defecto
    hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
  //Cambia la opacidad del color de relleno del área. Acepta valores entre 0.0 (para completamente transparente) y 1.0 (para completamente opaco).
  fillOpacity: 0.5
});


// GRAFICO DEL 3ER LUGAR
Morris.Area({
    element : 'graf_postulante3',
    data: [
    { var: 'COM', pts1: <?php echo $nota_C1; ?>},
    { var: 'CDD', pts1: <?php echo $nota_C2; ?>},
    { var: 'INI', pts1: <?php echo $nota_C3; ?>},
    { var: 'TRE', pts1: <?php echo $nota_C4; ?>},
    { var: 'INT', pts1: <?php echo $nota_C5; ?>},    
    ],
    xkey:'var',
    ykeys: ['pts1'],
  // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
    labels: ['<?php echo $nombre_C0; ?>'],
    //Redimenciona el gráfico para distintos dispositivos.
    resize: true,
  //Cambia el color de la línea.
    lineColors: ['#EAA32E'],
  //Cambia el grosor de la línea.
    lineWidth: 2,
  //Valor Maximo de las Verticales Y
    ymax: 100,
  //Esconde los cuadros de datos por defecto
    hideHover: true,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
  //Cambia la opacidad del color de relleno del área. Acepta valores entre 0.0 (para completamente transparente) y 1.0 (para completamente opaco).
  fillOpacity: 0.5
});


// GRAFICO LINEAS COMPARATIVO
Morris.Area({
    element : 'graf_comp',
    data: [
    { var: 'COM', pts1: <?php echo $nota_A1; ?>, pts2:<?php echo $nota_B1; ?>, pts3: <?php echo $nota_C1; ?> },
    { var: 'CDD', pts1: <?php echo $nota_A2; ?>, pts2:<?php echo $nota_B2; ?>, pts3: <?php echo $nota_C2; ?> },
    { var: 'INI', pts1: <?php echo $nota_A3; ?>, pts2:<?php echo $nota_B3; ?>, pts3: <?php echo $nota_C3; ?> },
    { var: 'TRE', pts1: <?php echo $nota_A4; ?>, pts2:<?php echo $nota_B4; ?>, pts3: <?php echo $nota_C4; ?>},
    { var: 'INT', pts1: <?php echo $nota_A5; ?>, pts2:<?php echo $nota_B5; ?>, pts3: <?php echo $nota_C5; ?>},    
    ],
    xkey:'var',
    ykeys: ['pts1', 'pts2', 'pts3'],
    // Etiquetas para las teclas Y: se mostrarán cuando pase el cursor sobre el gráfico.
    labels: ['<?php echo $nombre_A0; ?>', '<?php echo $nombre_B0; ?>', '<?php echo $nombre_C0; ?>'],
    //Redimenciona el gráfico para distintos dispositivos.
    resize: true,
  //Cambia el color de la línea.
    lineColors: ['#1597BB', '#4E9F3D', '#EAA32E'],
  //Cambia el grosor de la línea.
    lineWidth: 3,
  //Valor Maximo de las Verticales Y
  ymax: 100,
  //Esconde los cuadros de datos por defecto
  hideHover: false,
  //Elimina la opcion por defecto de que sean años los valores en X
  parseTime: false,
  //Cambia la opacidad del color de relleno del área. Acepta valores entre 0.0 (para completamente transparente) y 1.0 (para completamente opaco).
  fillOpacity: 0.2,
  //Establézcalo en true para superponer las áreas una encima de la otra en lugar de apilarlas.
  behaveLikeLine: true
  
});
</script>