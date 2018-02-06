<?php 
	include('Style/Plantilla.php');
	isset($_SESSION['firstname']) ? '' : header('Location: Index.php'); // Verifying if the user is logged in. If not, it will be redirected to the login/index page.

    if(isset($_SESSION['firstname'])){		
		unset($_SESSION["usuario1"]);
		unset($_SESSION["usuario2"]);
		unset($_SESSION["usuario3"]);
		unset($_SESSION["usuario4"]);
		unset($_SESSION["usuario5"]);
		unset($_SESSION["usuario6"]);
	}
?>

			<form method="POST" name="formJuego" action="Juego.php" onsubmit="return empezar();">
				<div id='divCantidadJugadores' class='bg-teal no-desktop'>
					<h4>How many players?</h4>
					<div class='input-control default-style' id='divContentCantidadJugadores'>
						<input id='cantidad' type='number' value='2'  min='2' max='7' step='1' readonly />
						<button onclick="sumarCantidad();" type="button">+</button>
						<br/>
						<table id='table' class='bg-teal' align='center'>
							<tr>
								<td>
									Insert the username of participant #2
									<br/>
									<input type='text' name="usuario[]" required placeholder='Username of participant #2'/>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div id='divButton'>
					<button type="submit" name="comenzar" id="btnStart" class='large'><span>Start</span></button>
				</div>
			</form>