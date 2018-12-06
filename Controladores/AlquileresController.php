<?php 

require "Modelos/Alquileres.php";
require "Modelos/Clientes.php";
require "Modelos/Vehiculos.php";
require_once "Modelos/Usuarios.php";

class AlquileresController{
	public static function main($action){
        $_this= new AlquileresController();
		switch ($action) {
			case "create":
			$_this->create();
			break;

				case "delete":
				$_this->delete();
				
				break;

				case "update":
				$_this->update();
				break;

				case "view":
				$_this->view();
				break;

				case "admin":
				$_this->admin();
				break;

				default:
				throw new Exception("Accion no definida");
						
			}
	}

	private function admin(){
		$alq = new Alquileres();
		$Alquileres = $alq->listar();

		require "Vistas/Alquileres/Listar.php";
	}

			//crear
		private function create(){
			if(isset($_POST["Alquileres"])){
				$ci = $_POST["Alquileres"]["Ciudad"];
				$va = $_POST["Alquileres"]["ValorDia"];
				$fer = $_POST["Alquileres"]["FechaRecogida"];
				$fee = $_POST["Alquileres"]["FechaEntrega"];
				$ofr = $_POST["Alquileres"]["OficinaDeRetiro"];
				$ofd = $_POST["Alquileres"]["OficinaDeDevolucion"];
				$es = $_POST["Alquileres"]["Estado"];
				$fo = $_POST["Alquileres"]["FormaDePago"];
				$idc = $_POST["Alquileres"]["Clientes_IdClientes"];
				$idv = $_POST["Alquileres"]["Vehiculos_IdVehiculos"];
				$idu = $_POST["Alquileres"]["Usuarios_IdUsuarios"];
				

				$Alquileres = new Alquileres();
				$guardar = $Alquileres->save($ci,$va,$fer,$fee,$ofr,$ofd,$es,$fo,$idc,$idv,$idu);

				if($guardar){
					header("location:index.php?c=Alquileres&a=admin");
				}else{
					echo "Ocurrio un error al guardar";
				}
				
			}else{
				$cliente = new Clientes();
				$misClientes = $cliente->listar();

				$Vehiculo = new Vehiculos();
				$misVehiculos = $Vehiculo->listar();

				$Usuario = new Usuarios();
				$misUsuarios = $Usuario->listar();

			require "Vistas/Alquileres/Create.php";
		}
		}

			//eliminar
			private function delete(){
				$Alquileres = new Alquileres();
				$Alquileres->delete($_GET["Id"]);
				header("location:index.php?c=Alquileres&a=admin");
			}

						//modificar
			private function update(){
				$Alquileres = new Alquileres();
				$Alquileres->findByPk($_GET["Id"]);
				if(isset($_POST["Alquileres"])){
					$Alquileres->Ciudad = $_POST["Alquileres"]["Ciudad"];
					$Alquileres->ValorDia = $_POST["Alquileres"]["ValorDia"];
					$Alquileres->FechaRecogida	= $_POST["Alquileres"]["FechaRecogida"];
					$Alquileres->FechaEntrega = $_POST["Alquileres"]["FechaEntrega"];
					$Alquileres->OficinaDeRetiro = $_POST["Alquileres"]["OficinaDeRetiro"];
					$Alquileres->OficinaDeDevolucion = $_POST["Alquileres"]["OficinaDeDevolucion"];
					$Alquileres->Estado = $_POST["Alquileres"]["Estado"];
					$Alquileres->FormaDePago = $_POST["Alquileres"]["FormaDePago"];
					$Alquileres->Clientes_IdClientes = $_POST["Alquileres"]["Clientes_IdClientes"];
					$Alquileres->Vehiculos_IdVehiculos = $_POST["Alquileres"]["Vehiculos_IdVehiculos"];
					$Alquileres->Usuarios_IdUsuarios = $_POST["Alquileres"]["Usuarios_IdUsuarios"];

					$Alquileres->update();
					header("location:index.php?c=Alquileres&a=admin");
				}else{
					
				$cliente = new Clientes();
				$misClientes = $cliente->listar();

				$Vehiculo = new Vehiculos();
				$misVehiculos = $Vehiculo->listar();

				$Usuario = new Usuarios();
				$misUsuarios = $Usuario->listar();

					require "Vistas/Alquileres/Update.php";
				}
			}

			private function view(){ 
				$Alquileres= new Alquileres(); 
				$Alquileres = $Alquileres->view ($_POST['nhab']); 
			require "Vistas/Alquileres/Consultar.php"; 
			} 

}

 ?>