<?php
require "../model/Usuario.php";

$nombre = $_POST['nombre'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];

if ($pass1 != $pass2) {
	header("Location: ../vista1.php?alerta=1");	
}

$usrObject = new Usuario();

$control = $usrObject->insertUsuario($nombre, $pass1);

if ($control) {
	header("Location: ../vista1.php?alerta=2");	
}