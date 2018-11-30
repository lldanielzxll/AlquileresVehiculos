<html>
<head>
<meta charset="utf-8">
	<title>LISTADO GENERAL DE CLIENTES</title>
</head>
<body>
	 <a href="index.php?c=Clientes&a=Create">Agregar</a>

    <label>Buscar Clientes</label> 
<form action="index.php?c=Clientes&a=view" method="post"> 
<input required type="text" name="nhab" placeholder="ingresar nombre"> 
<button  type="submit">consultar</button> 
</form> 
<table  border="2" >
	<tbody>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Nombre</th>
			<th scope="col">Apellido</th>
			<th scope="col">Documento</th>
			<th scope="col">Direccion</th>
			<th scope="col">Celular</th>
			<th scope="col">Ciudad</th>
			<th scope="col">NumLicencia</th>
		</tr>
		<?php foreach($Clientes as $cli) {?>
		<tr>
			<th scope="row"><?= $cli->IdClientes; ?></th>
			<th ><?= $cli->Nombre; ?></th>
			<th ><?= $cli->Apellido; ?></th>
			<th ><?= $cli->Documento; ?></th>	
			<th ><?= $cli->Direccion; ?></th>
			<th ><?= $cli->Celular; ?></th>
			<th ><?= $cli->Ciudad; ?></th>
			<th ><?= $cli->NumLicencia; ?></th>
			<th ><a href="index.php?c=Clientes&a=update&id=<?= $cli->IdClientes; ?>">Editar</th>
			<th ><a href="index.php?c=Clientes&a=delete&id=<?= $cli->IdClientes; ?>">Eliminar</th>
		</tr>
		<?php } ?>
	</tbody>

</table>
</body>
</html>

