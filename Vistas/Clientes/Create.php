<!DOCTYPE html>
<html>
<head>
	<title>REGISTRO CLIENTES</title>
</head>
<body>
	<H1>Registrar Clientes</H1>
<form action="" method="POST">
	<label>Nombre</label>
	<input required="" type="text" name="Clientes[Nombre]"values=""/>

	<label>Apellido</label>
	<input required="" type="text" name="Clientes[Apellido]"values=""/>

	<label>Documento</label>
	<input required="" type="text" name="Clientes[Documento]"values="">

	<label>Direccion</label>
	<input required="" type="text" name="Clientes[Direccion]"values=""/>

	<label>Celular</label>
	<input required="" type="text" name="Clientes[Celular]"values=""/>

	<label>Ciudad</label>
	<input required="" type="text" name="Clientes[Ciudad]"values=""/>

	<label>Numero Licencia</label>
	<input required="" type="number" name="Clientes[NumLicencia]"values=""/>
	

	<button type="submit"> CREAR CLIENTE </button>
</form>
</body>
</html>