<?php 
require_once("Modelos/Usuarios.php");
	class homecontroller{

		public static function main($action){
			//VERIFICACION de sesion
		//	if (!isset($_SESSION["u"]) && $_GET["a"]!="login") {
			//	header("location:index.php?c=home&a=login");
		//	}

	        $_this = new HomeController();
			switch ($action) {
				case "home":
					$_this->home();
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
		private function home(){
			require "Vistas/Home/Home.php";
		}
		private function login(){
			if (isset($_POST["Login"]) && $_POST["Login"]["documento"] != "" && $_POST["Login"]["contrasena"] != "") {
                // Iniciar Sesion
                $documento = $_POST["Login"]["documento"];
                $contrasena = $_POST["Login"]["contrasena"];

                $usuario = new Usuarios();
                $usuario->findByDocument($documento);
                if (password_verify($contrasena,$usuario->contrasena) && $usuario->perfil == "Administrador") {
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = "Administrador";

                    echo "soy Administrador";
                    header("location: index.php?c=home&a=homeAdmin");
                }else if(password_verify($contrasena,$usuario->contrasena) && $usuario->perfil == "Usuario"){
                    $_SESSION["Usuario"] = $usuario;
                    $_SESSION["Perfil"] = "Usuario";

                    echo "Soy Usuario";
                    header("location: index.php?c=home&a=homeUsuario");

                }else{
                    header("Location: index.php?c=home&a=login&error=true");
                }
            }else{
                session_destroy();
                require "login.php";
            }
		}

		private function logout(){
			session_destroy();
			header("location: index.php?c=home&a=login");
		}
	}


 ?>