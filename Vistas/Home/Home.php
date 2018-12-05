<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/zx.css">
</head>
<body style="background-color:#4F9BFA;">
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
			      <?php if (isset($_SESSION["Usuarios"])) {
			      	# code...
			      ?>
			      <li class="nav-item">
			        <a class="nav-link " href="index.php?c=Home&a=logout">CERRAR SESION</a>
			      </li>
			  <?php } ?>
			        <?php if (!isset($_SESSION["Usuarios"])) {
			      	# code...
			      ?>
			      <li class="nav-item">
			        <a class="nav-link " href="login.php">INICIAR SESION</a>
			      </li>
			  <?php } ?>
			    </ul>
			    
			    </form>
			  </div>
			</nav>
			 <h2 style="text-align: center;">NOS GUSTA SER<br>
      <br>
      HONESTOS CONTIGO<br>
      <br>
      ¿Por qué en Tesalqui.com somos diferentes?<br>
      <br>
      En Tesalqui.com encuentras el precio final a pagar, con impuestos y
      seguros incluidos y sin cargos ocultos. Además trabajamos constantemente
      por tener los mejores proveedores de alquiler de carros para que
      encuentres en 1 solo sitio tu carro ideal.</h2>


		<footer style="width=100%; bottom: 0; position: fixed"><p style="color:#000000;" >Tesalqui©2018 - Privacidad y legal - Contacto - Bolsa de Trabajo - Obtén el boletín - Ubicaciones - Siguenos
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
