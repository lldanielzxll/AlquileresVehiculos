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
	<div class="col-md-1">
	<form action="" method="post" class="form-inline">
		
		<label>Ciudad:</label>
		
		<input class="form-control" type="text"   name="Alquileres[Ciudad]"  maxlength="45" value="" required="" /><br><br>		
		

		
		<label>ValorDia:</label>
		
				<input type="number" name="Alquileres[ValorDia]" value="" required="" class="form-control"
		/><br><br>
		
		<label>FechaRecogida:</label>
		<input type="datetime-local" name="Alquileres[FechaRecogida]"  value="" required="" class="form-control"/><br><br>

		<label>FechaEntrega:</label>
		<input type="datetime-local" name="Alquileres[FechaEntrega]" value="" required="" class="form-control"/><br><br>

		<label>OficinaDeRetiro:</label>
		<input   type="text"   name="Alquileres[OficinaDeRetiro]"  maxlength="45" value="" required="" class="form-control"/><br><br>	

		<label>OficinaDeDevolucion:</label>
		<input   type="text"   name="Alquileres[OficinaDeDevolucion]"  maxlength="45" value="" required="" class="form-control"/><br><br>			

		<label>Estado:</label>
		<select name="Alquileres[Estado]" value="" required="" class="custom-select">
			<option value="">Seleccione un Estado</option>
			<option value="Activo">Activo</option>
			<option value="Inactivo">Inactivo</option>
		</select><br><br>	

		<label>FormaDePago:</label>
		<select name="Alquileres[FormaDePago]" value="" required="" class="custom-select">
			<option value="">Seleccione una Forma De Pago</option>
			<option value="TarjetaDeCredito">TarjetaDeCredito</option>
			<option value="Efectivo">Efectivo</option>
		</select><br><br>			

		<label>Clientes_IdClientes:</label>
		<select name="Alquileres[Clientes_IdClientes]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<option value="1">1</option>		
		</select><br><br>	

		<label>Vehiculos_IdVehiculos:</label>
		<select name="Alquileres[Vehiculos_IdVehiculos]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<option value="1">1</option>		
		</select><br><br>	

		<label>Usuarios_IdUsuarios:</label>
		<select name="Alquileres[Usuarios_IdUsuarios]"  required="" class="custom-select">
			<option value="">--seleccionar--</option>	
			<option value="1">1</option>		
		</select><br><br>

		

		<button type="submit"  class="btn btn-info">Crear Usuarios</button>
	
	</form><br>
</div>
	<button><a href="index.php?c=Alquileres&a=admin">Listado</a></button>
</body>
</html>