<?php 
class UsuariosModel extends Model {
	public function create($usuario,$contrasena,$tipo_usuario){
		$this->query = "INSERT INTO usuarios (usuario, contrasena, tipo_usuario) values('$usuario','$contrasena','$tipo_usuario');";

		$this->set_query();
	}

	public function read($user = '') {
		$this->query = ($user == '')
							?"SELECT * FROM usuarios"
							:"SELECT * FROM usuarios WHERE usuario = '$user'";
		
		return $this->get_query();
	}

	public function update($id,$contrasena,$tipo_usuario){
		$this->query = "UPDATE usuarios SET contrasena='$contrasena',tipo_usuario='$tipo_usuario'";
		$this->set_query();
	}

	public function delete($usuario) {
		$this->query = "DELETE FROM Usuarios WHERE usuario = '$usuario'";
		$this->set_query();
	}

	public function validate_user($usuario, $contrasena) {
		$this->query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena ='$contrasena'";
		return $this->get_query();
	}

	public function __destruct() {
		unset($this);
	}
}