<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta autor="Ricardo Emmanuel Rios Alvarado">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
    <script type="text/javascript" src="js/js.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>Acceso Vehicular - Entrada</title>
</head>
<body>	
    <div id="acciones">
    	<button type="button" class="btn btn-primary" onclick="irrentrada()">Registro Entrada</button>
    	<button type="button" class="btn btn-primary" onclick="irrsalida()">Registro Salida</button>
    	<button type="button" class="btn btn-primary" onclick="irinforme()">Informe</button>
    </div>

    <div id="divregistro">
    	<form id="formregistro" method="post" action="envioEntrada.php">
    		<h1 align="center">Registrar Entrada</h1>
			<div class="input-group mb-3" id="divplaca">
      			<div class="input-group-prepend">
        			<span class="input-group-text" id="inputGroup-sizing-default">Número de placa</span>
				</div>
  				<input name="placa" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
			</div>

			<div class="input-group mb-3" id="divfecha">
				<div class="input-group-prepend">
    				<span class="input-group-text" id="inputGroup-sizing-default">Fecha Entrada</span>
  				</div>
  				<input type="date" name="fecha_de_entrada" required>
  			</div>

  			<div class="input-group mb-3" id="divhora">
				<div class="input-group-prepend">
    				<span class="input-group-text" id="inputGroup-sizing-default">Hora Entrada</span>
  				</div>
  				<input type="time" name="hora_de_entrada" required>
  			</div>

			<div class="input-group mb-3" id="divtipovehiculo">
  				<div class="input-group-prepend">
    				<label class="input-group-text" for="selectvehiculo">Vehículo</label>
  				</div>
  				<select class="form-select" id="selectvehiculo" name="vehiculo" required>
        			<option selected>Selecciona...</option>
    				<option value="Residente">Residente</option>
    				<option value="No residente">No residente</option>
    				<option value="Oficial">Oficial</option>
  				</select>
    		</div>

    		<div id="botonera">
      			<button type="submit" class="btn btn-primary">Registrar</button>
    		</div>  
    	</form>
    </div>
</body>
</html>