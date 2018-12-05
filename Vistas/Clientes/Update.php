<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ACTUALIZAR CLIENTES</title>
     <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body background="iconos/ferrari.png">

	<blockquote class="blockquote text-center">
		<h1 class="display-5">Actualizar Clientes</h1>
	</blockquote>

	<div id="centro" >

	<center><form action="" method="POST">
		
	<label style="color:#F90000;">Nombre</label>
	<input type="text" class="form-control"  maxlength="45" name="Clientes[Nombre]" value="<?= $Clientes->Nombre ?>">

	<label style="color:#F90000;">Apellido</label>
	<input type="text" class="form-control"  maxlength="45" name="Clientes[Apellido]" value="<?= $Clientes->Apellido ?>">

	<label style="color:#F90000;">Documento</label>
	<input type="text" class="form-control"  maxlength="10" name="Clientes[Documento]" value="<?= $Clientes->Documento ?>">

	<label style="color:#F90000;">Direccion</label>
	<input type="text" class="form-control"  maxlength="45" name="Clientes[Direccion]" value="<?= $Clientes->Direccion ?>">

	<label style="color:#F90000;">Celular</label>
	<input type="text" class="form-control"  maxlength="10" name="Clientes[Celular]" value="<?= $Clientes->Celular ?>">

	<label style="color:#F90000;">Ciudad</label>
	<input type="text" class="form-control"  maxlength="45" name="Clientes[Ciudad]" value="<?= $Clientes->Ciudad ?>">

	<label style="color:#F90000;">Numero Licencia</label>
	<input type="text" class="form-control"  maxlength="45" name="Clientes[NumLicencia]" value="<?= $Clientes->NumLicencia ?>"><br><br>
		</div>
	<center><button class="btn btn-info" type="submit"> ACTUALIZAR CLIENTE </button></center>
	</form></center>
	
</body>
</html>

