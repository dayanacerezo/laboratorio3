<?php

$correo=$_POST["txtcorreo"];
$password=sha1($_POST["txtpassword"]);

$rusuario=$_POST['chkusuario'];

if ($rusuario=='recordar')
	setcookie('Usuario', $correo, time()+3600);
$rpassword=$_POST['chkpassword'];
if ($rpassword=='recordar')
	setcookie('Password',$password,time()+3600);

?>