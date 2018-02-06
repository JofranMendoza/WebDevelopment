<?php 
class Model {
	
	function __construct() {}

	private function executeSQL($sql) {
		return mysqli_query(Connection::obtainInstance(), $sql);
	}
	public function listData() {
		$sql = "SELECT Firstname, Lastname, Score FROM Users";
		$datos = $this->executeSQL($sql);
		while($fila = mysqli_fetch_array($datos)){
			echo"{$fila['Firstname']} {$fila['Lastname']}<br/<br/>";
		}
	}

	public function listScore() {
		$sql = "SELECT Score FROM Users";
		$datos = $this->executeSQL($sql);
		while($fila = mysqli_fetch_array($datos)){
			echo"{$fila['Score']} Pts<br/<br/>";
		}
	}
	public function listQuestions(){
		$sql ="SELECT Question FROM Questions";
		$datos = $this->executeSQL($sql);
		$arreglo = array();
		while($fila =mysqli_fetch_array($datos)){
			$arreglo[] = $fila['Question'];
		}
		return $arreglo;
	}
	
	public function verify($username) { //Verify if there is an account with that username;
		$sql = "SELECT * FROM Users WHERE Username = '{$username}'";
		$rs = $this->executeSQL($sql);
		$filas = mysqli_num_rows($rs);
		if($filas > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function addPointTo($username) {
		$sql = "UPDATE Users set Score = Score+1 WHERE Username ='{$username}'";
		$this->executeSQL($sql) or die ("Error to insert data");
		echo "<script>alert('Point given to {$username}!');</script>";
	}
}
?>