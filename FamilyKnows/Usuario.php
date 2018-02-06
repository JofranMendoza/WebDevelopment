<?php 
class Usuario {
	private $firstname = '';
	private $lastname = '';
	private $username = '';
	private $password='';

	function __construct() {
		if($_POST){
			if (isset($_POST['txtNombre']) && trim($_POST['txtNombre']) &&
				isset($_POST['txtApellido']) && trim($_POST['txtApellido']) &&
				isset($_POST['txtUsuario']) && trim($_POST['txtUsuario']) &&
				isset($_POST['txtPass']) && trim($_POST['txtPass'])) {

				$password2 = md5($_POST['txtPass']);
				$this->firstname = $_POST['txtNombre'];
				$this->lastname = $_POST['txtApellido'];
				$this->username = $_POST['txtUsuario'];
				$this->password = $password2;
				$this->guardar();
				
				header("Location: Index.php");
			}
		}
	}
	function __get($atributo){ // Getter
		if(isset($this->$atributo)){
			return $this->$atributo;
		}else{
			return "N/A";
		}
	}

	function __set($atributo, $valor){ // Setter
		if(isset($this->$atributo)){
			$this->$atributo = $valor;
		}else{
			echo "This attribute does not exist.";
		}
	}

	function guardar (){
		$sql = "INSERT INTO users (Firstname, Lastname, Username, Password, Score) 
		VALUES ('{$this->firstname}','{$this->lastname}','{$this->username}','{$this->password}',0)";
		
		echo "<script>alert('{$this->firstname},{$this->lastname},{$this->username},{$this->password}');</script>";

		$connection = Connection::obtainInstance();
		mysqli_query($connection, $sql);
		$this->id = mysqli_insert_id($connection);
	}
}
