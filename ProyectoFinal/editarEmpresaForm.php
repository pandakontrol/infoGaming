<!DOCTYPE html>
<html lang="en">

<head>


    <?php

    require_once "scripts.php";
    include 'links.php';
    include 'login/conexion.php';

    $id_empresa = $_COOKIE['empresa'];
    $consult = "SELECT * from empresas where id_empresa = '$id_empresa'";
    $resultadoEmpresa = mysqli_query($conexion, $consult);
    $datoEmpresa = mysqli_fetch_array($resultadoEmpresa);

    $id_empresa = $datoEmpresa['id_empresa'];
    $nombre = $datoEmpresa['nombre'];
    $cif = $datoEmpresa['cif'];
    $email = $datoEmpresa['email'];
    $telefono = $datoEmpresa['telefono'];
    $password = $datoEmpresa['password'];




    ?>

</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Editar Perfil Empresa</h2>
                    <form action="editarEmpresa.php" method="POST" name="formulario">

                        <div class="row row-space">
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre" value="<?php echo "$nombre"; ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group">
                                    <label class="label">CIF</label>
                                    <input class="input--style-4" type="text" name="cif" value="<?php echo "$cif"; ?>">
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

                                    <div class="input-group">
                                        <label class="label">Contraseña</label>
                                        <input class="input--style-4" type="password" name="password" value="<?php echo "$password"; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-12">
                            <div class="input-group">
                                <label class="label">Telefono</label>
                                <input class="input--style-4" type="tel" name="telefono" value="<?php echo "$telefono"; ?>"> 
                            </div>
                        </div>

                        <div class="azul">
                            <a href="indexEmpresa.php"><input type="submit" class="btn btn--radius-2 btn--blue" name="submit" value="Editar"></a>
                        </div>
                    </form>

                    <div class="azul">
                        <p><a href="indexEmpresa.php"><input type="button" class="btn btn--radius-2 btn--blue" name="button" value="Volver"></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



</body>

</html>
<!-- end document-->