<?php
include("config.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT usuario, password FROM login WHERE usuario = '$username' AND password='$password';";
$result = $mysqli->query($query);
 
if($result->num_rows == 1) 
{
	$_SESSION['user'] = $username;
	header('Location: home.php');  
}
else{ 
	header('Location: login.html');
}
?>