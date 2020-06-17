<!DOCTYPE html>
<html lang="en">

<head>
    <?php


    require_once "scripts.php";
    include 'links.php';
    include 'login/conexion.php';
    ?>

    <?php
    $id_usuario = $_COOKIE['usuario'];
    $consss = "SELECT * from usuario where id_usuario = '$id_usuario'";
    $resultadoUsuario = mysqli_query($conexion, $consss);
    $datoUsuario = mysqli_fetch_array($resultadoUsuario);
    $id_usuario = $datoUsuario['id_usuario'];
    $nombre = $datoUsuario['nombre'];
    $apellidos = $datoUsuario['apellidos'];
    $fecha = $datoUsuario['fecha_nacimiento'];
    $password = $datoUsuario['password'];
    $email = $datoUsuario['email'];
    $telefono = $datoUsuario['telefono'];
    $dni = $datoUsuario['dni'];
    $id_juego = $datoUsuario['id_juego'];
    ?>

</head>


<body>
    
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Editar Perfil Usuario</h2>
                    <form action="editarUsuario.php" method="POST" name="formulario">
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre" value="<?php echo "$nombre"; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Apellidos</label>
                                    <input class="input--style-4" type="text" name="apellidos" value="<?php echo "$apellidos"; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-4">
                                <div class="input-group">
                                    <label class="label">Fecha de nacimiento</label>
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="date" name="fecha_nacimiento" value="<?php echo "$fecha"; ?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">

                                    <div class="input-group">
                                        <label class="label">Contraseña</label>
                                        <input class="input--style-4" type="password" name="password" value="<?php echo "$password"; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email" value="<?php echo "$email"; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Telefono</label>
                                    <input class="input--style-4" type="text" name="telefono" value="<?php echo "$telefono"; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <label class="label">DNI</label>
                            <input class="input--style-4" type="text" name="dni" value="<?php echo "$dni"; ?>">
                        </div>


                        <div class="input-group">
                            <label class="label">Juego Principal</label>
                            <div class="col-8">
                                <?php
                                echo "<select name='id_juego'>";

                                if ($id_juego == "1") {
                                    echo "<option value='1' selected>Fortnite</option>";
                                } else {
                                    echo "<option value='1'>Fortnite</option>";
                                }
                                if ($id_juego == "2") {
                                    echo "<option value='2' selected>League of Legends</option>";
                                } else {
                                    echo "<option value='2'>League of Legends</option>";
                                }
                                echo "</select> "; ?>

                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                        <div class="azul">
                            <p><a href="index.php"><input type="submit" class="btn btn--radius-2 btn--blue" name="submit" value="Enviar"></a></p>
                            <!--<button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>-->
                        </div>
                    </form>
                    <div class="azul">
                        <p><a href="indexUsuario.php"><input type="button" class="btn btn--radius-2 btn--blue" name="button" value="Volver"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->