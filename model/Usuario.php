<?php 
require "Connection.php";
class Usuario extends Connection 
{
	public function insertUsuario($nombre, $pass){
		$query = $this->con->prepare("INSERT INTO usuario (matricula, contrasena) VALUES (?,?)");
		$exc = $query->execute(array($nombre, $pass));

		if ($exc) {
			return true;
		}else{
			return false;
		}

	}	

}

?>
