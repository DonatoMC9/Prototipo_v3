<?php
include("config.php");
include("session.php");

$id = $_GET['id'];

$sql = "DELETE FROM postulantes WHERE id='$id'";

//echo($sql);

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="users.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="users.php";';
	echo '</script>';
}
?>