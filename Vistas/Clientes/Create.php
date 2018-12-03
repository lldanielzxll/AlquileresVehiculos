<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>REGISTRO CLIENTES</title>
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
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Clientes&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Nombre">
			      <button class="btn btn-outline-dark" type="submit">
			      	<img src="iconos/buscar.png" alt="bus"">
			      </button>
			    </form>
			  </div>
			</nav>

	<blockquote class="blockquote text-center">
		<h1 class="display-5">Registrar Clientes</h1>
	</blockquote>

	<div id="centro" >
<center><form action="" method="POST"  >

	

	<label>Nombre</label>
	<input class="form-control" required="" type="text" name="Clientes[Nombre]"values=""/>

	<label>Apellido</label>
	<input class="form-control" required="" type="text" name="Clientes[Apellido]"values=""/>

	<label>Documento</label>
	<input class="form-control" required="" type="text" name="Clientes[Documento]"values="">

	<label>Direccion</label>
	<input class="form-control" required="" type="text" name="Clientes[Direccion]"values=""/>

	<label>Celular</label>
	<input class="form-control" required="" type="text" name="Clientes[Celular]"values=""/>

	<label>Ciudad</label>
	<input class="form-control" required="" type="text" name="Clientes[Ciudad]"values=""/>

	<label >Numero Licencia</label>
	<input class="form-control" required="" type="number" name="Clientes[NumLicencia]"values=""/><br><br>
	</div>
	<div id="boton" >
	<button type="submit" class="btn btn-info"> CREAR CLIENTE </button>
	</div>
</form></center>


</body>
</html>