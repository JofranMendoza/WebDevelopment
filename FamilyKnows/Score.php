<?php 
	include('Style/Plantilla.php');
	isset($_SESSION['firstname']) ? '' : header('Location: Index.php'); // Verifying if the user is logged in. If not, it will be redirected to the login/index page.
    $model = new Model();

?>
<div id='divScore'>
	<table align='center'>
		<tr>
			<th class='bg-red' colspan='2'><h2><span>Score<span></h2></th>
		</tr>
		<! AQUI VA CONTENIDO DEL PUNTAJE >
		<tr>
			<td>
				<span><?php $model->listData(); ?><span>
			</td>
			<td>
				<span><?php $model->listScore(); ?><span>
			</td>
		</tr>
		<!AQUI VA CONTENIDO DEL PUNTAJE >
		<tr>
			<td colspan='2' align='right'>
				<button onclick='home();' class='large' ><span>Return to home</span></button>
			</td>
		</tr>
	</table>
</div>
