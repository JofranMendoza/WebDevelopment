<?php
	include('Style/Plantilla.php');
	isset($_SESSION['firstname']) ? '' : header('Location: Index.php'); // Verifying if the user is logged in. If not, it will be redirected to the login/index page.
?>
<div id='divCuadroTexto' class="ribbed-gray on-phone">
	<span class='fg-white'>
		<!-- Si esta encerrado en span, se vera en un mobile con un tipo de letra 
		moderado pueden modificarlo en el css -->
		Here goes a brief tip to those who are going to play.
		Aqui va una ayudita para el que va a jugar	
	</span>
	
</div>
<div id='divButton' align='right'>
	<button onclick='home();' class='large'><span>Return to home</span></button>
</div>
