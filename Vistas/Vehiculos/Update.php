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
		
	<label style="color:#F90000;">Placa</label>
	<input type="text"  class="form-control" maxlength="6" name="Vehiculos[Placa]" value="<?= $Vehiculos->Placa ?>">

	<label style="color:#F90000;">Marca</label>
	<input type="text" class="form-control" maxlength="45" name="Vehiculos[Marca]" value="<?= $Vehiculos->Marca ?>">

	<label style="color:#F90000;">Capacidad Asientos</label>
	<input type="number" class="form-control" name="Vehiculos[CapacidadAsientos]" value="<?= $Vehiculos->CapacidadAsientos ?>">

	<label style="color:#F90000;">FvSeguro</label>
	<input class="custom-select" type="date"  required="" name="Vehiculos[FvSeguro]" value="<?= $Vehiculos->FvSeguro ?>">

	<label style="color:#F90000;">FvTecnomecanica</label>
	<input class="custom-select" type="date"  required="" name="Vehiculos[FvTecnomecanica]" value="<?= $Vehiculos->FvTecnomecanica ?>">

	<label style="color:#F90000;">Foto Vehiculos</label>
	<input type="text" class="form-control" maxlength="45" name="Vehiculos[FotoVehiculos]" value="<?= $Vehiculos->FotoVehiculos ?>"><br><br>

	<input type="hidden" name="id" value="<?= $Vehiculos->IdVehiculos ?>">
	</div>
	<center>
	<button class="btn btn-info" type="submit"> ACTUALIZAR VEHICULO </button><br><br>
	</center>
	</form></center>
		<center><a href="index.php?c=Vehiculos&a=admin" class="btn btn-outline-danger">volver</a> </center>
</body>
</html>

