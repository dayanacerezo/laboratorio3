<?php session_start(); 
    include('conexion.php');
    $correo=$_POST["txtcorreo"];
    $password=sha1($_POST["txtpassword"]);
	$sql = "Select* from usuarios WHERE correo='$correo' AND password='$password' ";
	$resultado=$conn->query($sql); 
	if ($fila = $resultado->fetch_assoc())
		{
		$_SESSION['nombres']=$fila['nombres'];
		$_SESSION['apellidos']=$fila['apellidos'];
		$_SESSION['nivel']=$fila['nivel'];
		header("Location:fintroduccion.html");
		}
		else
		{?>
		<div style="color: red; text-align: center;"> Datos de Autenticación Equivocados </div>

		<?php } 
?>
