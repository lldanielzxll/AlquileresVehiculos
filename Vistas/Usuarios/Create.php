<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>create</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
</head>
<body>
	
	<nav  class="navbar navbar-expand-lg navbar-dark bg-primary">
			  <div class="collapse navbar-collapse" >
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Alquileres&a=admin">LISTADO DE ALQUILERES</a>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Usuarios&a=admin">LISTADO DE USUARIOS </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?c=Alquileres&a=create">LISTADO DE CLIENTES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="index.php?c=Usuarios&a=create">LISTADO DE VEHICULOS</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Alquileres&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Ciudad">
			      <button class="btn btn-outline-dark" type="submit">Consultar</button>
			    </form>
			  </div>
			</nav>
	
	<div class="col-md-1" >
		 
	<form action="" method="post"  class="form-inline" >
		<div class="align-self-center">
		<label>Nombres:</label>
		<input  class="form-control" type="text"   name="Usuarios[Nombre]" maxlength="45" value="" required=""/><br><br>		
		
		
		<label>Apellidos:</label>
		
				<input class="form-control" type="text" name="Usuarios[Apellidos]" maxlength="45" value="" required=""
		/><br><br>
		
		<label>Perfil:</label>
		<select name="Usuarios[Perfil]" value="" required="" class="custom-select">
			<option value="">Seleccione un Perfil</option>
			<option value="Usuario">Usuario</option>
			<option value="Vendedor">Vendedor</option>
		</select><br><br>	

		<label>Documento:</label>
		<input class="form-control"  type="text"   name="Usuarios[Documento]" maxlength="10" value="" required=""/><br><br>			

		<label>Contraseña:</label>
		<input class="form-control"  type="password"   name="Usuarios[Contrasena]" value="" required=""/><br><br>		

		<label>FechaNacimiento:</label>
		<input class="form-control" type="date" name="Usuarios[FechaNacimiento]" value="" required=""/><br><br>
	</div>

		
		<button type="submit"  class="btn btn-info">Crear Usuario</button>

	
		 
	</form><br>

	</div>

	<button><a href="index.php?c=Usuarios&a=admin">LISTADO</a></button>
</body>
</html>