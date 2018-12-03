<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>create</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body background="iconos/ferrari.png">
	
	<nav   class="navbar navbar-expand-lg navbar-dark" style="background-color:#000000;">
			  <div class="collapse navbar-collapse" class="align-self-center mr-3" >
			    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Home">HOME</a>
			      </li>
			    	<li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Alquileres&a=admin">LISTADO DE ALQUILERES</a>
			      </li>

			      <li class="nav-item ">
			        <a class="nav-link" href="index.php?c=Usuarios&a=admin">LISTADO DE USUARIOS </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="index.php?c=Clientes&a=admin">LISTADO DE CLIENTES</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link " href="index.php?c=Vehiculos&a=admin">LISTADO DE VEHICULOS</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Usuarios&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Documento">
			      <button class="btn btn-outline-dark" type="submit">
			      	<img src="iconos/buscar.png" alt="bus"">
			      </button>
			    </form>
			  </div>
			</nav>

			<blockquote class="blockquote text-center">
		<h1 class="display-5">Registrar Usuarios</h1>
	</blockquote>
	
	<div id="centro" >
		 
	<center><form action="" method="post"  >
		

		<label>Nombres:</label>
		<input  class="form-control" type="text"   name="Usuarios[Nombre]" maxlength="45" value="" required=""/><br><br>		
		
		
		<label>Apellidos:</label>
		
				<input class="form-control" type="text" name="Usuarios[Apellidos]" maxlength="45" value="" required=""
		/><br><br>
		
		<label>Perfil:</label>
		<select name="Usuarios[Perfil]" value="" required="" class="custom-select">
			<option value="">Seleccione un Perfil</option>
			<option value="Usuario">Usuario</option>
			<option value="Administrador">Administrador</option>
		</select><br><br>	

		<label>Documento:</label>
		<input class="form-control"  type="text"   name="Usuarios[Documento]" maxlength="10" value="" required=""/><br><br>			

		<label>Contraseña:</label>
		<input class="form-control"  type="password"   name="Usuarios[Contrasena]" value="" required=""/><br><br>		

		<label>FechaNacimiento:</label>
		<input class="form-control" type="date" name="Usuarios[FechaNacimiento]" value="" required=""/><br><br>
	</div>

		<div id="boton" >
		<button type="submit"  class="btn btn-info">Crear Usuario</button>
		</div>
	
		 
	</form></center><br>

	

	
</body>
</html>