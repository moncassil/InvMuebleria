<?php 
class ViewController {
	private static $view_path = './views/';

	public function view($view) {
		require_once( self::$view_path . 'header.php' );
		if($_SESSION['ok'])
		   require_once( self::$view_path . 'nav.php' );
		require_once( self::$view_path . $view . '.php' );
	    if($_SESSION['ok'])
		   require_once( self::$view_path . 'footer.php' );
	}

	public function __destruct() {
		unset($this);
	}
}