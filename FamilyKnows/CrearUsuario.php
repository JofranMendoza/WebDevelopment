<?php 

include("Style/Plantilla.php");

if($_POST){
	$usuario = new Usuario();
}
?>
<div id='divCrearUsuario'>
	<form method='POST' action='' name='frm' onsubmit="return validacion();">
		<fieldset>
			<legend>Creating new user</legend>
			<table>
				<tr>
					<td><label>First-name</label></td>
					<td>
						<div class="input-control text">
							<input type="text" name='txtNombre' placeholder="Insert your firstname"/>
						</div>
					</td>
				</tr>
				<tr>
					<td><label>Last-name</label></td>
					<td>
						<div class="input-control text">
							<input type="text" name='txtApellido' placeholder="Insert your lastname"/>
						</div>
					</td>
				</tr>
				<tr>
					<td><label>Username</label></td>
					<td>
						<div class="input-control text">
							<input type="text" name='txtUsuario' placeholder="Insert your username"/>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<label>Password</label>
					</td>
					<td>
						<div class="input-control text">
							<input type="password" name='txtPass' placeholder="Insert a password" autocomplete='off'/>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='2' align='center'>

					</td>
				</tr>
			</table>
			<hr>
			<div class="input-control text" align='center'>
				<button type="submit"><span>Register</span></button>
			</div>
		</fieldset>
	</form>
</div>