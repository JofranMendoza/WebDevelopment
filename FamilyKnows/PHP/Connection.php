<?php
	class Connection {
		private static $instance = null;
		private static $connection = null;

		private function __construct() {	}

		public static function obtainInstance(){
			if(self::$instance == null){ // Singleton pattern
				self::$instance = new Connection();
				self::$connection = mysqli_connect(db_host,db_user,db_pass,db_name)
					or die ("Connection error: ".mysqli_connect_error());
			}
			return self::$connection;
		}
		
		public function __destruct(){
			mysqli_close(Connection::obtainInstance());
		}
	}
?>