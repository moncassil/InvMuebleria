<?php 
class Router {
	private $route;

	public function __construct() {		
		$control=new ViewController();
		$this->route =isset($_GET['route'])?$_GET['route']:'';
		if($_SESSION['ok']){
		  if($_SESSION['admin'])
		  	$this->admin();
		  else
		  	$this->empleado();
		}else
		   $this->nologin();	
    }


    public function nologin(){
        $control=new ViewController();
        switch ($this->route){
            case'':
                $control->view('login');
                break;
            case'olvidandoContrasena':
                $control->view($this->route);
                break; 
            default:
                $control->view('error404');     
                break;
        }        
    }

    public function comun($value=''){
        $control=new ViewController();
        switch ($this->route){
            case'':
            case'inicio':
                $this->route=($_SESSION['admin'])?'gerente':'articulos';
            case'contacto':
            case'localizacion':
            case'misionyvision':
            case'politicas':
            // agregar archvo que podra abrir gerente y empleado
            // case'nombre de archivo'
                $control->view($this->route);    
                break; 
            case 'salir':
                $session=new SessionController();
                $session->logout();
                break;          
            default:
                $control->view('error404');     
                break;
        }
    }
    public function admin(){
    	$control=new ViewController();
        switch ($this->route){ 
            case'usuarios':
            case'articulos':
            case'categorias':
            // agregar archvo que podra solo abrir
            // case'nombre de archivo'
                $control->view($this->route);
                break;
        	default:
                $this->comun();		
        		break;
        }        
    }

    public function empleado(){
    	$control=new ViewController();
        switch ($this->route){
            // agregar archvo que podra empleado
            // case'nombre de archivo' 
        	default:
                $this->comun();		
        		break;
        }        
    }

	public function __destruct() {
		unset($this);
	}
}