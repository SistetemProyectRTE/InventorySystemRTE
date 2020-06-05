<?php  
require_once '../BD/Conexion.php';
$c1 = new conexion();
$cc=$c1->conectar();
sleep(1);
$p=$_POST['passlg'];
$pp=md5($p);
$u=$_POST['usuariolg'];

$usuarios = $cc->query("SELECT Nombre,Especialidad FROM usuario as u INNER JOIN rol_has_usuario as rr on u.UsuarioID=rr.Usuario_UsuarioID INNER JOIN rol as r on rr.Rol_RolID=r.RolID WHERE Nombre='".$u."' AND Contraseña = '".$pp."' AND Estado='Activo' ");


if($usuarios->num_rows == 1):
	$datos=$usuarios->fetch_assoc();
	echo json_encode(array('error' => false , 'tipo' => $datos['Especialidad']));
	else:
		echo json_encode(array('error' => true ));
	endif;

	 mysqli_close($cc);
?> 