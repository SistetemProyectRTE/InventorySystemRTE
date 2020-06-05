<?php  

	require_once '../BD/Conexion.php';
		$c1 = new conexion();
        $cc=$c1->conectar();

        if (!empty($_POST)) {
        	if (empty($_POST['Nombre']) || empty($_POST['Apellido']) || empty($_POST['Cedula'])) {
        		$alert='<p class="msg_error">Todos Los Campos Son Obligatorios.</p>';
        	}
        	else{
        		$idusuario=$_POST['idusuario'];
        		$Nombre=$_POST['Nombre'];
        		$Apellido=$_POST['Apellido'];
        		$Cedula=$_POST['Cedula'];


        		$query=$cc->query("SELECT * FROM usuario where Cedula = '$Cedula' and UsuarioID !='$idusuario'");
        		$result= mysqli_fetch_array($query);

        		if($result >0){
        			$alert='<p class="msg_error">La Cedula del Usuario ya existe</p>';
        		}else{

        			if (empty($_POST['Cedula'])) {
        				$insertar=$cc->query("UPDATE usuario SET  Nombre='$Nombre',Apellido='$Apellido' WHERE UsuarioID='$idusuario'");
        			}else
        			{
        				$insertar=$cc->query("UPDATE usuario SET Cedula ='$Cedula', Nombre='$Nombre',Apellido='$Apellido' WHERE UsuarioID='$idusuario'");
        			}

        			
        			if ($insertar) {
        				$alert='<p class="msg_save">Usuario Actualizado Correctamente</p>';
        			}else{
        				$alert='<p class="msg_error">El Usuario No Fue Actualizado Correctamente</p>';
        			}
        		}
        	}
        }


        if(empty($_GET['id']))
        {
        	header('Location: UsuariosSena.php');
        }
        $iduser= $_GET['id'];
        $sql=$cc->query("SELECT UsuarioID,Nombre,Apellido,Cedula FROM usuario WHERE UsuarioID='$iduser'");
        $resultado = mysqli_num_rows($sql);
        if($resultado==0){
        	header('Location: UsuariosSena.php');
        }else{
        	while ($columna= mysqli_fetch_array($sql)) {
        		$idusuario=$columna['UsuarioID'];
        		$Nombre=$columna['Nombre'];
        		$Apellido=$columna['Apellido'];
        		$Cedula=$columna['Cedula'];
        	}
        }
?>


<!DOCTYPE html>
<html  lang="es">
<head>
	<title>InventorySystemRTE</title>
	<meta charset="utf-8">
		
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<style >
		.slider{
			background: url("img/Inicio.png");
			height: 50vh;
			background-size: cover;
			background-position: center;
		}
		.imgg{
			width: 100%;
			height: 250px;
		}
		.imgg:hover{
			border:5px solid #337AFF;
		}
		.coll{
			padding: 25px;
		}
		.error{
    background-color: #E74F4F;
    position: absolute;
    top: 0;
    padding: 10px 0 ;
    border-radius:  0 0 5px 5px;
    color: #fff;
    width: 100%;
    text-align: center;
    display: none;

  }
.form_actualizar{
	width: 450px;
	margin: auto;
	}
	.form_actualizar h1{
		color: #3c93b0;
	}
	hr{
		border:0;
		background:#CCC;
		height: 1px;
		margin: 10px 0;
		display: block;
	}
	form{
		background:#FFF;
		margin: auto;
		padding: 20px 50px;
		border:1px solid #d1d1d1;
	}
	label{
		display: block;
		font-size: 12pt;
		font-family: 'Arial';
		margin: 15px auto 5px auto;
	}
input{
	display: block;
	width: 100%;
	font-size: 11pt;
	padding: 5px;
	border:1px solid #85929e;
	border-radius:5px;
}
.btn_save{
	font-size: 12pt;
	padding: 10px;
	letter-spacing: 1px;
	border:0;
	cursor: pointer;
	margin:7px auto;
}
.alert{
	width: 100%;
	background: #66e07d66;
	border-radius:6px;
	margin:20px auto;
}
.msg_error{
	color: #e65656;
}
.msg_save{
	color: #126e00;
}
.alert p{
	padding: 10px;
}


	</style>

</head>
<body>

	<section class="container-fluid slider d-flex justify-content-center align-items-center">
		<h1 class="display-4"><strong><i>InventorySystemRTE</i></strong></h1>
	</section>
	
	<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
		

		<a class="navbar-brand" href="MenuAdministrador.php">
			<img src="img/Logo2.png" width="30" height="30 " class="d-inline-block align-top" alt="">
			InventorySystemRTE
		</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


		<div class="collapse navbar-collapse " id="navbarTogglerDemo02">
			
		<div class="navbar-nav mr-auto ml-auto text-center">
      		<a class="nav-item nav-link active " href="index.php">Inicio </a>
      		<a class="nav-item nav-link active" href="#">Inventario</a>
      		 <div class="btn-group" role="group">
    			<button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Redes Sociales y blog Sena
		    	</button>
    		<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
      			<a class="dropdown-item" href="https://twitter.com/SENAComunica?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank">Twitter</a>
      			<a class="dropdown-item" href="https://www.facebook.com/pages/Sena-CEET/789699831197094"  target="_blank">Faceboock</a>
      			<a class="dropdown-item" href="https://electricidadelectronicaytelecomu.blogspot.com/"  target="_blank">Blog CEET</a>

   			 </div>
   			</div>
      		
    	</div>
    	
    	</div>

	</nav>

<br>

<section class="container-fluid  d-flex justify-content-center align-items-center">
	<div class="form_actualizar">
		<h1>Actualizacion de Usuario</h1>
		<hr>
		<div class="alert"><?php echo isset($alert)? $alert:''; ?></div>
		<form action="" method="post">
			<input type="hidden" name="idusuario" value="<?php echo $idusuario ?>">
			<label for="Nombre">Nombre:</label>
			<input type="text" name="Nombre" placeholder="Nombre" value="<?php echo $Nombre ?>">
			<label for="Apellido">Apellido:</label>
			<input type="text" name="Apellido" placeholder="Apellido" value="<?php echo $Apellido ?>">
			<label for="Cedula">Cedula:</label>
			<input type="text" name="Cedula" placeholder="Cedula" value="<?php echo $Cedula ?>">


      		
			<input type="submit" class="btn btn-primary btn_save" value="Actualizar">
      
			</form>
    
      
		
	</div>
</section>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html> 