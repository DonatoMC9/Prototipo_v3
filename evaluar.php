<?php
include("config.php");
include("session.php");
include("zReglas.php");

$id_postulante = $_POST['id'];

$vcd_fap = $_POST['vcd_fap'];
$vcd_fas = $_POST['vcd_fas'];
$vcd_elg = $_POST['vcd_elg'];
$vcd_ele = $_POST['vcd_ele'];
$vcd_cte = $_POST['vcd_cte'];

$vcb_com = $_POST['vcb_com'];
$vcb_cdd = $_POST['vcb_cdd'];
$vcb_ini = $_POST['vcb_ini'];
$vcb_tre = $_POST['vcb_tre'];
$vcb_int = $_POST['vcb_int'];

/* Suma de las variables VCB */

$vcb_suma = sumaCompBlandas($vcb_com, $vcb_cdd, $vcb_ini, $vcb_tre, $vcb_int);

/* Enviamos esos datos numericos a la tabla vcb_notas */

$sql3 = $mysqli->prepare("INSERT INTO vcb_notas(id_post, com, cdd, ini, tre, inte, suma) VALUES('$id_postulante', '$vcb_com', '$vcb_cdd', '$vcb_ini', '$vcb_tre', '$vcb_int', '$vcb_suma')");
$sql3->execute();

/* Llenamos la celda suma_vcd usando la funcion sumaCompDuras*/

$vcd_suma = sumaCompDuras($vcd_fap, $vcd_fas, $vcd_elg, $vcd_ele, $vcd_cte);

$vcd_salida = cambioFuzzyVCD($vcd_suma);

/* PRUEBAS :)
echo ("<br>Comunicacion = ".$vcb_com);
echo ("<br>Capacidad = ".$vcb_cdd);
echo ("<br>Iniciativa = ".$vcb_ini);
echo ("<br>Trabajo en equipo = ".$vcb_tre);
echo ("<br>Integridad = ".$vcb_int);
*/

/* COMENZAMOS A CONVERTIR LOS DATOS NUMERICOS EN TEXTOS */

/* Variable Comunicación */
$vcb_com = cambioFuzzy($vcb_com);

/* Variable Capacidad de decisión */
$vcb_cdd = cambioFuzzy($vcb_cdd);

/* Variable Iniciativa */
$vcb_ini = cambioFuzzy($vcb_ini);

/* Variable Trabajo en equipo */
$vcb_tre = cambioFuzzy($vcb_tre);

/* Variable Integridad */
$vcb_int = cambioFuzzy($vcb_int);

//REGLAS FUZZY PARA LA SALIDA DE VCB

$vcb_salida = reglasFuzzy($vcb_com, $vcb_cdd, $vcb_ini, $vcb_tre, $vcb_int);

// META REGLAS FUZZY DE SALIDA FINAL

$resultado = metaReglasFuzzy($vcd_salida, $vcb_salida);



/* Consulta para Agregar las notas de la Evaluacion */
$sql = "INSERT INTO evaluacion(id_postulante, vcd_fap, vcd_fas, vcd_elg, vcd_ele, vcd_cte, vcd_suma, vcd_salida, vcb_com, vcb_cdd, vcb_ini, vcb_tre, vcb_int, vcb_suma,vcb_salida, resultado) 
VALUES('$id_postulante', '$vcd_fap', '$vcd_fas', '$vcd_elg', '$vcd_ele', '$vcd_cte', '$vcd_suma', '$vcd_salida', '$vcb_com', '$vcb_cdd', '$vcb_ini', '$vcb_tre', '$vcb_int', '$vcb_suma', '$vcb_salida', '$resultado')";

/* Actualizamos el campo estado de la Tabla postulantes */
$sql2 = $mysqli->prepare("UPDATE postulantes SET estado = 'Evaluado' WHERE id = " . $id_postulante);
$sql2->execute();

/* Consultamos si ya existe una evaluacion de ese postulante */

$query = $mysqli->prepare("SELECT * FROM evaluacion WHERE id_postulante=".$id_postulante);
$query->execute();
$query->store_result();
$rows = $query->num_rows;

if ($rows == 0){

	if(mysqli_query($mysqli, $sql)){
		echo '<script language="javascript">';
		echo 'alert("Postulante Evaluado...!");';
		echo 'window.location="evaluacion.php";';
		echo '</script>';
		
	}else {
		echo '<script language="javascript">';
		echo 'alert("Error al Evaluar!");';
		echo 'window.location="evaluacion.php";';
		echo '</script>';
	}	

}else{
	echo '<script language="javascript">';
	echo 'alert("Postulante ya Evaluado...!");';
	echo 'window.location="evaluacion.php";';
	echo '</script>';	
}

?>