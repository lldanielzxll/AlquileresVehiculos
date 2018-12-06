<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>LISTADO GENERAL DE VEHICULOS</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
	<h1  class="display-5"> Listado De Vehiculos</h1> 
	</blockquote>


<table class="table table-bordered table-dark" >
	<tbody>
		<tr class="bg-info">
			<th scope="col">Id</th>
			<th scope="col">Placa</th>
			<th scope="col">Marca</th>
			<th scope="col">CapacidadAsientos</th>
			<th scope="col">FvSeguro</th>
			<th scope="col">FvTecnomecanica</th>
			<th scope="col">FotoVehiculos</th>
			<th scope="col">Acciones</th>
			
		</tr>
		<?php foreach($Vehiculos as $veh) {?>
		<tr class="bg-danger">
			<th scope="row"><?= $veh->IdVehiculos; ?></th>
			<th ><?= $veh->Placa; ?></th>
			<th ><?= $veh->Marca; ?></th>
			<th ><?= $veh->CapacidadAsientos; ?></th>	
			<th ><?= $veh->FvSeguro; ?></th>
			<th ><?= $veh->FvTecnomecanica; ?></th>
			<th ><?= $veh->FotoVehiculos; ?></th>
			<td ><a href="index.php?c=Vehiculos&a=update&id=<?= $veh->IdVehiculos; ?>">
						<img src="iconos/editar.png" alt="edi"">
					</a>
			<a href="index.php?c=Vehiculos&a=delete&id=<?= $veh->IdVehiculos; ?>">
					<img src="iconos/eliminar.png" alt="eli"">
					</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>

</table>

<script >
	swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  imageUrl:"iconos/eliminar.png",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    swal("Poof! Your imaginary file has been deleted!", {
      icon: "success",
    });
  } else {
    swal("Your imaginary file is safe!");
  }
});
</script>



	<a href="index.php?c=Vehiculos&a=create" class="btn btn-outline-dark" role="button" aria-pressed="true">
		<img src="iconos/crear.png" alt="cre"">
	</a>

<a href="Vistas/Vehiculos/files.php" class="btn btn-outline-dark" role="button" aria-pressed="true">
		<img src="iconos/imagen.png" alt="cre"">
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





