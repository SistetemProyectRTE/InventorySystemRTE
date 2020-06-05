<!DOCTYPE html>
<html lang="es">
 <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel="stylesheet" href="estilos.css">
 </head>
 <body>
   <h1> Reservas</h1>
  
   	
     
          
  <form action='../Controlador/Controlador.php' method='POST' class='form-register'>
    <h2 class='form__Titulo' align='center'>Reservas</h2>
          <div class='contenedor-inputs1'>
            
            <?php
            
            
            require_once '../BD/conexion.php';
      
             $c1 = new conexion();
             $cc=$c1->conectar();

            $consulta="SELECT Id_Reserva,Servicios_idServicios,Usuario_Id_Usuario,Fecha_Atencion,Empleado FROM reserva as r INNER JOIN servicios as s on r.Servicios_idServicios=s.idServicios";

            $resultado2=mysqli_query($cc,$consulta);
          
         
            echo "<table  border='2' ; align=center>";
            echo "<tr>";
            echo "<th>Servicio</th>";
            echo "<th>Cliente</th>";
            echo "<th>Fecha_Atencion</th>";
             echo "<th>Empleado</th>";
             echo "<th>Cancelar Reserva</th>";
            echo "</tr>";
   
         while ($columna = mysqli_fetch_array( $resultado2 ))
         {
            echo "<tr>";
            echo "<td value=".$columna['Id_Reserva']." >" . $columna['Servicios_idServicios'] . "</td><td>" . $columna['Usuario_Id_Usuario'] . "</td><td>" . $columna['Fecha_Atencion'] . "</td><td>" . $columna['Empleado'] . "</td>";
            
            echo "<td align='center'><input  type='submit'  name='id' value=".$columna['Id_Reserva']." class='btn-enviar1' required></td>";
            echo "</tr>";
         }
   
         echo "</table>"; 



         mysqli_close($cc); 


         return $consulta;
         
           
         
    ?>
     
   	 
  
   	
         </div>
   </form>
   
 </body>
</html>