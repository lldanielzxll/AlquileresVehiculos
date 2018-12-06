<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>consultar</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
</head>
<body background="iconos/ferrari.png">
	<br><br>
	
					<center><a href="index.php?c=Alquileres&a=admin" class="btn btn-outline-danger">volver</a> </center>
			<br><br><br><br><br><br><br><br><br><br> 
			<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
			  <tbody> 
			    <tr> 
			      <th scope="col">Id</th> 
			      <th scope="col">Ciudad</th> 
			      <th scope="col">ValorDia</th> 
			      <th scope="col">FechaRecogida</th> 
			      <th scope="col">FechaEntrega</th> 
			      <th scope="col">OficinaDeRetiro</th> 
			      <th scope="col">OficinaDeDevolucion</th> 
			      <th scope="col">Estado</th> 
			      <th scope="col">FormaDePago</th>
			      <th scope="col">Clientes_IdClientes</th>
			      <th scope="col">Vehiculos_IdVehiculos</th>
			      <th scope="col">Usuarios_IdUsuarios</th>    
			      
			    </tr> 
			    	<?php foreach($Alquileres as $alq){?> 
			    <tr> 
			      <th scope="row"><?= $alq->IdAlquileres; ?></th> 
			      <td><?= $alq->Ciudad; ?></td> 
			      <td><?= $alq->ValorDia; ?></td> 
			      <td><?= $alq->FechaRecogida; ?></td> 
			      <td><?= $alq->FechaEntrega; ?></td> 
			      <td><?= $alq->OficinaDeRetiro; ?></td> 
			      <td><?= $alq->OficinaDeDevolucion; ?></td> 
			      <td><?= $alq->Estado; ?></td>
			      <td><?= $alq->FormaDePago; ?></td>
			      <td><?= $alq->Clientes_IdClientes; ?></td>
			      <td><?= $alq->Vehiculos_IdVehiculos; ?></td>
			      <td><?= $alq->Usuarios_IdUsuarios; ?></td>     
			      
			    </tr> 
			    <?php } ?> 
			  </tbody> 
			   
			</table> 

</body>
</html>