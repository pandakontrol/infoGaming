
<?php
	require_once 'login/conexion.php';

if(mysqli_connect_errno()){
echo mysqli_connect_error();
}
$id_anuncio = $_POST['id_anuncio'];
$id_empresa= $_COOKIE['empresa'];

$result = $conn->query("SELECT id_usuario from relacion_anuncios_usuario where id_anuncio = '$id_anuncio'");

while($row1 = mysqli_fetch_array($result)){

$id_usuario = $row1['id_usuario'];

$result2 = $conn->query("SELECT * from usuario where id_usuario='$id_usuario'");

while($row = mysqli_fetch_array($result2)){

    $id_usuario = $row['id_usuario'];
    $nombre=$row['nombre'];
    $apellidos=$row['apellidos'];
    $fecha_nacimiento=$row['fecha_nacimiento'];
    $password=$row['password'];
    $email=$row['email'];
    $telefono=$row['telefono'];
    $dni=$row['dni'];
    $id_juego=$row['id_juego'];
   
  
    echo "<div class='anuncio'>";
    echo "<div class='textos'>";
    echo "<h1>"."Nombre: ".$nombre." ". $apellidos."</h1><br>";
    echo "<h1>"."Fecha de nacimiento: ".$fecha_nacimiento."<h1>";
    echo "<h1>" ."e-Mail: ".$email."</h1><br>";
    echo "<h1>"."Telefono: ".$telefono."</h1> <br>";
    echo "<h1>" ."DNI: ".$dni."</h1><br>";
   
    if ($id_juego == "1") {
        echo "<h1>Juego: Fortnite</h1>";
    } 
    if ($id_juego == "2") {
        echo "<h1>Juego: League of Legends</h1>";
    }
    echo "</div>";
    echo "</div>";
}
}

?>

