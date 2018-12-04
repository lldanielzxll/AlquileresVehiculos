<?php 
	
	require("Modelos/Usuarios.php");	
	session_start(); 

	$action = "Home";
	$controller = "Home";

	if (isset($_GET["a"])) 
		$action = $_GET["a"];
	

	if (isset($_GET["c"])) 
		$controller = $_GET["c"];
	
		switch ($controller) {
			case "Alquileres":
				require "Controladores/AlquileresController.php";
				AlquileresController::main($action);
				break;
			case "Clientes":
				require "Controladores/ClientesController.php";
			ClientesController::main($action);
				break;
			case 'Usuarios':
				require "Controladores/UsuariosController.php";
				UsuariosController::main($action);
				break;
			case 'Vehiculos':
				require "Controladores/VehiculosController.php";
				VehiculosController::main($action);
				break;
			
			default://controlador de inicio
			require "Controladores/HomeController.php";
			//accion estatica ::
			HomeController::main($action);
		}
 ?>