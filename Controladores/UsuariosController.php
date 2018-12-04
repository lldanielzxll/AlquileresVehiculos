<?php 

require_once "Modelos/Usuarios.php";
class UsuariosController{
	public static function main($action){
        $_this= new UsuariosController();
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

			//listar
		private function admin(){
			//consultar listado de la bd
			$usu = new Usuarios();
			$Usuarios = $usu->listar();

			require "Vistas/Usuarios/Listar.php";
		}

				//crear
		private function create(){
			if(isset($_POST["Usuarios"])){
				$no = $_POST["Usuarios"]["Nombre"];
				$ap = $_POST["Usuarios"]["Apellidos"];
				$pe = $_POST["Usuarios"]["Perfil"];
				$do = $_POST["Usuarios"]["Documento"];
				$co = $_POST["Usuarios"]["Contrasena"];
				$fe = $_POST["Usuarios"]["FechaNacimiento"];

				//$Usuarios->findBydocument($Documento);

				$Usuarios = new Usuarios();
				$guardar = $Usuarios->save($no,$ap,$pe,$do,$co,$fe);

				if($guardar){
					$_SESSION["Documento"]=$do;
					header("location:index.php?c=Usuarios&a=admin");
				}else{
					echo "Ocurrio un error al guardar";
				}
				
			}else{
			require "Vistas/Usuarios/Create.php";
		}
		}

					//eliminar
			private function delete(){
				$Usuarios = new Usuarios();
				$Usuarios->delete($_GET["Id"]);
				header("location:index.php?c=Usuarios&a=admin");
			}

						//modificar
			private function update(){
				$Usuarios = new Usuarios();
				$Usuarios->findByPk($_GET["Id"]);
				if(isset($_POST["Usuarios"])){
					$Usuarios->Nombre = $_POST["Usuarios"]["Nombre"];
					$Usuarios->Apellidos = $_POST["Usuarios"]["Apellidos"];
					$Usuarios->Perfil	= $_POST["Usuarios"]["Perfil"];
					$Usuarios->Documento = $_POST["Usuarios"]["Documento"];
					$Usuarios->Contrasena = $_POST["Usuarios"]["Contrasena"];
					$Usuarios->FechaNacimiento = $_POST["Usuarios"]["FechaNacimiento"];

					$Usuarios->update();
					header("location:index.php?c=Usuarios&a=admin");
				}else{
					require "Vistas/Usuarios/Update.php";
				}
			}

			private function view(){ 
				$Usuarios= new Usuarios(); 
				$Usuarios = $Usuarios->view ($_POST['nhab']); 
			require "Vistas/Usuarios/Consultar.php"; 
			} 


}	


 ?>