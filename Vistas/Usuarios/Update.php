<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>update</title>
</head>
<body>
	
		<form action="" method="post">
		<label>Nombres:</label>
		<input type="text" name="Usuarios[Nombre]"  value="<?= $Usuarios->Nombre ?>" maxlength="45"  required=""><br>

		<label>Apellidos:</label>
		<input type="text" name="Usuarios[Apellidos]" value="<?= $Usuarios->Apellidos ?>" maxlength="45"  required=""><br>

		<label>Perfil:</label>
		<select name="Usuarios[Perfil]" value="" required=""/>
			<option value="">Selecciona un Servicio</option>
			<option value="<?= $Usuarios->Perfil ?>">Usuario </option>
            <option value="<?= $Usuarios->Perfil ?>">Vendedor </option>
		</select><br>

		<label>Documento:</label>
		<input type="text" name="Usuarios[Documento]" value="<?= $Usuarios->Documento ?>" maxlength="10"  required=""><br>

		<label>Contraseña:</label>
		<input type="text" name="Usuarios[Contrasena]" value="<?= $Usuarios->Contrasena ?>"   required=""><br>

        <label>FechaNacimiento:</label>
		<input type="date" style="color: red; text-align: center;" name="Usuarios[FechaNacimiento]"  value="<?= $Usuarios->FechaNacimiento ?>" required="" ><br><br>

		<input type="hidden" name="id" value="<?= $Usuarios->IdUsuarios ?>">

		<button type="submit">guardar vehiculos</button>
	</form>

</body>
</html>