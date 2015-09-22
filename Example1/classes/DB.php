<?php 

class DB {

	Private $_mysqli,
			$_query,
			$_results = array(),
			$_count=0;

	public static $instance;

	
	Public static function getInstance(){

		// if '!isset' means = if the perticular this is set or not
		// 'self' means = referencing this perticular class

		if(!isset(self::$instance))
		{
			self::$instance = new DB();
		}
		return self::$instance;

	}

		

	Public function __construct(){

			$this->_mysqli = new mysqli('127.0.0.1','root','','singleton');
				
				if($this->_mysqli->connect_error){

					die($this->_mysqli->connect_error);	
				}
		}

	Public function query($sql) {
		if ($this->_query  = $this->_mysqli->query($sql)) {
			
			while($row = $this->_query->fetch_object()) {
				$this->_results[] = $row;
				}
			
				$this->_count = $this->_query->num_rows;
			}

			return $this;
		}


	Public function results(){
		return $this->_results;
	}


	Public function count(){
		return $this->_count;
	}

}


?>
