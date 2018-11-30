<html>
<head>
	<title>consultar</title>
</head>
<body>
  <br><br>
<a href="index.php?c=Vehiculos&a=admin">volver</a>
<br><br><br><br><br><br><br><br><br><br> 
<table width="200" border="1" cellspacing="2" cellpadding="2" align="center"> 
	<tbody>
		<tr>
	  <th scope="col">id</th> 
      <th scope="col">Placa</th> 
      <th scope="col">Marca</th> 
      <th scope="col">CapacidadAsientos</th> 
      <th scope="col">FvSeguro</th> 
      <th scope="col">FvTecnomecanica</th> 
      <th scope="col">FotoVehiculos</th> 
      

      <th scope="col" colspan="2">Acciones</th> 
    </tr> 
    	<?php foreach($Vehiculos as $Vehiculos){?> 
    <tr> 
      <th scope="row"><?= $Vehiculos->IdVehiculos; ?></th> 
      <td><?= $Vehiculos->Placa; ?></td> 
      <td><?= $Vehiculos->Marca; ?></td> 
      <td><?= $Vehiculos->CapacidadAsientos; ?></td> 
      <td><?= $Vehiculos->FvSeguro; ?></td> 
      <td><?= $Vehiculos->FvTecnomecanica; ?></td> 
      <td><?= $Vehiculos->FotoVehiculos; ?></td> 
      <td><a href="index.php?c=Vehiculos&a=Update&id=<?= $Vehiculos->IdVehiculos; ?>">Editar</a></td> 
      <td><a href="index.php?c=Vehiculos&a=delete&id=<?= $Vehiculos->IdVehiculos;?>">Eliminar</a></td> 
    </tr> 
    <?php } ?> 
  </tbody>
</table>
</body>
</html>