<?php

$conn = new mysqli("localhost", "root", "","bd_lab");

if ($conn->connect_error) 
	die("conexion fallada".$conn->connect_error);


?>