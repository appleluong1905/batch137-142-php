<?php 
	class Connect {
		private $server = 'localhost';
		private $username = 'root';
		private $password = 'none';
		private $database = 'batch137_142';
		public function connectDB(){
			$connect = mysqli_connect($this->server, $this->username, $this->password, $this->database);
			mysqli_set_charset($connect,"utf8");
			// check connect
			if (!$connect) {
		    die("Connection failed: " . mysqli_connect_error());
			}
			return $connect;
		}
	}
?>