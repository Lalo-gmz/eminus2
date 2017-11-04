<?php 

class Usuario extends Connection 
{
	public function contarUsuario(){
		return $this->con->query("SELECT COUNT(*) AS total FROM usuario")->fetch(PDO::FETCH_ASSOC);
	}
	public function insertUsuario($nombre, $pass){
		$query = $this->con->prepare("INSERT INTO usuario (matricula, contrasena) VALUES (?,?)");
		$exc = $query->execute(array($nombre, $pass));

		if ($exc) {
			return true;
		}else{
			return false;
		}

	}

	public function getAllUsuario($limInf,$sizePage){
		return $this->con->query("SELECT * FROM usuario ORDER BY idUsuario DESC LIMIT ".$limInf.",".$sizePage."")->fetchAll(PDO::FETCH_ASSOC);
	}
	public function delUsuario($id){
		$control = $this->con->exec("DELETE FROM usuario WHERE idUsuario = '$id' ");
		if ($control) {
			return true;
		}else{
			return false;
		}
	}

	public function getUsuarioById($id){
		return $this->con->query("SELECT * FROM usuario WHERE idUsuario = '$id'")->fetch(PDO::FETCH_ASSOC);
		if ($control) {
		
		}else{
			return false;
		}
	}

	public function editUsuario($id, $pass, $nombre){
		$query = $this->con->prepare("UPDATE usuario SET matricula=?, contrasena=? WHERE idUsuario = ? ");
		$exc = $query->execute(array($nombre, $pass, $id));

		if ($exc) {
			return true;
		}else{
			return false;
		}
	}				

}

?>
