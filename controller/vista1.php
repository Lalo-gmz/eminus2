<?php

$usrObject = new Usuario();

$usuarios = $usrObject->getAllUsuario();

$datoNombre = "";
$datoContra = "";
$datoContra2 = "";
$inputHidden = "";

if (isset($_GET['task'])) {
	if ($_GET['task']== "add" AND !isset($_POST['task'])) {
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
	if ($_GET['task'] == "del" AND isset($_GET['id'])) {
			$control = $usrObject->delUsuario($_GET['id']);
			if ($control) {
				header("Location: vista1.php?alerta=3");
			}else{
				header("Location: vista1.php?alerta=4");
			}
	}

	if ($_GET['task'] == "edit" AND isset($_GET['id'])) {
			$control = $usrObject->getUsuarioById($_GET['id']);
			$id = $control['idUsuario'];
			$datoNombre = $control['matricula'];
			$datoContra = $control['contrasena'];
			$datoContra2 = $control['contrasena'];
			$inputHidden = '<input type="hidden" name="id" value="'.$id.'">';
			$accion = "edit";
	}

	if ($_GET['task'] == "add" AND $_POST['task']=="edit") {
		$id= $_POST['id'];
		$nombre = $_POST['nombre'];
		$pass1 = $_POST['pass1'];
	
		$control = $usrObject->editUsuario($id, $pass1, $nombre);
		if ($control) {
				header("Location: vista1.php?alerta=10");
			}else{
				header("Location: vista1.php?alerta=11");
			}
	}

}