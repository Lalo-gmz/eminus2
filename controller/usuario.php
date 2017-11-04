<?php

$usrObject = new Usuario();
$_SESSION['curpage'] = 1; //pagina 1 por defecto

if (isset($_GET['page'])) {
    $_SESSION['curpage'] = $_GET['page']; //cambiar de pagina
}

$totalrow = $usrObject->contarUsuario(); //contar las filas
$sizePage = 10; //tamaño de la paginación
$totalPages = ceil($totalrow['total'] / $sizePage) ; //calcular las paginas

$limInf = ($_SESSION['curpage']-1)*$sizePage; // limite inferior 

/* ===== Imprime paginador ======*/
$atras = $_SESSION['curpage']-1;
$siguiente = $_SESSION['curpage']+1;
$paginador="";
if ($_SESSION['curpage'] == 1) {
	$paginador .='<li class="page-item disabled">
				<a class="page-link" href="'.$sitePath.'usuarios.php?page='.$atras.'" tabindex="-1">Anterior</a>
    		</li>';
}else{
	$paginador .='<li class="page-item">
				<a class="page-link" href="'.$sitePath.'usuarios.php?page='.$atras.'" tabindex="-1">Anterior</a>
    		</li>';
}
for ($i=1; $i<=$totalPages ; $i++) { 
	if ($i== $_SESSION['curpage']) {
		$paginador .='<li class="page-item active"><span class="page-link">'.$i.'<span class="sr-only">(current)</span>
      </span></li>';
	}else{
	$paginador .='<li class="page-item"><a class="page-link" href="'.$sitePath.'usuarios.php?page='.$i.'">'.$i.'</a></li>';
		
	}
}
if ($_SESSION['curpage'] == $totalPages) {
	$paginador .='<li class="page-item disabled">
				<a class="page-link" href="'.$sitePath.'usuarios.php?page='.$siguiente.'">Siguiente</a>
    		</li>';
}else{
	$paginador .='<li class="page-item">
				<a class="page-link" href="'.$sitePath.'usuarios.php?page='.$siguiente.'">Siguiente</a>
    		</li>';
}

/* ===== Imprime Tabla ======*/
$usuarios = $usrObject->getAllUsuario($limInf,$sizePage);
$tabla="";
foreach ($usuarios as $key)
{
	$tabla .='<tr>
	<th>'.$key['idUsuario'].'</th>
	<td>'.$key['matricula'].'</td>
	<td>'.$key['nombre'].'</td>
	<td>'.$key['apPaterno'].'</td>
	<td>'.$key['apMaterno'].'</td>
	<td>'.$key['eMail'].'</td>
	<td>'.$key['telefono'].'</td>
	<td>'.$key['idEscuela'].'</td>
	<td>
		<a class="btn btn-warning btn-sm update" href="'.$key['idUsuario'].'"><i class="fa fa-pencil"></i></a> 
		<a class="btn btn-danger btn-sm delete" href="'.$sitePath.'usuarios.php?id='.$key['idUsuario'].'&task=del"><i class="fa fa-trash"></i></a></td>

	</tr>';
}




$datoNombre = "";
$datoContra = "";
$datoContra2 = "";
$inputHidden = "";
$accion = "add";

//ELIMINAR REGISTRO
if (isset($_GET['task']) AND isset($_GET['id'])) {
			$control = $usrObject->delUsuario($_GET['id']);
			if ($control) {
				header("Location: usuarios.php?alerta=3");
			}else{
				header("Location: usuarios.php?alerta=4");
			}
	}

if (isset($_POST['task'])) {
	if ($_POST['task'] == "add") {
		$nombre = $_POST['nombre'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];

		$control = $usrObject->insertUsuario($nombre, $pass1);

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