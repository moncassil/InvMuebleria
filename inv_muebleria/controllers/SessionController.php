<?php
class SessionController {
	private $session;

	public function __construct() {
		$this->session = new UsuariosModel();
	}

	public function login($user, $pass) {
	    $user=$this->session->validate_user($user, $pass)[0];
       if(!empty($user)){
       	    $_SESSION['ok']=true;
			$_SESSION['usuario']=$user['usuario'];
			$_SESSION['admin']=($user['tipo_usuario']=='administrador');
			ob_clean();
		    header('Location:./'); 
		}else $_SESSION['ok']=false;
	}

	public function logout() {
		$_SESSION['ok']=false;
		ob_clean();
		header('Location:./');
	}

	public function __destruct() {
		unset($this);
	}
}