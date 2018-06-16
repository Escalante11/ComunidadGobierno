<?php

$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "comunidadGob";

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");

	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM usuario";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");



/*$hostname="localhos";
	$username="root";
	$password="";
	$dbname="comunidadGob";


  $link = mysqli_connect($hostname,$username,$password,$dbname);
	mysql_select_db($dbname, $link);

mysql_close();
*/

?>
