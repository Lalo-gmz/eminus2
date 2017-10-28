<?php

require_once "inc/global.php";


$usrObject = new Usuario();

if (isset($_GET['task'])) {
	if ($_GET['task']== "add") {
		$nombre = $_POST['nombre'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		if ($pass1 != $pass2) {
			header("Location: vista1.php?alerta=1");	
		}else{


			$control = $usrObject->insertUsuario($nombre, $pass1);

			if ($control) {
				header("Location: vista1.php?alerta=2");	
			}
		}
	}
}
