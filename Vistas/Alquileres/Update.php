<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>update</title>
</head>
<body>

	<form action="" method="post">
		<label>Ciudad:</label>
		<input   type="text"   name="Alquileres[Ciudad]" value="<?= $Alquileres->Ciudad ?>" maxlength="45" required=""/><br><br>		
		
		
		<label>ValorDia:</label>
		
				<input type="number" name="Alquileres[ValorDia]" value="<?= $Alquileres->ValorDia ?>" required=""
		/><br><br>
		
		<label>FechaRecogida:</label>
		<input type="datetime-local" name="Alquileres[FechaRecogida]" value="<?= $Alquileres->FechaRecogida ?>" required=""/><br><br>

		<label>FechaEntrega:</label>
		<input type="datetime-local" name="Alquileres[FechaEntrega]" value="<?= $Alquileres->FechaEntrega ?>" required=""/><br><br>

		<label>OficinaDeRetiro:</label>
		<input   type="text"   name="Alquileres[OficinaDeRetiro]" maxlength="45" value="<?= $Alquileres->OficinaDeRetiro ?>" required=""/><br><br>	

		<label>OficinaDeDevolucion:</label>
		<input   type="text"   name="Alquileres[OficinaDeDevolucion]" maxlength="45" value="<?= $Alquileres->OficinaDeDevolucion ?>" required=""/><br><br>			

		<label>Estado:</label>
		<select name="Alquileres[Estado]" value="" required="">
			<option value="">Seleccione un Estado</option>
			<option value="<?= $Alquileres->Estado ?>">Activo</option>
			<option value="<?= $Alquileres->Estado ?>">Inactivo</option>
		</select><br><br>	

		<label>FormaDePago:</label>
		<select name="Alquileres[FormaDePago]" value="" required="">
			<option value="">Seleccione una Forma De Pago</option>
			<option value="<?= $Alquileres->FormaDePago ?>">TarjetaDeCredito</option>
			<option value="<?= $Alquileres->FormaDePago ?>">Efectivo</option>
		</select><br><br>			

		<label>Clientes_IdClientes:</label>
		<select name="Alquileres[Clientes_IdClientes]"  required="">
			<option value="">--seleccionar--</option>	
			<option value="<?= $Alquileres->Clientes_IdClientes ?>">1</option>		
		</select><br><br>	

		<label>Vehiculos_IdVehiculos:</label>
		<select name="Alquileres[Vehiculos_IdVehiculos]"  required="">
			<option value="">--seleccionar--</option>	
			<option value="<?= $Alquileres->Vehiculos_IdVehiculos ?>">1</option>		
		</select><br><br>	

		<label>Usuarios_IdUsuarios:</label>
		<select name="Alquileres[Usuarios_IdUsuarios]"  required="">
			<option value="">--seleccionar--</option>	
			<option value="<?= $Alquileres->Usuarios_IdUsuarios ?>">1</option>		
		</select><br><br>

		<input type="hidden" name="Id" value="<?= $Alquileres->IdAlquileres ?>">

		<button type="submit">Editar</button>
	</form><br>
	
</body>
</html>