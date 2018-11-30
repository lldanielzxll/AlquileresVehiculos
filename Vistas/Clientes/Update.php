<!DOCTYPE html>
<html>
<head>
    <title>ACTUALIZAR CLIENTES</title>
</head>
<body>
	<h1>Registrar Cliente</h1>
	<form action="" method="POST">
		
	<label>Nombre</label>
	<input type="text" name="Clientes[Nombre]" value="<?= $Clientes->Nombre ?>">

	<label>Apellido</label>
	<input type="text" name="Clientes[Apellido]" value="<?= $Clientes->Apellido ?>">

	<label>Documento</label>
	<input type="text" name="Clientes[Documento]" value="<?= $Clientes->Documento ?>">

	<label>Direccion</label>
	<input type="text" name="Clientes[Direccion]" value="<?= $Clientes->Direccion ?>">

	<label>Celular</label>
	<input type="text" name="Clientes[Celular]" value="<?= $Clientes->Celular ?>">

	<label>Ciudad</label>
	<input type="text" name="Clientes[Ciudad]" value="<?= $Clientes->Ciudad ?>">

	<label>Numero Licencia</label>
	<input type="text" name="Clientes[NumLicencia]" value="<?= $Clientes->NumLicencia ?>">
		
	<button type="submit"> ACTUALIZAR CLIENTE </button>
	</form>
	
</body>
</html>

