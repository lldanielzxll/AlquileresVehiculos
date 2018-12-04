
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>files</title>
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body background="/proyecto php/AlquileresVehiculos/iconos/ferrari.png">

    <center><blockquote class="blockquote text-center">
    <h1  class="display-5">Guardar Imagenes</h1> 
    </blockquote></center>
    
    <?php 
     $resultado = null;

     if(isset($_POST['formulario']))
     {
        $name = $_FILES['imagen']['name'];
        $tmp_name = $_FILES['imagen']['tmp_name'];
        $error = $_FILES['imagen']['error'];
        $size = $_FILES['imagen']['size'];
        $max_size = 2048 * 2048 * 2 ;
        $type = $_FILES['imagen']['type'];

        if($error)
        {
            $resultado = "ha ocurrido un error";
        }
        else if ($size > $max_size)
         {
            $resultado = "el tamaño supera  el maximo permitido. 2mb";
        }
        else if ($type != 'image/jpg' && $type != 'image/png' && $type != 'image/gif' && $type != 'image/jpeg')
         {
            $resultado = "archivos permitidos jpg|png|gif|jpeg";
        }
        else
        {
            $ruta = "file/$name";
            move_uploaded_file($tmp_name, $ruta);
            $resultado = "la imagen '$name' ha sido guardada";
        }
     }
 ?>
<center><strong><?php echo $resultado;  ?></strong>
 <form method="POST" enctype="multipart/form-data" action=" <?php echo $_SERVER['PHP_SELF']; ?>">
    Subir imagenes: <input type="file" name="imagen">
    <input type="hidden" name="formulario">
    <input type="submit" name="Subir"><br><br>
    
 </form></center>

 <center><a href="/proyecto php/AlquileresVehiculos/index.php?c=Vehiculos&a=admin" class="btn btn-outline-danger">volver</a></center>
</body>
</html>
