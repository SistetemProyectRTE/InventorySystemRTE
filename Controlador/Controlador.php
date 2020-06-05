<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="../Vista/index.php" method="_POST">
		<form action="../Modelo/DAO.php" method="_POST">
	<?php 
	if( isset($_POST['opcionregister']))
	{
		$a= $_POST["Nombre"];
		$b=$_POST["Apellido"];
		$c=$_POST["Cedula"];
		$d=$_POST["Contraseña"];
        $r=3;
		require_once '../Modelo/Modelo.php';
		$M = new Modelo_Inventory($a,$b,$c,$d,$r);
		require_once '../Modelo/DAO.php';
		$l= new DAO_Inventory();
		$l->inserta($a,$b,$c,$d,$r);
	}
	else
	{
		if (isset($_POST['opcionregisterN'])) 
		{
			$ar= $_POST["Nombre"];
			$br=$_POST["Apellido"];
			$cr=$_POST["Cedula"];
			$dr=$_POST["Contraseña"];
	        $rr=2;
			require_once '../Modelo/Modelo.php';
			$M = new Modelo_Inventory1($ar,$br,$cr,$dr,$rr);
			require_once '../Modelo/DAO.php';
			$l= new DAO_Inventory();
			$l->inserta1($ar,$br,$cr,$dr,$rr);
		}
		else
		{
			if (isset($_POST['opcionlogin']))
			{
				$al= $_POST["Especialidad"];
				$bl=$_POST["Nombre"];
				$cl=$_POST["Contraseña"];
				
				require_once '../Modelo/Modelo.php';
				$M = new Modelo_InventoryLogin($al,$bl,$cl);
				require_once '../Modelo/DAO.php';
				$l= new DAO_Inventory();
				$l->login($al,$bl,$cl);

			}
			else
			{
				if (isset($_POST['EliminarUsuario']))
				{
					$ce= $_POST["Cedula"];
					require_once '../Modelo/Modelo.php';
					$M = new Modelo_InventoryEliminar($ce);
					require_once '../Modelo/DAO.php';
					$l= new DAO_Inventory();
					$l->Eliminar($ce);

				}
				else
				{
					if (isset($_POST['EliminarUsuarios']))
					{
						$cee= $_POST["Cedula"];
						
						require_once '../Modelo/Modelo.php';
						$M = new Modelo_InventoryEliminar2($cee);
						require_once '../Modelo/DAO.php';
						$l= new DAO_Inventory();
						$l->Eliminar2($cee);

					}
					else
					{
						if (isset($_POST['AgregarActivo'])) 
						{
							$t= $_POST["TipoElemento"];
							$a= $_POST["Ambiente"];
							$m= $_POST["Marca"];
							$d= $_POST["Descripcion"];

							require_once '../Modelo/Modelo.php';
							$M = new Modelo_InventoryActivo($t,$a,$m,$d);
							require_once '../Modelo/DAO.php';
							$l= new DAO_Inventory();
							$l->AgregarActivo($t,$a,$m,$d);
						}
					}
				}
			}
		}
	}
	
	?>

</body>
</html>