<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>listar</title>
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

	<blockquote class="blockquote text-center">
	<label> Listado De Alquileres</label> 
	</blockquote>


</form> 

	<table class="table table-bordered table-dark">            
		<tbody>
			<tr>
				
				<th>Id</th>
				<th>Ciudad</th>
				<th>ValorDia</th>
				<th>FechaRecogida</th>
				<th>FechaEntrega</th>
				<th>OficinaDeRetiro</th>
				<th>OficinaDeDevolucion</th>
				<th>Estado</th>
				<th>FormaDePago</th>
				<th>Clientes_IdClientes</th>
				<th>Vehiculos_IdVehiculos</th>
				<th>Usuarios_IdUsuarios</th>
				<th>Acciones</th>
			</tr>
			<?php foreach($Alquileres as $Alquileres){ ?>
			<tr>
				<td><?= $Alquileres->IdAlquileres; ?></td>
				<td><?= $Alquileres->Ciudad; ?></td>
				<td><?= $Alquileres->ValorDia; ?></td>
				<td><?= $Alquileres->FechaRecogida; ?></td>
				<td><?= $Alquileres->FechaEntrega; ?></td>
				<td><?= $Alquileres->OficinaDeRetiro; ?></td>
				<td><?= $Alquileres->OficinaDeDevolucion; ?></td>
				<td><?= $Alquileres->Estado; ?></td>
				<td><?= $Alquileres->FormaDePago; ?></td>
				<td><?= $Alquileres->Clientes_IdClientes; ?></td>
				<td><?= $Alquileres->Vehiculos_IdVehiculos; ?></td>
				<td><?= $Alquileres->Usuarios_IdUsuarios; ?></td>
				<td> 
                    <a href="index.php?c=Alquileres&a=update&Id=<?=$Alquileres->IdAlquileres ?>">Editar</a> 
                    <a href="index.php?c=Alquileres&a=delete&Id=<?=$Alquileres->IdAlquileres ?>">Eliminar</a>

                </td>
			</tr>
			<?php } ?>
		</tbody>
	</table><br><br>
	<button><a href="index.php?c=Alquileres&a=create">Crear</a></button>
</body>
</html>