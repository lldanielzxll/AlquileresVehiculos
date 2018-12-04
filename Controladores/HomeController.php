<?php 
require_once("Modelos/Usuarios.php");
	class HomeController{

		public static function main($action){

	        $_this = new HomeController();
	        
			switch ($action) {
				case "Home":
					$_this->Home();
					break;
				case "login":
				    $_this->login();
				    break;	
				case "logout":
					$_this->logout();
					break;	
				default:
				    throw new Exception("Accion no definida");	
				
			}
		}
		private function Home(){
			require "Vistas/Home/Home.php";
		}
		private function login(){

		
			if (isset($_POST["login"])) {
				$documento = $_POST["login"]["Documento"];
				$Contrasena = $_POST["login"]["Contrasena"];
				$Usuario = new Usuarios();
				$Usuario->findbydocument($documento);
				if (password_verify( $Contrasena,$Usuario->Contrasena)) {
					$_SESSION["Usuarios"]= $Usuario;
					$_SESSION["Perfil"]= $Usuario;

				//	$_SESSION["id"]= $usuario->id_usuario;
		
					if ($_SESSION["Perfil"]!="Administrador" ) {
						header("location:index.php?c=Home");
					}else header("location:index.php?c=Home&a=Home");
				}else{
					header("location:index.php?$c=Home&a=Home&error=true");
				}
			}
			require "Vistas/Home/header.php";
		}
		private function logout(){
			session_destroy();
			header("location:index.php?$c=Home&a=Home");
		}
	}


 ?>