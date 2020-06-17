<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php
    session_start();

    if (session_status() == 1) {
    ?>
        <script>
            window.location.replace('login/login.php');
        </script>
    <?php
    }


  
    require_once "scripts.php";
    include 'links.php';
    include 'login/conexion.php';


    $id_empresa = $_COOKIE['empresa'];
    $conss = "SELECT nombre from empresas where id_empresa = '$id_empresa'";
    $nombreEmpresa = mysqli_query($conexion, $conss);
    $datoEmpresa = mysqli_fetch_array($nombreEmpresa);

    ?>

    <title>Pagina Principal Empresa </title>
    <style type="text/css" media="screen">
        @import 'style.css';
    </style>
</head>

<body>
    <header>
        <div class="titulo">
            <img src="logo.jpg" id="logo" alt="Logo Empresa">
            <h1>InfoGaming</h1>
        </div>

        <div class="menu">
            <ul id="menu">
                <li><a href="indexEmpresa.php">Inicio</a></li>
                <li><a href="editarEmpresaForm.php">Mi Perfil</a></li>
                <li><a href="anunciosEmpresa.php">Mis Anuncios</a></li>
                <li><a href="salir.php">Salir</a></li>
            </ul>
        </div>
    </header>

    <h1 id="bienvenido">Bienvenido de nuevo, <?php echo $datoEmpresa['nombre']; ?></h1>
    <div class="wrapper wrapper--w680">
        <div class="card card-4">
            <div class="card-body">
                <h1 class="title">Publicar anuncio</h1>
                <form action="login/crearAnuncio.php" method="POST" id="formuEmpresa">

                    <div class="row row-space">
                        <div class="col-12">
                            <label for="" style="font-size: 20px;">Titulo</label> <br> <br>
                            <input type="text" class="input--style-4" name="titulo" id=""> <br> <br>
                        </div>
                    </div>
                    <label for="" style="font-size: 20px;" >Descripcion</label><br>
                    <input type="textarea" class="form-control input--style-4 " name="descripcion" id="textarea"> <br> <br> <br>
                    <p><a href="index.php"><input type="submit" class="btn btn--radius-2 btn--blue" name="submit" value="Publicar"></a></p> 

                </form>
            </div>
        </div>
    </div>
   <br><br><br>
</body>

</html>