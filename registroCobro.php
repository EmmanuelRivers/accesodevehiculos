<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta autor="Ricardo Emmanuel Rios Alvarado">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/js.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Acceso Vehicular - Cobro</title>
</head>
<body>
	<?php
        include('conexion.php');
        session_start();
    ?>

	<div id="acciones">
    	<button type="button" class="btn btn-primary" onclick="irrentrada()">Registro Entrada</button>
    	<button type="button" class="btn btn-primary" onclick="irrsalida()">Registro Salida</button>
    	<button type="button" class="btn btn-primary" onclick="irinforme()">Informe</button>
    </div>

    <div id="divcobro">
		<form id="formcobro" action="envioCobro.php" method="post">
			<h1 align="center">Acceso vehicular</h1>
				<div class="input-group mb-3" id="divcplaca">
      				<div class="input-group-prepend">
        				<span class="input-group-text" id="inputGroup-sizing-default">Número de placa</span>
					</div>
  					<input name="npl" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" maxlength="10"required value="<?php 
					$placa = $_GET['pl'];
					echo $placa;?>">
				</div>
				<div class="input-group mb-3" id="divcplaca">
      				<div class="input-group-prepend">
        				<span class="input-group-text" id="inputGroup-sizing-default">Hora de salida</span>
					</div>
  					<input name="hsalida" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php 
					$salida = $_GET['hs'];
					echo $salida;?>">
				</div>
				<div class="input-group mb-3" id="divctiempo">
      				<div class="input-group-prepend">
        				<span class="input-group-text" id="inputGroup-sizing-default">Tiempo estacionado (min)</span>
					</div>
  					<input name="testacionado" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required value="<?php 
					$tiempo = $_GET['time']; echo $tiempo;?>">
				</div>
				<div class="input-group mb-3" id="divcpago">
      				<div class="input-group-prepend ">
        				<span class="input-group-text" id="inputGroup-sizing-default">Cantidad a pagar ($)</span>
					</div>
  					<input name="pago" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" maxlength="10"required value="<?php 
					$tpago = $_GET['pg']; echo $tpago;?>">
				</div>
			<div id="btncobro">
				<button type="submit" class="btn btn-primary">Cobrar</button>
			</div>
    	</form>
    </div>
</body>
</html>