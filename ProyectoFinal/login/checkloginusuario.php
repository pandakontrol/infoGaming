
 <?php
session_start();


include('conexion.php');



$conexion1 = new mysqli($servidor, $usuario, $password, $basededatos);

if ($conexion1->connect_error) {
 die("La conexion falló: " . $conexion1->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];
 
$sql = "SELECT * FROM usuario WHERE email = '$email'";


$result = $conexion1->query($sql);


if ($result->num_rows > 0) {   

	
	$row = $result->fetch_array(MYSQLI_ASSOC);
  }
	

 // if (password_verify($password, $row['password'])) { 
if ($password==$row['password']) { 

 
    $_SESSION['loggedin'] = true;
    $_SESSION['email'] = $email;
    $_SESSION['start'];
   

    
    echo "<script>location.href='../index.html';</script>";
    die();

 } else { 
   echo "email o Password estan incorrectos.";
  include('index.php');
 }
 mysqli_close($conexion1); 
 ?>



 