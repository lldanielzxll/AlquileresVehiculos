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
		<h1 class="display-5">Actualizar Usuarios</h1>
		</blockquote>

		<div id="centro" >
		<form action="" method="post">
		<label>Nombres:</label>
		<input type="text" name="Usuarios[Nombre]"  class="form-control"  value="<?= $Usuarios->Nombre ?>" maxlength="45"  required=""><br>

		<label>Apellidos:</label>
		<input type="text" name="Usuarios[Apellidos]"  class="form-control" value="<?= $Usuarios->Apellidos ?>" maxlength="45"  required=""><br>

		<label>Perfil:</label>
		<select name="Usuarios[Perfil]" value="" required="" class="custom-select">
			<option value="">Selecciona un Servicio</option>
			<option value="<?= $Usuarios->Perfil ?>">Usuario </option>
            <option value="<?= $Usuarios->Perfil ?>">Administrador </option>
		</select><br>

		<label>Documento:</label>
		<input type="text" name="Usuarios[Documento]"  class="form-control" value="<?= $Usuarios->Documento ?>" maxlength="10"  required=""><br>

		<label>Contraseña:</label>
		<input type="text" name="Usuarios[Contrasena]"  class="form-control" value="<?= $Usuarios->Contrasena ?>"   required=""><br>

        <label>FechaNacimiento:</label>
		<input type="date" style="color: red; text-align: center;" name="Usuarios[FechaNacimiento]" class="custom-select" value="<?= $Usuarios->FechaNacimiento ?>" required="" ><br><br>

		<input type="hidden" name="id" value="<?= $Usuarios->IdUsuarios ?>">
		</div>

		<center><button class="btn btn-info" type="submit">guardar vehiculos</button></center>
	</form>

</body>
</html>