<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ACTUALIZAR VEHICULOS</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body background="iconos/ferrari.png">

	<blockquote class="blockquote text-center">
		<h1 class="display-5">Actualizar Vehiculos</h1>
	</blockquote>

	<div id="centro" >

	<center><form action="" method="POST">
		
	<label>Placa</label>
	<input type="text"  class="form-control" maxlength="6" name="Vehiculos[Placa]" value="<?= $Vehiculos->Placa ?>">

	<label>Marca</label>
	<input type="text" class="form-control" maxlength="45" name="Vehiculos[Marca]" value="<?= $Vehiculos->Marca ?>">

	<label>Capacidad Asientos</label>
	<input type="number" class="form-control" name="Vehiculos[CapacidadAsientos]" value="<?= $Vehiculos->CapacidadAsientos ?>">

	<label>FvSeguro</label>
	<input class="custom-select" type="datetime-local" name="Vehiculos[FvSeguro]" value="<?= $Vehiculos->FvSeguro ?>">

	<label>FvTecnomecanica</label>
	<input class="custom-select" type="datetime-local" name="Vehiculos[FvTecnomecanica]" value="<?= $Vehiculos->FvTecnomecanica ?>">

	<label>Foto Vehiculos</label>
	<input type="text" class="form-control" maxlength="45" name="Vehiculos[FotoVehiculos]" value="<?= $Vehiculos->FotoVehiculos ?>"><br><br>

	<input type="hidden" name="id" value="<?= $Vehiculos->IdVehiculos ?>">
	</div>
	<center>
	<button class="btn btn-info" type="submit"> ACTUALIZAR VEHICULO </button>
	</center>
	</form></center>
	
</body>
</html>

