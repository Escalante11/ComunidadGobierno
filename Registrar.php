<?php

session_start();
include('Conexion.php');
if(isset($_POST['registrarse'])){
$nombre = $_POST['inputNombre'];
$correo = $_POST['inputCorreo'];
$password = $_POST['inputPass'];

$_SESSION['nombre'] = $nombre;
$_SESSION['correo'] = $correo;
$_SESSION['password'] = $password;

  $sql="INSERT INTO usuario(nombre,correo,password,rol)VALUES('".$nombre."','".$correo."','".$password."''user')";
  	if (mysqli_query($conexion,$sql)){

    header('Location: index.html');
      }
  else
  {
  	  echo "<h1>fallo en el Registro</h1><br>";
      echo "<h1>Intente Registrarse mas tarde.</h1>";
      echo "<h1>Verifique si ya esta registrado</h1>";
      echo mysql_error($link);

  }

}


?>
