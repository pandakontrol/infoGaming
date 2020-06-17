<html>
<?php
	// Datos de la base de datos
    $servidor = "localhost";
    $usuario = "root";
	$password = "";
	$basededatos = "infogaming";

	$conn = new mysqli($servidor, $usuario, $password, $basededatos);
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	
	
	// cerrar conexión de base de datos
	//mysqli_close( $conexion )
	
?>



</body>
</html>