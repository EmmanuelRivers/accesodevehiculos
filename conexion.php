<?php
	$enlace= new mysqli("localhost","empleado01","GGLp0s31d0n","accesovehiculos");
//variableParaLaConexión=("servername","nombreDeUsuario","contraseña","BaseDeDatos");

	if($enlace->connect_error){
		die("Conexión fallida: ".$enlace->connect_error);
	}
	
	return $enlace;
?>