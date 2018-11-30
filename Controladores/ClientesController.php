<?php
require_once( "Modelos/Clientes.php");
class ClientesController{
	public static function main($action){

		$_this = new ClientesController();
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
		if(isset($_POST["Clientes"])){
			// GUARDAMOS EN LA BD
			$nom = $_POST["Clientes"]["Nombre"];
			$ape = $_POST["Clientes"]["Apellido"];
			$doc = $_POST["Clientes"]["Documento"];
			$dir = $_POST["Clientes"]["Direccion"];
			$cel = $_POST["Clientes"]["Celular"];
			$ciu = $_POST["Clientes"]["Ciudad"];
			$numl = $_POST["Clientes"]["NumLicencia"];

		$Clientes = new Clientes();
		$guardo = $Clientes->save($nom,$ape,$doc,$dir,$cel,$ciu,$numl);
		if ($guardo){
			header("location:index.php?c=Clientes&a=admin");
		}else{
			echo "ocurrio un error al guardar";
		}
	}else{
			require "Vistas/Clientes/Create.php";
	}
}

	private function admin (){
		// se consulta listadode la BBDD
		$user = new Clientes();
		$Clientes = $user->Listar();

		require"Vistas/Clientes/admin.php";
		}

	private function update(){
			$Clientes = new Clientes();
			$Clientes->findByPk($_GET["id"]);

			if (isset($_POST["Clientes"])){
				$Clientes->Nombre =$_POST["Clientes"]["Nombre"];
				$Clientes->Apellido =$_POST["Clientes"]["Apellido"];
				$Clientes->Documento =$_POST["Clientes"]["Documento"];
				$Clientes->Direccion =$_POST["Clientes"]["Direccion"];
				$Clientes->Celular =$_POST["Clientes"]["Celular"];
				$Clientes->Ciudad =$_POST["Clientes"]["Ciudad"];
				$Clientes->NumLicencia =$_POST["Clientes"]["NumLicencia"];

				$Clientes->update();
				header("location:index.php?c=Clientes&a=admin");
			}else{
				require "Vistas/Clientes/Update.php";
			}
	}
	private function view(){
		$Clientes=new Clientes();
		$Clientes= $Clientes->view ($_POST['nhab']);
		require "Vistas/Clientes/Consultar.php";
	}


	private function delete(){
		$Clientes= new Clientes();
		$Clientes->delete($_GET["id"]);
		header("location:index.php?c=Clientes&a=admin");
			
	}

}
?>