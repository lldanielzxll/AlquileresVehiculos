<html>
<head>
<meta charset="utf-8">
	<title>LISTADO GENERAL DE VEHICULOS</title>
</head>
<body>
	 <a href="index.php?c=Vehiculos&a=Create">Agregar</a>

    <label>Buscar Vehiculos</label> 
<form action="index.php?c=Vehiculos&a=view" method="post"> 
<input required type="text" name="nhab" placeholder="ingresar nombre"> 
<button  type="submit">consultar</button> 
</form> 
<table  border="2" >
	<tbody>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Placa</th>
			<th scope="col">Marca</th>
			<th scope="col">CapacidadAsientos</th>
			<th scope="col">FvSeguro</th>
			<th scope="col">FvTecnomecanica</th>
			<th scope="col">FotoVehiculos</th>
			
		</tr>
		<?php foreach($Vehiculos as $veh) {?>
		<tr>
			<th scope="row"><?= $veh->IdVehiculos; ?></th>
			<th ><?= $veh->Placa; ?></th>
			<th ><?= $veh->Marca; ?></th>
			<th ><?= $veh->CapacidadAsientos; ?></th>	
			<th ><?= $veh->FvSeguro; ?></th>
			<th ><?= $veh->FvTecnomecanica; ?></th>
			<th ><?= $veh->FotoVehiculos; ?></th>
			<th ><a href="index.php?c=Vehiculos&a=update&id=<?= $veh->IdVehiculos; ?>">Editar</th>
			<th ><a href="index.php?c=Vehiculos&a=delete&id=<?= $veh->IdVehiculos; ?>">Eliminar</th>
		</tr>
		<?php } ?>
	</tbody>

</table>
</body>
</html>

