<html>
<head>
	<title>consultar</title>
</head>
<body>
  <br><br>
<a href="index.php?c=Clientes&a=admin">volver</a>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center"> 
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

      <th scope="col" colspan="2">Acciones</th> 
    </tr> 
    	<?php foreach($Clientes as $Clientes){?> 
    <tr> 
      <th scope="row"><?= $Clientes->IdClientes; ?></th> 
      <td><?= $Clientes->Nombre; ?></td> 
      <td><?= $Clientes->Apellido; ?></td> 
      <td><?= $Clientes->Documento; ?></td> 
      <td><?= $Clientes->Direccion; ?></td> 
      <td><?= $Clientes->Celular; ?></td> 
      <td><?= $Clientes->NumLicencia; ?></td> 
      <td><a href="index.php?c=Clientes&a=Update&id=<?= $Clientes->IdClientes; ?>">Editar</a></td> 
      <td><a href="index.php?c=Clientes&a=delete&id=<?= $Clientes->IdClientes; ?>">Eliminar</a></td> 
    </tr> 
    <?php } ?> 
  </tbody>
</table>
</body>
</html>