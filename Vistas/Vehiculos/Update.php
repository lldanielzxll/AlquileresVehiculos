<!DOCTYPE html>
<html>
<head>
    <title>ACTUALIZAR VEHICULOS</title>
</head>
<body>
	<h1>Registrar Vehiculo</h1>
	<form action="" method="POST">
		
	<label>Placa</label>
	<input type="text" name="Vehiculos[Placa]" value="<?= $Vehiculos->Placa ?>">

	<label>Marca</label>
	<input type="text" name="Vehiculos[Marca]" value="<?= $Vehiculos->Marca ?>">

	<label>Capacidad Asientos</label>
	<input type="text" name="Vehiculos[CapacidadAsientos]" value="<?= $Vehiculos->CapacidadAsientos ?>">

	<label>FvSeguro</label>
	<input type="datetime-local" name="Vehiculos[FvSeguro]" value="<?= $Vehiculos->FvSeguro ?>">

	<label>FvTecnomecanica</label>
	<input type="datetime-local" name="Vehiculos[FvTecnomecanica]" value="<?= $Vehiculos->FvTecnomecanica ?>">

	<label>Foto Vehiculos</label>
	<input type="text" name="Vehiculos[FotoVehiculos]" value="<?= $Vehiculos->FotoVehiculos ?>">

	<input type="hidden" name="id" value="<?= $Vehiculos->IdVehiculos ?>">

	<button type="submit"> ACTUALIZAR VEHICULO </button>
	</form>
	
</body>
</html>

