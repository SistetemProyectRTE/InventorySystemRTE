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

	</style>
</head>
<body>

	<section class="container-fluid slider d-flex justify-content-center align-items-center">
		<h1 class="display-4"><strong><i>InventorySystemRTE</i></strong></h1>
	</section>
	
	<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
		

		<a class="navbar-brand" href="index.php">
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

<div class="error">
	<span>Datos de Ingreso no validos, intentalo de nuevo por favor</span>
</div>

<section class="container-fluid  d-flex justify-content-center align-items-center">
	<div class="form_actualizar">
		<h1>Ingreso al sistema</h1>
		<hr>
		<div></div>
		<form  action="" id="formlg">
			<label for="Nombre">Usuario:</label>
			<input type="text" name="usuariolg" placeholder="Usuario" required/>
			<label for="Apellido">Contraseña:</label>
			<input type="password" name="passlg" placeholder="Contraseña" required/>

      		
			<input type="submit" class="btn btn-primary btn_save" name="opcionregister" value="Iniciar Sesion">
      
			</form>
    
      
		
	</div>
</section>





<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>