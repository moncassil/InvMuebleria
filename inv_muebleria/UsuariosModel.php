<?php 
include "Model.php";
class UsuariosModel extends Model {
	public function set( $us_data = array() ) {
		foreach ($us_data as $key => $value) {
			$$key = $value;
		}
		//query para agregar
		$this->query = "";
		$this->set_query();
	}

	public function get( $id  ) {
		//select 
		$this->query ="";
		return $this->get_query();
	}

	public function validate_user($user, $pass) {
		$this->query = "SELECT * FROM Usuarios WHERE Nombre_Usuario = '$user' AND Contraseña =MD5('$pass')";
		return $this->get_query();
	}

	public function del( $ms) {
		$this->query = "DELETE FROM Usuarios WHERE Nombre_Usuario = '$ms'";
		$this->set_query();
	}

	public function __destruct() {
		unset($this);
	}
}