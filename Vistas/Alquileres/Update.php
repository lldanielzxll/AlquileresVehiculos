<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>update</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body background="iconos/ferrari.png">

	<blockquote class="blockquote text-center">
		<h1 class="display-5">Actualizar Alquileres</h1>
	</blockquote>

	<div id="centro" >

	<center><form action="" method="post">
		<label style="color:#F90000;">Ciudad:</label>
		<input   type="text" class="form-control"  name="Alquileres[Ciudad]" value="<?= $Alquileres->Ciudad ?>" maxlength="45" required=""/><br><br>		
		
		
		<label style="color:#F90000;">ValorDia:</label>
		
				<input type="number" class="form-control" name="Alquileres[ValorDia]" value="<?= $Alquileres->ValorDia ?>" required=""
		/><br><br>
		
		<label style="color:#F90000;">FechaRecogida:</label>
		<input type="datetime-local" class="custom-select" name="Alquileres[FechaRecogida]" value="<?= $Alquileres->FechaRecogida ?>" required=""/><br><br>

		<label style="color:#F90000;">FechaEntrega:</label>
		<input type="datetime-local" class="custom-select" name="Alquileres[FechaEntrega]" value="<?= $Alquileres->FechaEntrega ?>" required=""/><br><br>

		<label style="color:#F90000;">OficinaDeRetiro:</label>
		<input   type="text" class="form-control" name="Alquileres[OficinaDeRetiro]" maxlength="45" value="<?= $Alquileres->OficinaDeRetiro ?>" required=""/><br><br>	

		<label style="color:#F90000;">OficinaDeDevolucion:</label>
		<input   type="text" class="form-control"  name="Alquileres[OficinaDeDevolucion]" maxlength="45" value="<?= $Alquileres->OficinaDeDevolucion ?>" required=""/><br><br>			

		<label style="color:#F90000;">Estado:</label>
		<select name="Alquileres[Estado]" value="" required="" class="custom-select">
			<option value="">Seleccione un Estado</option>
			<option value="<?= $Alquileres->Estado ?>">Activo</option>
			<option value="<?= $Alquileres->Estado ?>">Inactivo</option>
		</select><br><br>	

		<label style="color:#F90000;">FormaDePago:</label>
		<select name="Alquileres[FormaDePago]" value="" required="" class="custom-select">
			<option value="">Seleccione una Forma De Pago</option>
			<option value="<?= $Alquileres->FormaDePago ?>">TarjetaDeCredito</option>
			<option value="<?= $Alquileres->FormaDePago ?>">Efectivo</option>
		</select><br><br>			

		<label style="color:#F90000;">Clientes_IdClientes:</label>
		<select name="Alquileres[Clientes_IdClientes]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<?php foreach ($misClientes as $cliente ) { ?>
				<option value="<?php echo $cliente->IdClientes ?>"><?php echo $cliente->Nombre ?></option>
			<?php }	?>		
		</select><br><br>	

		<label style="color:#F90000;">Vehiculos_IdVehiculos:</label>
		<select name="Alquileres[Vehiculos_IdVehiculos]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<?php foreach ($misVehiculos as $Vehiculo ) { ?>
				<option value="<?php echo $Vehiculo->IdVehiculos ?>"><?php echo $Vehiculo->Placa ?></option>
			<?php }	?>			
		</select><br><br>	

		<label style="color:#F90000;">Usuarios_IdUsuarios:</label>
		<select name="Alquileres[Usuarios_IdUsuarios]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<?php foreach ($misUsuarios as $Usuario ) { ?>
				<option value="<?php echo $Usuario->IdUsuarios ?>"><?php echo $Usuario->Documento ?></option>
			<?php }	?>		
		</select><br><br>

		<input type="hidden" name="Id" value="<?= $Alquileres->IdAlquileres ?>">
		</div>

		<center><button class="btn btn-info" type="submit">Editar</button></center>
	</form></center><br>
	
		<center><a href="index.php?c=Alquileres&a=admin" class="btn btn-outline-danger">volver</a> </center>
</body>
</html>