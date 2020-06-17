<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal</title>
</head>
<style type="text/css" media="screen">
             @import 'style.css';
        </style>
<?php
    // include 'links.php';
    // require_once "login/sesion.php";

    
    session_start();

if(session_status()==1){
    ?>
    <script> 
    window.location.replace('login/login.php'); 

    </script>
    <?php
}


    include 'login/sesion.php';
    require_once "scripts.php";
    include 'links.php';
    include 'login/conexion.php';

    $id_usuario = $_COOKIE['usuario'];
    $consss = "SELECT nombre from usuario where id_usuario = '$id_usuario'";
    $nombreUsuario=mysqli_query($conexion,$consss);
    $datoUsuario = mysqli_fetch_array($nombreUsuario);
?>
<body>
<header>
        <div class="titulo">
        <img src="logo.jpg" id="logo" alt="Logo Empresa">
        <h1>InfoGaming</h1>
        </div>
    
    
    <ul id="menu">
        <li><a href="indexUsuario.php">Inicio</a></li>
        <li><a href="editarUsuarioForm.php">Mi Perfil</a></li>
        <li><a href="anunciosUsuario.php">Mis Anuncios</a></li>
        <li><a href="salir.php">Salir</a></li>
    </ul>

    </header>
    

    <h1 id="bienvenido"> Bienvenido, <?php echo $datoUsuario['nombre'];?> estos son los anuncios a los que te has inscrito</h1>

    <?php include 'mostrarmisAnuncios.php';?>
    <div class="anuncios">

    <!-- <form action="mostrarAnuncios.php" method="post">
    <input type="textarea" name="textarea" id="textarea">
    <input type="submit" value="Ver">
    </form> -->
    </div>
   

  
</body>
</html>