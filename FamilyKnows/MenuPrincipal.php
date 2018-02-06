<?php
	include("Style/Plantilla.php");
	isset($_SESSION['firstname']) ? '' : header('Location: Index.php'); // Verifying if the user is logged in. If not, it will be redirected to the login/index page.
?>
		
<div id='divPuntaje' class='ribbed-gray fg-white'>
	<button onclick='score();' class='command-button' style='text-align: center;'><span>Score</span></button>
</div>

<div id='divAyuda' class='ribbed-gray fg-white'>
	<button onclick='ayuda();' class='command-button' style='text-align: center;'><span>Help</span></button>	
</div>
<button id="btnPlay" onclick="jugar();" style=' float: right;' class='large'><span>Play!</span></button>

