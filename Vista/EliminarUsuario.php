
<?php 
require_once '../BD/Conexion.php';
    $c1 = new conexion();
        $cc=$c1->conectar();

if (!empty($_POST)) {
  $idusuario=$_POST['idusuario'];
  $query_delete=mysqli_query($cc,"UPDATE rol_has_usuario SET Estado = 'Inactivo' where Usuario_UsuarioID='".$idusuario."'");

  if($query_delete)
  {
     header("location:UsuariosSena.php");
   }else
   {
    echo "Error al Eliminar";
   }
}




if (empty($_REQUEST['id']) || $_REQUEST['id'] == 24) {
  header("location:UsuariosSena.php");
}else{
  
  $idusuario=$_REQUEST['id'];
  $query=mysqli_query($cc,"SELECT Nombre, Apellido, Cedula,Especialidad from usuario as u inner join rol_has_usuario as rr on u.UsuarioID=rr.Usuario_UsuarioID INNER JOIN rol as r on rr.Rol_RolID=r.RolID where UsuarioID = '".$idusuario."'");
  $result=mysqli_num_rows($query);
  if ($result>0) {
    while ($columna = mysqli_fetch_array($query)) {
      $Nombre=$columna['Nombre'];
      $Apellido=$columna['Apellido'];
      $Cedula=$columna['Cedula'];
      $Especialidad=$columna['Especialidad'];
    }
  }else{
    header("location:UsuariosSena.php");
  }
}

 ?>

<!DOCTYPE html>
<html  lang="es">
<head>
  <title>InventorySystemRTE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, intial-scale=1.0, shrink-to-fit=no, minimun-scale=1.0">
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
    table{
      border-collapse: collapse;
      font-size: 12pt;
      font-family: 'arial';
      width: 100%;
    }
    table th{
      text-align: left;
      padding: 10px;
      background:#3179FF;
      color: #FFF;
    }
    table tr:nth-child(odd){
      background: #AEB5BF;
    }
    table td{
      padding: 10px;
          }
    .link_edit{
      color: #0ca4de;
    }
    .link_delete{
      color: #f26b6b;
    }
    .data_delete{
      text-align: center;  
    }
    .data_delete h4{
      font-size: 12pt;
    }
    .data_delete span{
      font-weight: bold;
      color: #4f72d4;
      font-size: 12pt;
    }
    .btn_cancel,.btn_ok{
      width: 124px;
      background: #478ba2;
      color: #FFF;
      display: inline-block;
      padding: 5px;
      border-radius: 5px;
      cursor: pointer;
      margin: 15px;
    }
    .btn_cancel{
      background: 
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
          <a class="nav-item nav-link active " href="MenuAdministrador.php">Inicio </a>
          <a class="nav-item nav-link active" href="#">Inventario</a>
          <a class="nav-item nav-link active " href="UsuariosSena.php">Usuarios </a>
          <a class="btn btn-primary  mr-2 " href="#NuevoUsuario" role="button" data-toggle="modal">Ingresar Nuevo Usuario</a>
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
    
    <div class="data_delete">
      <h4>¿Seguro que desea eliminar el Usuario que cuenta con los siguientes datos?</h4>
      <p>Nombre:<span><?php echo $Nombre; ?></span></p>
      <p>Apellido:<span><?php echo $Apellido; ?></span></p>
      <p>Cedula:<span><?php echo $Cedula; ?></span></p>
      <p>Especialidad:<span><?php echo $Especialidad; ?></span></p>
      <form method="POST" action="">
        <input type="hidden" name="idusuario" value="<?php echo $idusuario; ?>">
        <a href="UsuariosSena.php" class="btn_cancel btn-primary active">Cancelar</a>
        <input type="submit" value="Aceptar" class="btn_ok btn-primary active">
      </form>
    </div>
 
 </section>
 
<!--Ventana Register-->

  <form action="../Controlador/Controlador.php" method="POST" class="form-register">
  <div class="modal" tabindex="-1" role="dialog" id="NuevoUsuario" align="center">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de Usuarios</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body ">
          <input type="text"name="Nombre" placeholder="Nombre" for="recipient-name" required>
          <input type="text"name="Apellido" placeholder="Apellido" for="recipient-name" required>
          <br><br>
          <input type="text"name="Cedula" placeholder="Cedula" for="recipient-name" required>
          <input type="password"name="Contraseña" placeholder="Contraseña" for="recipient-name" required>
       
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" name="opcionregisterN" value="Registrar">Registrar
      </div>
       </div>
  </div></div></form>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

 
</html>