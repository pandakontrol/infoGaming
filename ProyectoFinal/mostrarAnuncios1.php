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

// 1st Query
$result = $conn->query("SELECT * from anuncios");


while($row = mysqli_fetch_array($result)){

    $id_anuncio = $row['id_anuncio'];
    $titulo = $row['titulo'];
    $descripcion = $row['descripcion'];
    $id_empresa = $row['id_empresa'];
    $result2 = $conn->query("SELECT * from empresas where id_empresa='$id_empresa'");
    $row2 = mysqli_fetch_array($result2);

    $nombre = $row2['nombre'];

    
    echo "<div class='anuncio'>";
    echo "<div class='textos'>";
    echo "<h1>".$nombre."</h1> <br>";
    echo "<h3>".$titulo."</h3> <br><p style='font-size:20px;'>".$descripcion."</p><br>";
    
    echo "<form method='POST' action='inscribirse.php'><button class='btn-sm btn-warning' class='inscribirse' name='id_anuncio' value='".$id_anuncio."' type='submit'>Inscribirse</button></form>";
    echo "</div>";
    echo "</div>";
}

?>



</body>
</html>