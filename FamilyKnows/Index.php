<?php 
include("Style/Plantilla.php");


if ($_POST){
	$usuario = trim(isset($_POST['usuario'])?$_POST['usuario']:" ");
	$pass = trim(isset($_POST['password'])?$_POST['password']:" ");
	$pass2 = md5($pass);
	$sql = "SELECT UserID, Firstname, Lastname, Score from Users WHERE Username ='$usuario' && Password ='$pass2'";

	$datos = mysqli_query(Connection::obtainInstance(), $sql) or die("Ha ocurrido un error Intente loguearse de nuevo");
	if (mysqli_num_rows($datos) > 0) { // The user has logged in
		$fila = mysqli_fetch_assoc($datos);
		$firstname = $fila['Firstname'];
		$lastname = $fila['Lastname'];
		$id = $fila['UserID'];
		$_SESSION['firstname'] = $firstname;
		$_SESSION['lastname'] = $lastname;
		$_SESSION['id'] = $id;

		header('Location:MenuPrincipal.php');
	} else { // The user has not logged in
		echo "<script type='text/javascript'>alert('Usuario o Clave Incorrectos');</script>"; 
	}

}
?>
	<div id='divIniciarSesion' >
		<form method='POST' action='index.php' name='frm'>
			<table id='divInicioTable' align='center'>
				<tr>
					<td>
						<label>Username</label>
					</td>
					<td>
						<div class="input-control text">
							<input type="text" name='usuario' value="" placeholder="Insert your username" autocomplete='off'/>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
					</td>
					<td>
						<div class="input-control password">
							<input type="password" name='password' value="" placeholder="Insert your password"/>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='4'><hr ></td>
				</tr>			
				<tr>
					<td colspan='2' align='center'>
						<button name='login' ><span>Login</span></button>
					</td>
				</tr>

				<tr><td colspan='2'><hr></td></tr>
				<tr>
					<td align='center' colspan='2'><a href='CrearUsuario.php'>Create a new user</a></td>
				</tr>
			</table>
		</form>
	</div>



