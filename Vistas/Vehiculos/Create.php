<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>REGISTRO VEHICULOS</title>
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
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Vehiculos&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Placa">
			      <button class="btn btn-outline-dark" type="submit">
			      	<img src="iconos/buscar.png" alt="bus"">
			      </button>
			    </form>
			  </div>
			</nav>

	<blockquote class="blockquote text-center">
		<h1 class="display-5">Registrar Vehiculos</h1>
	</blockquote>

	<div id="centro" >

<center><form action="" method="POST" >
	

	<label style="color:#F90000;">Placa</label>
	<input  class="form-control"   maxlength="6" required="" type="text" name="Vehiculos[Placa]"values=""/>
	
	<label style="color:#F90000;">Marca</label>
	<input  class="form-control"  maxlength="45" required="" type="text" name="Vehiculos[Marca]"values=""/>

	<label style="color:#F90000;">Capacidad Asientos</label>
	<input  class="form-control" required="" type="number" name="Vehiculos[CapacidadAsientos]"values="">

	<label style="color:#F90000;">FvSeguro</label>
	<input class="custom-select" required="" type="datetime-local" name="Vehiculos[FvSeguro]"values=""/>

	<label style="color:#F90000;">FvTecnomecanica</label>
	<input class="custom-select" required="" type="datetime-local" name="Vehiculos[FvTecnomecanica]"values=""/>

	<label style="color:#F90000;">Foto Vehiculos</label>
	<input class="form-control" required=""  maxlength="45" type="text" name="Vehiculos[FotoVehiculos]"values=""/><br><br>
	</div>
	<div id="boton" >
	<button class="btn btn-info" type="submit"> CREAR VEHICULO </button>
	</div>
</form></center>

</body>
</html>