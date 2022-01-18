<?php
	session_start();
	include('conexion.php');

	$noplaca = $_POST['placa'];
	$feentrada = strtotime($_POST['fecha_de_entrada']);
	$feentrada = date('Y-m-d',$feentrada);
	$hoentrada = strtotime($_POST['hora_de_entrada']);
	$hoentrada = date('H:i:s',$hoentrada);
	$tvehiculo = $_POST['vehiculo'];

	$sqlinsert = "INSERT INTO cotejos(numero_placa, fecha_entrada, hora_entrada, tipo_vehiculo, b_pagado) VALUES ('$noplaca', '$feentrada', '$hoentrada', '$tvehiculo', 'no')";
	if(mysqli_query($enlace, $sqlinsert)){
    	echo "Información guardada satisfactoriamente";
    	header('Location: http://localhost/accesodevehiculos/home.php?registrado=si');
    }else{
    	echo "Error: ".$sqlinsert."<br>".mysqli_error($enlace);
    }

    mysqli_close($enlace);
?>