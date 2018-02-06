<!DOCTYPE html>
<html>
	<head >
		<meta content="text/html;" http-equiv="content-type" charset='utf-8'>
		<link rel="icon" type="image/png" href="Style/img/logo_boton.png">
		<title>Family Knows</title>
		<script type="text/javascript" src="Style/js/familyknows.js"></script>
		<link rel='stylesheet' href='Style/css/design.css'>		
		<link rel='stylesheet' href='Style/css/metro-bootstrap.css'>
	</head>
	<body class='metro '>
		<header class="ribbed-teal" >
			<div id='divHeader'>
			<?php if (isset($_SESSION['firstname'])): ?> <button id="btnLogOut" onclick="window.location='?CerrarSesion=true'"><span>Log out</span></button> <?php endif; ?>
				
				<ul>
					<li id='imagenLogo' ><a href='MenuPrincipal.php'><img src='Style/img/logo_boton.png'></a></li>
					<li><h3>Family Knows</h3></li>
				</ul>
			</div>
		</header>
		<div id='divBody'>