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
  </style>
</head>
<body>

  <section class="container-fluid slider d-flex justify-content-center align-items-center">
    <h1 class="display-4"><strong><i>InventorySystemRTE</i></strong></h1>
  </section>
  
 <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
    

    <a class="navbar-brand" href="MenuTecnicoLogistica.php">
      <img src="img/Logo2.png" width="30" height="30 " class="d-inline-block align-top" alt="">
      InventorySystemRTE
    </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


    <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
      
    <div class="navbar-nav mr-auto ml-auto text-center">
          <a class="nav-item nav-link active " href="MenuTecnicoLogistica.php">Inicio </a>
          <a class="nav-item nav-link active" href="ActivosSena.php">Inventario</a>
          <a class="btn btn-primary  mr-2 " href="NuevoActivo.php " role="button" >Ingresar Nuevo Activo</a>
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
    <h4>Los Activos del SENA son los siguientes</h4>

  </section>
  <div class="container-fluid  d-flex justify-content-center align-items-center" >
    <table>
      <tr>
        <th>ID</th>
        <th>TipoElemento</th>
         <th>Marca</th>
        <th>Ambiente</th>
        <th>Estado</th>
        <th>Acciones</th>
      </tr>

      <?php  

      require_once '../BD/Conexion.php';
       $c1 = new conexion();
        $cc=$c1->conectar();

        $listaa="SELECT ElementoID,Marca,TipoElemento,AmbienteID as Ambiente,TipoEstado as Estado FROM Ambiente as a INNER JOIN elemento as e on a.AmbienteID=e.Ambiente_AmbienteID INNER JOIN estado as ee on e.Estado_EstadoID=ee.EstadoID INNER JOIN tipoelemento as t on e.TipoElemento_TipoElementoID=t.TipoElementoID";
        $resultado=mysqli_query($cc,$listaa);
        
            while ($columna = mysqli_fetch_array($resultado))
          {
          
          ?>
              <tr>
                <td><?php echo $columna['ElementoID'] ?></td>
                <td><?php echo $columna['TipoElemento'] ?></td>
                <td><?php echo $columna['Marca'] ?></td>
                <td><?php echo $columna['Ambiente'] ?></td>
                 <td><?php echo $columna['Estado'] ?></td>
               
                <td>
                  <a class="link_edit" href="EditarUsuario.php?id=<?php echo $columna['ElementoID'] ?>">Editar</a>
                 
                  |
                  <a class="link_delete" href="EliminarUsuario.php?id=<?php echo $columna['ElementoID'] ?>">Eliminar</a>
                
                </td>
              </tr>
      <?php 

          }
        
      ?>


     
    </table>
    </div>
 
 



<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>

 
</html>