<?php 

require_once("Conexion.php");

class Usuarios extends Conexion{

	public $IdUsuarios;
	public $Nombre;
	public $Apellidos;
	public $Perfil;
	public $Documento;
	public $Contrasena;
	public $FechaNacimiento;


		public function __construct(){
			parent::__construct();


	}

	public function listar(){
		$Conexion = $this->getConexion();
		$stm = $Conexion->prepare("SELECT * FROM Usuarios");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Usuarios');
		$Usuarios = array();
		$stm->execute();

		while ($obj = $stm->fetch()) {
				$Usuarios[]=$obj;
			}			
			return $Usuarios;
	}

	//crear
		public function save($no, $ap, $pe, $do,$co,$fe){
			$this->Nombre = $no;
			$this->Apellidos = $ap;
			$this->Perfil = $pe;
			$this->Documento = $do;
			$this->Contrasena = $co;
			$this->FechaNacimiento = $fe;
			

			$Conexion =$this->getConexion();
		$stm = $Conexion->prepare("INSERT INTO Usuarios VALUES(:IdUsuarios,:Nombre,:Apellidos, :Perfil, :Documento , :Contrasena , :FechaNacimiento)");
			return $stm->execute((array)$this);
		}

		//eliminar
		   public function delete($Id){ 
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE FROM Usuarios WHERE IdUsuarios = :IdUsuarios");
			$stm->bindParam(":IdUsuarios", $Id);
                        
            $stm->execute();
			}


			//Consulta a modificar
			 public function findByPk($Id) {
            $Conexion =$this->getConexion();
			$stm = $Conexion->prepare("SELECT * FROM Usuarios  WHERE IdUsuarios= :Id");
			$stm->setFetchMode(PDO::FETCH_INTO, $this);
            $stm->bindParam(":Id",$Id);
			$stm->execute();
            $stm->fetch();
            }

            //Modificar
             public function update(){ 
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("UPDATE Usuarios set  Nombre=:NOM, Apellidos=:APE, Perfil=:PER, Documento=:DOC , Contrasena=:CON , FechaNacimiento=:FEC  WHERE IdUsuarios = :Id");
			$stm->bindParam(":NOM", $this->Nombre);
			$stm->bindParam(":APE", $this->Apellidos);
			$stm->bindParam(":PER", $this->Perfil);
			$stm->bindParam(":DOC", $this->Documento);
			$stm->bindParam(":CON", $this->Contrasena);
			$stm->bindParam(":FEC", $this->FechaNacimiento);
			$stm->bindParam(":Id", $this->IdUsuarios);
                        
            $stm->execute();
			}


			public function view($Id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Usuarios WHERE Documento = :Id"); 
            $stm->bindParam(":Id", $Id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Usuarios'); 
 
			$Usuarios = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Usuarios[]=$obj; 
			} 
			return $Usuarios; 
                } 

}

 ?>