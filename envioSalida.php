<?php
	session_start();
	include('conexion.php');

	$noplaca = $_POST['placas'];
	$hosalida = strtotime($_POST['hora_de_salida']);
	$lhosalida = date('H:i:s',$hosalida);
	

	$sql = "SELECT hora_entrada, tipo_vehiculo FROM cotejos WHERE numero_placa = $noplaca";
	$datos = $enlace->query($sql);
	$row = $datos->fetch_array(MYSQLI_ASSOC);
	$entrada = $row['hora_entrada'];
	$entrada = strtotime($entrada);
	$vehiculo = $row['tipo_vehiculo'];

	$minutos = ($hosalida - $entrada) / 60;

	if($vehiculo == 'Oficial'){
		$pago = 0;
	}else if($vehiculo == 'Residente'){
		$pago = 1*$minutos;
	}else if($vehiculo == 'No residente'){
		$pago = 3*$minutos;
	}

	header('Location: http://localhost/accesodevehiculos/registroCobro.php?time='.$minutos.'&pl='.$noplaca.'&pg='.$pago.'&hs='.$lhosalida);

	mysqli_close($enlace);
?>