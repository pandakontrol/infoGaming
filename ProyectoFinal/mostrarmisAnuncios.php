
<?php
	require_once 'login/conexion.php';

if(mysqli_connect_errno()){
echo mysqli_connect_error();
}

$id_usuario= $_COOKIE['usuario'];

$result = $conn->query("SELECT id_anuncio from relacion_anuncios_usuario where id_usuario = '$id_usuario'");

while($row1 = mysqli_fetch_array($result)){

$id_anuncio1 = $row1['id_anuncio'];

$result2 = $conn->query("SELECT * from anuncios where id_anuncio='$id_anuncio1'");

while($row = mysqli_fetch_array($result2)){

    $id_anuncio = $row['id_anuncio'];
   
    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    echo "<div class='anuncio'>";
    echo "<div class='textos'>";

    echo "<h1>".$titulo."</h1> <br><h3>".$descripcion."</h3><br>";
    echo "<form method='POST' action='desinscribirse.php'><button class='btn-sm btn-danger' class='inscribirse' name='id_anuncio' value='".$id_anuncio."' type='submit'>DesInscribirse</button></form>";
    echo "</div>";
    echo "</div>";
}
}

?>

