<?php 

require_once("Conexion.php");



class Alquileres extends Conexion{

	public $IdAlquileres;
	public $Ciudad;
	public $ValorDia;
	public $FechaRecogida;
	public $FechaEntrega;
	public $OficinaDeRetiro;
	public $OficinaDeDevolucion;
	public $Estado;
	public $FormaDePago;
	public $Clientes_IdClientes;
	public $Vehiculos_IdVehiculos;
	public $Usuarios_IdUsuarios;

	public function __construct(){
			parent::__construct();


	}

	public function listar(){
		$Conexion = $this->getConexion();
		$stm = $Conexion->prepare("SELECT * FROM Alquileres");
		$stm->setFetchMode(PDO::FETCH_CLASS,'Alquileres');
		$Alquileres = array();
		$stm->execute();

		while ($obj = $stm->fetch()) {
				$Alquileres[]=$obj;
			}			
			return $Alquileres;
	}

	public function save($ci,$va,$fer,$fee,$ofr,$ofd,$es,$fo,$idc,$idv,$idu){
			$this->Ciudad = $ci;
			$this->ValorDia = $va;
			$this->FechaRecogida = $fer;
			$this->FechaEntrega = $fee;
			$this->OficinaDeRetiro = $ofr;
			$this->OficinaDeDevolucion = $ofd;
			$this->Estado = $es;
			$this->FormaDePago = $fo;
			$this->Clientes_IdClientes = $idc;
			$this->Vehiculos_IdVehiculos = $idv;
			$this->Usuarios_IdUsuarios = $idu;
			

			$Conexion =$this->getConexion();
		$stm = $Conexion->prepare("INSERT INTO Alquileres VALUES(:IdAlquileres,:Ciudad,:ValorDia, :FechaRecogida, :FechaEntrega , :OficinaDeRetiro , :OficinaDeDevolucion , :Estado , :FormaDePago,:Clientes_IdClientes,:Vehiculos_IdVehiculos,:Usuarios_IdUsuarios)");
			return $stm->execute((array)$this);
		}

		//eliminar
		   public function delete($Id){ 
			$Conexion =$this->getConexion();
			$stm = $Conexion->prepare("DELETE FROM Alquileres WHERE IdAlquileres = :IdAlquileres");
			$stm->bindParam(":IdAlquileres", $Id);
                        
            $stm->execute();
			}

			//Consulta a modificar
			 public function findByPk($Id) {
            $Conexion =$this->getConexion();
			$stm = $Conexion->prepare("SELECT * FROM Alquileres  WHERE IdAlquileres= :Id");
			$stm->setFetchMode(PDO::FETCH_INTO, $this);
            $stm->bindParam(":Id",$Id);
			$stm->execute();
            $stm->fetch();
            }

            //Modificar
             public function update(){ 
			$Conexion =$this->getConexion();

			$stm = $Conexion->prepare("UPDATE Alquileres SET  Ciudad=:CIU, ValorDia=:VAL, FechaRecogida=:FECR, FechaEntrega=:FECE , OficinaDeRetiro=:OFIR , OficinaDeDevolucion=:OFID , Estado=:EST , FormaDePago=:FOR ,:Clientes_IdClientes=CLC ,:Vehiculos_IdVehiculos=VEV ,:Usuarios_IdUsuarios=USU WHERE IdAlquileres = :Id");
			
			$stm->bindParam(":CIU", $this->Ciudad);
			$stm->bindParam(":VAL", $this->ValorDia);
			$stm->bindParam(":FECR", $this->FechaRecogida);
			$stm->bindParam(":FECE", $this->FechaEntrega);
			$stm->bindParam(":OFIR", $this->OficinaDeRetiro);
			$stm->bindParam(":OFID", $this->OficinaDeDevolucion);
			$stm->bindParam(":EST", $this->Estado);
			$stm->bindParam(":FOR", $this->FormaDePago);
			$stm->bindParam(":CLC", $this->Clientes_IdClientes);
			$stm->bindParam(":VEV", $this->Vehiculos_IdVehiculos);
			$stm->bindParam(":USU", $this->Usuarios_IdUsuarios);
			$stm->bindParam(":Id", $this->IdAlquileres);
                        
            $stm->execute();
			}

			public function view($Id) { 
            $Conexion =$this->getConexion(); 
			$stm = $Conexion->prepare("SELECT * FROM Alquileres WHERE Ciudad = :Id"); 
            $stm->bindParam(":Id", $Id); 
			$stm->setFetchMode(PDO::FETCH_CLASS,'Alquileres'); 
 
			$Alquileres = array(); 
			$stm->execute(); 
 
			while ($obj = $stm->fetch()) { 
				$Alquileres[]=$obj; 
			} 
			return $Alquileres; 
                } 

}


 ?>