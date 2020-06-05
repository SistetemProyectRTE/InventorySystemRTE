<?php
class conexion 
{
	public $conexion1;
	public $usuario ;
	public $password;
	public $servidor ;
	public $basededatos ;

	public function conexion()
	{

    $this->usuario = "root";
	$this->password = "";
    $this->servidor = "localhost";
	$this->basededatos = "InventorySystemRTE";

	}
	
	public function conectar ()
	{		
    $conexion1 = mysqli_connect( $this->servidor, $this->usuario,$this->password,$this->basededatos ) or die ("No se ha podido conectar al servidor de Base de datos");

    return $conexion1;
    
	}

	
	
}
?>
