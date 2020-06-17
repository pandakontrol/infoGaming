<html>
<?php
	require_once 'login/conexion.php';
	// $sql9 = "SELECT * from anuncios ";
    // $result=mysqli_query($conexion,$sql9);
    // $datoUsuario = mysqli_fetch_array($result);
    
    // echo json_encode($result);

    // // if(mysqli_num_rows($result) > 0){
    // //    $fila = $datoUsuario;
    // //         echo $fila;
           
        

    // // }


// Check for errors
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}

$id_empresa= $_COOKIE['empresa'];



// 1st Query
$result = $conn->query("SELECT * from anuncios where id_empresa='$id_empresa'");


while($row = mysqli_fetch_array($result)){

    $id_anuncio = $row['id_anuncio'];
    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    echo "<div class='anuncio'>";
    echo "<h1> Titulo: " .$titulo."</h1> <br><h3> Descripción: ".$descripcion."</h3><br>";
    echo "<div class='botones'>";
    echo "<form method='POST' action='verPerfiles.php'><button class='btn-sm btn-info' name='id_anuncio' value='".$id_anuncio."' type='submit'>Ver Inscritos</button></form>";
    echo "<form method='POST' action='borrarAnuncio.php' ><button class='btn-sm btn-danger' style='margin-left: 15px;' name='id_anuncio' value='".$id_anuncio."' type='submit'>Borrar</button></form>";
    
    echo "</div>";
    echo "</div>";
}

?>



</body>
</html>