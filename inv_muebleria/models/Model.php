<?php 
abstract class Model {
	private static $db_host = 'localhost';
	private static $db_user = 'admin';
	private static $db_pass = '19441944ww';
	private static $db_name = 'Muebleria';
	private static $db_charset = 'utf8';
	private $conn;
	protected $query;


	private function db_open() {
		$this->conn = new mysqli(
			self::$db_host,
			self::$db_user,
			self::$db_pass,
			self::$db_name
		);
       if($this->conn->connect_errno)
			var_dump($this->conn->connect_errno);
		$this->conn->set_charset(self::$db_charset);
	}

	private function db_close() {
		$this->conn->close();
	}

	protected function set_query() {
		//echo '<script>alert("'.$this->query.'");</script>';
		$this->db_open();
		$this->conn->query($this->query);
		if($this->conn->error){
		  echo '<script>alert("'.$this->query.'\n'.$this->conn->error.'");</script>';
		  echo $this->query.'<br><br>'.$this->conn->error;
		  echo $this->conn->error;
		}
		$this->db_close();
	}

	protected function get_query() {
	    //echo '<script>alert("'.$this->query.'");</script>';
		$this->db_open();
        $rows=array();
		$result = $this->conn->query($this->query);
		if($this->conn->error){
		  echo '<script>alert("'.$this->query.'\n'.$this->conn->error.'");</script>';
		  echo $this->query.'<br><br>'.$this->conn->error;
		}
		while( $rows[] = $result->fetch_assoc() );
		$result->close();
		$this->db_close();
		array_pop($rows);
		return $rows;
	}
}