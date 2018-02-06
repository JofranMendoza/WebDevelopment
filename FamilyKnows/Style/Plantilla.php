<?php
$objPlantilla = new plantilla();
class plantilla {
	
	function __construct() {
		
		session_start();
		include('template/header.php');
		include("Usuario.php");
		include('PHP/config.php');
		include('PHP/Connection.php');
		
		if (isset($_SESSION['firstname'])) {
			include('PHP/Model.php');
		}
		if(isset($_GET['CerrarSesion'])) { // Verifying if the user wants to log off.
			if ($_GET['CerrarSesion'] == true) {
				session_destroy();
				header("Location: index.php");
			}
		}
	}

	function __destruct() {
		include('template/footer.php'); 
	}
}