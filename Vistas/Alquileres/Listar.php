<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>listar</title>
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
			    <form class="form-inline my-2 my-lg-0" action="index.php?c=Alquileres&a=view" method="post">
			      <input class="form-control mr-sm-2" type="text" name="nhab"  aria-label="Search" placeholder="Ciudad">
			      <button class="btn btn-outline-dark" type="submit">
			      	<img src="iconos/buscar.png" alt="bus"">
			      </button>
			    </form>
			  </div>
			</nav>

	<blockquote class="blockquote text-center">
	<h1 class="display-5"> Listado De Alquileres  </h1>
	</blockquote>




	<table class="table table-bordered table-dark">            
		<tbody>
			<tr class="bg-info">
				
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
			<tr  class="bg-danger">
				<td><?= $Alquileres->IdAlquileres; ?></td>
				<td><?= $Alquileres->Ciudad; ?></td>
				<td><?= $Alquileres->ValorDia; ?></td>
				<td><?= $Alquileres->FechaRecogida; ?></td>
				<td><?= $Alquileres->FechaEntrega; ?></td>
				<td><?= $Alquileres->OficinaDeRetiro; ?></td>
				<td><?= $Alquileres->OficinaDeDevolucion; ?></td>
				<td><?= $Alquileres->Estado; ?></td>
				<td><?= $Alquileres->FormaDePago; ?></td>
				<td><?= $Alquileres->Clientes_IdClientes; ?> </td>
				<td><?= $Alquileres->Vehiculos_IdVehiculos; ?></td>
				<td><?= $Alquileres->Usuarios_IdUsuarios; ?></td>
				<td> 
                    <a href="index.php?c=Alquileres&a=update&Id=<?=$Alquileres->IdAlquileres ?>">
                    	<img src="iconos/editar.png" alt="edi"">
                    </a> 
                    <a href="index.php?c=Alquileres&a=delete&Id=<?=$Alquileres->IdAlquileres ?>">
                    	<img src="iconos/eliminar.png" alt="eli"">
                    </a>

                </td>
			</tr>
			<?php } ?>
		</tbody>
	</table><br><br>
	<a href="index.php?c=Alquileres&a=create" class="btn btn-outline-dark" role="button" aria-pressed="true">
		<img src="iconos/crear.png" alt="cre"">
	</a>

	<footer style="width=100%; bottom: 0; position: fixed"><p style="color:white;">Tesalqui©2018 - Privacidad y legal - Contacto - Bolsa de Trabajo - Obtén el boletín - Ubicaciones - Siguenos
			<a href="" class="btn btn-outline-dark">
		 	<img src="iconos/face.png" alt="fa">
		 	</a>
		 	<a href="" class="btn btn-outline-dark">
			<img src="iconos/twi.png" alt="tw">
			</a>
			<a href="" class="btn btn-outline-dark">
			<img src="iconos/insta.png" alt="tw">
			</a> 
			<a href="" class="btn btn-outline-dark">
			<img src="iconos/google.png" alt="go">
			</a>
			<a href="" class="btn btn-outline-dark">
			<img src="iconos/youtube.png" alt="yo">
			</a></p>
		</footer>

</body>
</html>