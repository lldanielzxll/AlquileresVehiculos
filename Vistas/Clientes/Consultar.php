<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>consultar</title>
   <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body background="iconos/ferrari.png">
  <br><br>
          
             <center> <a href="index.php?c=Clientes&a=admin"  class="btn btn-outline-danger">volver</a></center>
          
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
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
    	<?php foreach($Clientes as $Clientes){?> 
    <tr> 
      <th scope="row"><?= $Clientes->IdClientes; ?></th> 
      <td><?= $Clientes->Nombre; ?></td> 
      <td><?= $Clientes->Apellido; ?></td> 
      <td><?= $Clientes->Documento; ?></td> 
      <td><?= $Clientes->Direccion; ?></td> 
      <td><?= $Clientes->Celular; ?></td> 
      <td><?= $Clientes->Ciudad; ?></td> 
      <td><?= $Clientes->NumLicencia; ?></td> 
      
    </tr> 
    <?php } ?> 
  </tbody>
</table>
</body>
</html>