<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>listar</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	

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
		<h1 class="display-5">LISTADO DE USUARIOS</h1>
	</blockquote>
	
</form> 
	<table  class="table table-bordered table-dark">            
		<tbody>
			<tr  class="bg-info" >
				
				<th>Id</th>
				<th>Nombres</th>
				<th>Apellidos</th>
				<th>Perfil</th>
				<th>Documento</th>
				<th>Contraseña</th>
				<th>FechaNacimiento</th>
				<th>Acciones</th>
			</tr>
			<?php foreach($Usuarios as $Usuarios2){ ?>
			<tr  class="bg-danger">
				<td><?= $Usuarios2->IdUsuarios; ?></td>
				<td><?= $Usuarios2->Nombre; ?></td>
				<td><?= $Usuarios2->Apellidos; ?></td>
				<td><?= $Usuarios2->Perfil; ?></td>
				<td><?= $Usuarios2->Documento; ?></td>
				<td><?= $Usuarios2->Contrasena; ?></td>
				<td><?= $Usuarios2->FechaNacimiento; ?></td>
				<td> 
                    <a href="index.php?c=Usuarios&a=update&Id=<?=$Usuarios2->IdUsuarios ?>">
                    	<img src="iconos/editar.png" alt="edi"">
                    </a> 
                    <a href="index.php?c=Usuarios&a=delete&Id=<?=$Usuarios2->IdUsuarios ?>">
						<img src="iconos/eliminar.png" alt="eli"">
                    </a>

                </td>
			</tr>
			<?php } ?>
		</tbody>
	</table><br><br>          
 <a href="index.php?c=Usuarios&a=create" class="btn btn-outline-dark" role="button" aria-pressed="true" >
 	<img src="iconos/crear.png" alt="cre"">
 </a>

		

</body>
</html>