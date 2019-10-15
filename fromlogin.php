<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<body>
	<form method="POST" action="autenticar.php">
		<label for="txtcorreo">Usuario</label>
		<input type="text" name="txtcorreo" value="<?php if(isset($_COOKIE['Usuario']))

			{
				echo $_COOKIE['Usuario'];
			}
		?>"><br><br>
		<label for="txtpassword">Contraseña</label>
		<input type="password" name="txtpassword"><br><br>
		<input type="checkbox"  name="chkusuario" value="recordar"<?php if (isset($_COOKIE['Usuario'])) 
		{
		echo 'checked="checked"';
		unset($_COOKIE['Usuario']);	
		}
		?> 
		>Recordar usuario<br><br>
		<input type="checkbox"  name="chkpassword" value="recodar"

		<?php if (isset($_COOKIE['Password'])) 
		{
		echo 'checked="checked"';
		unset($_COOKIE['Password']);	
		}
		?> 
		> Recordar contraseña <br><br>

		<input type="submit" name="button" id="button" value="Ingresar" >
	</form>
</body>
</html>