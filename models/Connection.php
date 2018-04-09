<?php
	class Connection{

		public $conn;

		public function __construct() {
			$servername = "localhost";
			$username = "root";
			$password = "123456";
			$dbname = "php_08";

			// Create connection
			$this->conn = new mysqli($servername, $username, $password, $dbname);
			$this->conn->set_charset("utf8");
			// Check connection
			if ($this->conn->connect_error) {
			    die("Connection failed: " . $this->conn->connect_error);
			}
		}
	}

 ?>
