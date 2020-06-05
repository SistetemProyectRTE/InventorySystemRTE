
<?php  
require_once ("Modelo.php");

class DAO_Inventory
{
	public function DAO_Inventory()
	{

	}
	public function inserta($A,$B,$C,$D,$R)
	{
		$AA=$A;
		$BB=$B;
		$CC=$C;
		$DD=$D;
		$E='Activo';
		require_once '../BD/Conexion.php';
		$c1 = new conexion();
        $cc=$c1->conectar();
	

         $i = $cc->query("INSERT INTO Usuario(Cedula,Nombre,Apellido,Contraseña) VALUES (" . $CC . ",'" . $AA . "','" . $BB . "',md5('".$DD."') )");
	    $seleccionar=$cc->query("SELECT UsuarioID FROM Usuario ");
		while ($columna = mysqli_fetch_array( $seleccionar ))
          		{
          		 	$U=$columna['UsuarioID'];
          		}
         	if ($i==true) 
         	{
         		
         		 $i2 = $cc->query("INSERT INTO Rol_has_Usuario(Rol_RolID,Usuario_UsuarioID,Estado) VALUES (" . $R. ",".$U.",'".$E."' )");
         		
         	}

        if($i2==true)
        {
	           
	        header("location:../Vista/index.php");
	            
        }
        else
        {
	           echo 'Usuario no registrado';
	             
        }
         mysqli_close($cc);
         return $i;

	}
	public function inserta1($AR,$BR,$CR,$DR,$RR)
	{
		$AA=$AR;
		$BB=$BR;
		$CC=$CR;
		$DD=$DR;
		$E='Activo';
		require_once '../BD/Conexion.php';
		$c1 = new conexion();
        $cc=$c1->conectar();

       
         $i2 = $cc->query("INSERT INTO Usuario(Cedula,Nombre,Apellido,Contraseña) VALUES (" . $CR . ",'" . $AR . "','" . $BR . "',md5('".$DR."') )");
	    $seleccionar=$cc->query("SELECT UsuarioID FROM Usuario ");
		while ($columna = mysqli_fetch_array( $seleccionar ))
          		{
          		 	$U=$columna['UsuarioID'];
          		}
         	if ($i2==true) 
         	{
         		
         		 $i3 = $cc->query("INSERT INTO Rol_has_Usuario(Rol_RolID,Usuario_UsuarioID,Estado) VALUES (" . $RR. ",".$U.",'".$E."' )");
         		
         	}

        if($i3==true)
        {

	           
	          header("location:../Vista/UsuariosSena.php");
	            
        }
        else
        {
	           echo 'Usuario no registrado';
	             
        }
           mysqli_close($cc);
         return $i2;

	}



	public function AgregarActivo($T,$A,$M,$D)
	{
		$TT=$T;
		$AA=$A;
		$MM=$M;
		$DD=$D;
		$E=1;
		require_once '../BD/Conexion.php';
		$c1 = new conexion();
        $cc=$c1->conectar();

       
         $i2 = $cc->query("INSERT INTO elemento(Ambiente_AmbienteID,TipoElemento_TipoElementoID,Estado_EstadoID,Marca,Descripcion) VALUES (" . $AA . ",'" . $TT . "','" . $E . "','".$MM."','".$DD."' )");
	   

        if($i2==true)
        {

	           
	          header("location:../Vista/ActivosSena.php");
	            
        }
        else
        {
	           echo 'Usuario no registrado';
	             
        }
           mysqli_close($cc);
         return $i2;

	}

	


} 

?>   


