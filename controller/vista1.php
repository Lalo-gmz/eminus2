<?php
require "../model/Usuario.php";
$usrObject = new Usuario();

$usuarios = $usrObject->getAllUsuario();
if (isset($_POST['tabla'])) {
	$table="";
	foreach ($usuarios as $key){
						$table .='<tr>
							<th>'.$key['idUsuario'].'</th>
							<td>'.$key['matricula'].'</td>
							<td>'.$key['nombre'].'</td>
							<td>'.$key['apPaterno'].'</td>
							<td>'.$key['apMaterno'].'</td>
							<td>'.$key['eMail'].'</td>
							<td>'.$key['telefono'].'</td>
							<td>'.$key['idEscuela'].'</td>
							<td>
							<a class="btn btn-warning btn-sm" href="usuarios.php?id='.$key['idUsuario'].'&task=edit"><i class="fa fa-pencil"></i></a> 
							<a class="btn btn-danger btn-sm" href="usuarios.php?id='.$key['idUsuario'].'&task=del"><i class="fa fa-trash"></i></a></td>

						</tr>';
					}
	echo $table;
}

$datoNombre = "";
$datoContra = "";
$datoContra2 = "";
$inputHidden = "";
$accion = "add";



if (isset($_POST['task'])) {
	if ($_POST['task'] == "add") {
		$nombre = $_POST['nombre'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		if ($pass1 != $pass2) {
			
		}else{


			$control = $usrObject->insertUsuario($nombre, $pass1);


			if ($control) {
				
			}
		}
	}
	if ($_GET['task'] == "del" AND isset($_GET['id'])) {
			$control = $usrObject->delUsuario($_GET['id']);
			if ($control) {
				header("Location: usuarios.php?alerta=3");
			}else{
				header("Location: usuarios.php?alerta=4");
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
				header("Location: usuarios.php?alerta=10");
			}else{
				header("Location: usuarios.php?alerta=11");
			}
	}

}