<?php
require_once("Conexion.php");


class Vehiculos extends Conexion{

	public $IdVehiculos;
	public $Placa;
	public $Marca;
	public $CapacidadAsientos;
	public $FvSeguro;
	public $FvTecnomecanica;
	public $FotoVehiculos;


	public function __construct(){
	parent::__construct();

}

public function save($pla,$mar,$cap,$fvs,$fvt,$fv){

	$this ->Placa=$pla;
	$this ->Marca=$mar;
	$this ->CapacidadAsientos=$cap;
	$this ->FvSeguro=$fvs;
	$this ->FvTecnomecanica=$fvt;
	$this ->FotoVehiculos=$fv;
	

	$Conexion = $this->getConexion();
	$stm = $Conexion ->prepare("INSERT INTO Vehiculos VALUES (:IdVehiculos, :Placa, :Marca, :CapacidadAsientos, :FvSeguro, :FvTecnomecanica, :FotoVehiculos)");
	return $stm->execute((array)$this);

}

public function listar (){
	$Conexion = $this->getConexion();
	$stm =$Conexion->prepare("SELECT * FROM Vehiculos ");
	$stm->setfetchMode(PDO::FETCH_CLASS,'Vehiculos');
	
	$Vehiculos = array();
	$stm->execute();

	while($obj = $stm->fetch()){
		$Vehiculos[]=$obj;

	}
	 return $Vehiculos;
}

	public function update (){
		$Conexion = $this->getConexion();

		$stm = $Conexion->prepare("UPDATE Vehiculos SET Placa=:Placa, Marca=:Marca, CapacidadAsientos=:CapacidadAsientos, FvSeguro=:FvSeguro, FvTecnomecanica=:FvTecnomecanica, FotoVehiculos=:FotoVehiculos WHERE IdVehiculos=:id");
		
		$stm->bindparam(":Placa", $this->Placa);
		$stm->bindparam(":Marca", $this->Marca);
		$stm->bindparam(":CapacidadAsientos", $this->CapacidadAsientos);
		$stm->bindparam(":FvSeguro", $this->FvSeguro);
		$stm->bindparam(":FvTecnomecanica", $this->FvTecnomecanica);
		$stm->bindparam(":FotoVehiculos", $this->FotoVehiculos);
		$stm->bindParam(":id", $this->IdVehiculos); 
		

		$stm->execute();
		
	}

	public function findByPk($id){
		$Conexion = $this->getConexion();
		$stm = $Conexion->prepare("SELECT * FROM Vehiculos WHERE IdVehiculos = :id");
		$stm ->setFetchMode(PDO::FETCH_INTO,$this);

		$stm->bindParam(":id",$id);
		$stm-> execute();
		$stm->fetch();
	}	

	public function delete($id){
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE  FROM Vehiculos WHERE IdVehiculos = :id");
			$stm->bindParam(":id",$id);
			$stm->execute();

	}
	 public function view($id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Vehiculos WHERE Placa = :id"); 
            $stm->bindParam(":id", $id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Vehiculos'); 
 
			$Vehiculos = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Vehiculos[]=$obj; 
			} 
			return $Vehiculos; 
                } 

}

?>