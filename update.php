<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$nombres = $_POST['nombres'];
$ape_paterno = $_POST['ape_paterno'];
$ape_materno = $_POST['ape_materno'];
$ci = $_POST['ci'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];

$sql = "UPDATE postulantes SET nombres='$nombres', ape_paterno='$ape_paterno', ape_materno='$ape_materno', ci='$ci', edad=$edad, telefono='$telefono' 
WHERE id='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro editado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error en proceso de edición de registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>