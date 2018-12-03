<?php
require_once( "Modelos/Vehiculos.php");
class VehiculosController{
	public static function main($action){

		$_this = new VehiculosController();
		switch ($action){
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
			break;
	}
}
	private function create(){
		if(isset($_POST["Vehiculos"])){
			// GUARDAMOS EN LA BD
			$pla = $_POST["Vehiculos"]["Placa"];
			$mar = $_POST["Vehiculos"]["Marca"];
			$cap = $_POST["Vehiculos"]["CapacidadAsientos"];
			$fvs = $_POST["Vehiculos"]["FvSeguro"];
			$fvt = $_POST["Vehiculos"]["FvTecnomecanica"];
			$fv = $_POST["Vehiculos"]["FotoVehiculos"];

		$Vehiculos = new Vehiculos();
		$guardo = $Vehiculos->save($pla,$mar,$cap,$fvs,$fvt,$fv);
		if ($guardo){
			header("location:index.php?c=Vehiculos&a=admin");
		}else{
			echo "ocurrio un error al guardar";
		}
	}else{
			require "Vistas/Vehiculos/Create.php";
	}
}

	private function admin (){
		// se consulta listadode la BBDD
		$user = new Vehiculos();
		$Vehiculos = $user->Listar();

		require"Vistas/Vehiculos/admin.php";
		}

	private function update(){
			$Vehiculos = new Vehiculos();
			$Vehiculos->findByPk($_GET["id"]);

			if (isset($_POST["Vehiculos"])){
				$Vehiculos->Placa =$_POST["Vehiculos"]["Placa"];
				$Vehiculos->Marca =$_POST["Vehiculos"]["Marca"];
				$Vehiculos->CapacidadAsientos=$_POST["Vehiculos"]["CapacidadAsientos"];
				$Vehiculos->FvSeguro =$_POST["Vehiculos"]["FvSeguro"];
				$Vehiculos->FvTecnomecanica =$_POST["Vehiculos"]["FvTecnomecanica"];
				$Vehiculos->FotoVehiculos =$_POST["Vehiculos"]["FotoVehiculos"];
			
				$Vehiculos->update();
				header("location:index.php?c=Vehiculos&a=admin");
			}else{
				require "Vistas/Vehiculos/Update.php";
			}
	}
	private function view(){
		$Vehiculos=new Vehiculos();
		$Vehiculos= $Vehiculos->view ($_POST['nhab']);
		require "Vistas/Vehiculos/Consultar.php";
	}


	private function delete(){
		$Vehiculos= new Vehiculos();
		$Vehiculos->delete($_GET["id"]);
		header("location:index.php?c=Vehiculos&a=admin");
			
	}

}
?>