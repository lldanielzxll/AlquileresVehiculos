<?php
require_once("Conexion.php");


class Clientes extends Conexion{

	public $IdClientes;
	public $Nombre;
	public $Apellido;
	public $Documento;
	public $Direccion;
	public $Celular;
	public $Ciudad;
	public $NumLicencia;


	public function __construct(){
	parent::__construct();

}

public function save($nom,$ape,$doc,$dir,$cel,$ciu,$numl){

	$this ->Nombre=$nom;
	$this ->Apellido=$ape;
	$this ->Documento=$doc;
	$this ->Direccion=$dir;
	$this ->Celular=$cel;
	$this ->Ciudad=$ciu;
	$this ->NumLicencia=$numl;

	$Conexion = $this->getConexion();
	$stm = $Conexion ->prepare("INSERT INTO Clientes VALUES (:IdClientes, :Nombre, :Apellido, :Documento, :Direccion, :Celular, :Ciudad, :NumLicencia)");
	return $stm->execute((array)$this);

}

public function listar (){
	$Conexion = $this->getConexion();
	$stm =$Conexion->prepare("SELECT * FROM Clientes ");
	$stm->setfetchMode(PDO::FETCH_CLASS,'Clientes');
	
	$Clientes = array();
	$stm->execute();

	while($obj = $stm->fetch()){
		$Clientes[]=$obj;

	}
	 return $Clientes;
}

	public function update (){
		$Conexion = $this->getConexion();

		$stm = $Conexion->prepare("UPDATE Clientes SET Nombre=:Nombre, Apellido=:Apellido, Documento=:Documento, Direccion=:Direccion, Celular=:Celular, Ciudad=:Ciudad, NumLicencia=:NumLicencia WHERE IdClientes=:id");
		
		$stm->bindparam(":Nombre",$this->Nombre);
		$stm->bindparam(":Apellido",$this->Apellido);
		$stm->bindparam(":Documento",$this->Documento);
		$stm->bindparam(":Direccion",$this->Direccion);
		$stm->bindparam(":Celular",$this->Celular);
		$stm->bindparam(":Ciudad",$this->Ciudad);
		$stm->bindparam(":NumLicencia",$this->NumLicencia);
		$stm->bindparam(":id",$this->IdClientes);

		$stm->execute();
		
	}

	public function findByPk($id){
		$Conexion = $this->getConexion();
		$stm = $Conexion->prepare("SELECT * FROM Clientes WHERE IdClientes = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
	}	

	public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Clientes WHERE IdClientes = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

	}
	 public function view($id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Clientes WHERE Nombre = :id"); 
            $stm->bindParam(":id", $id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Clientes'); 
 
			$Clientes = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Clientes[]=$obj; 
			} 
			return $Clientes; 
                } 

}

?>