<?php

  class Modelo_Inventory
  {
  	
  	public function Modelo_Inventory($r,$a,$b,$c,$d)
  	{
  		$this->A=$a;
		$this->B=$b;
		$this->C=$c;
		$this->D=$d;
		$this->R=$r;

  	}
  	public function setA($a)
	{
	$this->A=$a;
	}
	public function getA()
	{
	return $this->A;
	}

	public function setB($b)
	{
	$this->B=$b;
	}
	public function getB()
	{
	return $this->B;
	}

	public function setC($c)
	{
	$this->C=$c;
	}
	public function getC()
	{
	return $this->C;
	}
	public function setD($d)
	{
	$this->D=$d;
	}
	public function getD()
	{
	return $this->D;
	}
	public function setR($r)
	{
	$this->R=$r;
	}
	public function getR()
	{
	return $this->R;
	}

	
  } 
  class Modelo_Inventory1
  {
  	
  	public function Modelo_Inventory1($rr,$ar,$br,$cr,$dr)
  	{
  		$this->A=$ar;
		$this->B=$br;
		$this->C=$cr;
		$this->D=$dr;
		$this->R=$rr;

  	}
  	public function setAR($ar)
	{
	$this->AR=$ar;
	}
	public function getAR()
	{
	return $this->AR;
	}

	public function setBR($br)
	{
	$this->BR=$br;
	}
	public function getBR()
	{
	return $this->BR;
	}

	public function setCR($cr)
	{
	$this->CR=$cr;
	}
	public function getCR()
	{
	return $this->CR;
	}
	public function setDR($dr)
	{
	$this->DR=$dr;
	}
	public function getDR()
	{
	return $this->DR;
	}
	public function setRR($rr)
	{
	$this->RR=$rr;
	}
	public function getRR()
	{
	return $this->RR;
	}

	
  } 
  
   class Modelo_InventoryLogin
   {
   	
   	public function Modelo_InventoryLogin($al,$bl,$cl)
	{
		$this->Al=$al;
		$this->Bl=$bl;
		$this->Cl=$cl;
	}
	public function setAl($al)
	{
	$this->Al=$al;
	}
	public function getAl()
	{
	return $this->Al;
	}

	public function setBB($bl)
	{
	$this->Bl=$bl;
	}
	public function getBl()
	{
	return $this->Bl;
	}

	public function setCl($cl)
	{
	$this->Cl=$cl;
	}
	public function getCl()
	{
	return $this->Cl;
	}
   } 


   class Modelo_InventoryEliminar
   {
   	
   	public function Modelo_InventoryEliminar($ce)
	{
		$this->CE=$ce;
		
	}
	public function setCE($ce)
	{
	$this->CE=$ce;
	}
	public function getCE()
	{
	return $this->CE;
	}

   } 

   class Modelo_InventoryEliminar2
   {
   	
   	public function Modelo_InventoryEliminar2($cee)
	{
		$this->CEE=$cee;
		
	}
	public function setCE($cee)
	{
	$this->CEE=$cee;
	}
	public function getCEE()
	{
	return $this->CEE;
	}

   }




     class Modelo_InventoryActivo
   {
   	
   	public function Modelo_InventoryActivo($t,$a,$m,$d)
	{
		$this->T=$t;
		$this->A=$a;
		$this->M=$m;
		$this->D=$d;
		
	}
	public function setT($t)
	{
	$this->T=$t;
	}
	public function getT()
	{
	return $this->T;
	}


	public function setA($a)
	{
	$this->A=$a;
	}
	public function getA()
	{
	return $this->A;
	}

	public function setM($m)
	{
	$this->M=$m;
	}
	public function getM()
	{
	return $this->M;
	}

	public function setD($d)
	{
	$this->D=$d;
	}
	public function getD()
	{
	return $this->D;
	}

   }
?>