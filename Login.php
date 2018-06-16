<?php
session_start();
include('Conexion.php');
if(isset($_POST['login'])){
$correo = $_POST['inputCorreo'];
$password = $_POST['inputPass'];

$_SESSION['correo'] = $correo;
$_SESSION['password'] = $password;

$sql = "SELECT * FROM usuario WHERE correo ='".$correo."' and password = '".$password."'";
$resultado = mysqli_query( $conexion, $sql );
if($resultado){
  while ($columna = mysqli_fetch_array( $resultado )){
if($columna['rol'] == "admin"){
  header('Location: admin.php');
  break;
}else{
  if($columna['rol'] == "interventor"){
  header('Location: interventor.php');


}
  header('Location: user.php');
break;
}
}

  }
}



 ?>
