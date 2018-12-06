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
	<center><a href="index.php?c=Usuarios&a=admin" class="btn btn-outline-danger">volver</a></center>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center" class="table table-bordered table-dark"> 
  <tbody> 
    <tr> 
      <th scope="col">Id</th> 
      <th scope="col">Nombres</th> 
      <th scope="col">Apellidos</th> 
      <th scope="col">Perfil</th> 
      <th scope="col">Documento</th> 
      <th scope="col">Contraseña</th> 
      <th scope="col">FechaNacimiento</th> 
      
    </tr> 
    	<?php foreach($Usuarios as $usu){?> 
    <tr> 
      <th scope="row"><?= $usu->IdUsuarios; ?></th> 
      <td><?= $usu->Nombre; ?></td> 
      <td><?= $usu->Apellidos; ?></td> 
      <td><?= $usu->Perfil; ?></td> 
      <td><?= $usu->Documento; ?></td> 
      <td><?= $usu->Contrasena; ?></td> 
      <td><?= $usu->FechaNacimiento; ?></td> 
      
    </tr> 
    <?php } ?> 
  </tbody> 
   
</table> 
</body>
</html>