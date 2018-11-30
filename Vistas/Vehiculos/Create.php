<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO VEHICULOS</title>
</head>
<body>
	<H1>Registrar Vehiculos</H1>
<form action="" method="POST">
	<label>Placa</label>
	<input required="" type="text" name="Vehiculos[Placa]"values=""/>

	<label>Marca</label>
	<input required="" type="text" name="Vehiculos[Marca]"values=""/>

	<label>Capacidad Asientos</label>
	<input required="" type="text" name="Vehiculos[CapacidadAsientos]"values="">

	<label>FvSeguro</label>
	<input required="" type="datetime-local" name="Vehiculos[FvSeguro]"values=""/>

	<label>FvTecnomecanica</label>
	<input required="" type="datetime-local" name="Vehiculos[FvTecnomecanica]"values=""/>

	<label>Foto Vehiculos</label>
	<input required="" type="text" name="Vehiculos[FotoVehiculos]"values=""/>

	<button type="submit"> CREAR VEHICULO </button>
</form>
</body>
</html>