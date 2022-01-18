<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta autor="Ricardo Emmanuel Rios Alvarado">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/js.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Acceso Vehicular - Salida</title>
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

    <div id="divsalida">
		<form id="formsalida" method="post" action="envioSalida.php">
			<h1 align="center">Registrar Salida</h1>
			<div class="input-group mb-3" id="divsplaca">
      			<div class="input-group-prepend">
        			<span class="input-group-text" id="inputGroup-sizing-default">Número de placa</span>
				</div>
  				<input name="placas" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
			</div>

  			<div class="input-group mb-3" id="divshora">
				<div class="input-group-prepend">
    				<span class="input-group-text" id="inputGroup-sizing-default">Hora Salida</span>
  				</div>
  				<input type="time" name="hora_de_salida" required>
  			</div>

    		<div id="divbtncalcular">
      			<button type="submit" class="btn btn-primary">Calcular Cobro</button>
    		</div>
    	</form>
    </div>
</body>
</html>