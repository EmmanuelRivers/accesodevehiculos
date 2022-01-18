<?php
	session_start();
	include('conexion.php');

	$placa = $_POST['npl'];
	$salida = strtotime($_POST['hsalida']);
	$salida = date('H:i:s',$salida);
	$estacionado = $_POST['testacionado'];
	$pago = $_POST['pago'];

	$sqlactualizar = "UPDATE cotejos SET hora_salida = '$salida', tiempo_estacionado = '$estacionado', pago = '$pago', b_pagado = 'si' WHERE numero_placa = '$placa'";
	if(mysqli_query($enlace, $sqlactualizar)){
    	header('Location: http://localhost/accesodevehiculos/home.php');
    }else{
    	echo "Error: ".$sqlactualizar."<br>".mysqli_error($enlace);
    }
?>