<?php 

	include('Style/Plantilla.php');
	isset($_SESSION['firstname']) ? '' : header('Location: Index.php'); // Verifying if the user is logged in. If not, it will be redirected to the login/index page.
	$model = new Model();

	if ($_POST) {
		if(isset($_POST['candidato'])){
			$username = trim(isset($_POST['candidato']) ? $_POST['candidato'] : " ");
			$model->addPointTo($username);
		}
	}
	function verifyUsers($username, $userNo) {
		$model = new Model();
		if ($username != "") {
			if ($model->verify($username)) {
				$_SESSION['usuario'.$userNo] = "<label class='check'><input type='radio' name='candidato' id='usuarios' value='{$username}'> {$username}</input></label><br>";
			} else {
				echo <<<SCRIPT
				<script>
					window.location = 'Menu.php';
					alert("'{$username}' is not registered.");
					
				</script>
SCRIPT;
			}
		}
	}
?>
<div id='divJuego'>
	<div id='divNombreJugador'>
		<h2><?php echo "<b>Judge: </b>".$_SESSION['firstname']." ".$_SESSION['lastname']; ?></h2>
	</div>
	<div id='divPreguntas' >
		<span>
		<?php 
			$arreglo2 = $model->listQuestions();
			$posicion = (array_rand($arreglo2,1));
			echo $arreglo2[$posicion];
		?>
		<span>
	</div>
	<form  action="Juego.php" method="POST" name="form">
	<?php
		if($_POST){
			if (isset($_POST['usuario'])) {
				foreach ($_POST['usuario'] as $i => $user) {
					if (isset($user) && !empty($user)){
						$userValidated = trim(isset($user) ? $user : " ");
						verifyUsers($userValidated, $i+1);
					}
				}
			}
		} 
		for ($i=1; $i <= 6 ; $i++) { 
			if(isset($_SESSION['usuario'.$i])){
				echo $_SESSION['usuario'.$i];
			}	
		}
	?>
	<div id='divResultado'>
		<table>
			<tr >
				<td><button type="button" onClick="window.location='Juego.php'"><img width='200px' src='Style/img/pregunta_incorrecta_btn.png'></button></td>
				<td><button type="submit"><img width='200px' src='Style/img/pregunta_correcta_btn.png'></button></td>
			</tr>
			<tr >
				<td><button type="button" onclick="salir();" class='default'><span>Salir<span></button></td>
				<td><button class='default'><span>Siguiente<span></button></td>
			</tr>
		</table>
	</div>
</form>
</div>


