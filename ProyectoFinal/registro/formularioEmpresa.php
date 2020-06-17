<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once 'scripts.php';
    ?>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registro Empresas</h2>
                    <form action="registroEmpresa.php" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Nombre</label>
                                    <input class="input--style-4" type="text" name="nombre">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">CIF</label>
                                    <input class="input--style-4" type="text" name="cif">
                                </div>
                            </div>
                        </div>
                    
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                                <div class="col-4">
                                    <div class="input-group">
                                        
                                        <div class="input-group">
                                            <label class="label">Contraseña</label>
                                            <input class="input--style-4" type="password" name="password">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Telefono</label>
                                    <input class="input--style-4" type="tel" name="telefono">
                                </div>
                            </div>
                        </div>
                        <!-- <div class="input-group">
                            <label class="label">Sube tu logo</label>
                            <input class="" type="file" name="image">

                             <div class="rs-select2 js-select-simple select--no-search">
                                <select name="subject">
                                    <option disabled="disabled" selected="selected">Elige tu juego principal</option>
                                    <option>Fortnite</option>
                                    <option>League of Legends</option>
                                    <option>Call of Duty</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div> 
                        </div> -->

                        <div class="input-group">
                            <div class="p-t-15">
                                <a href="index.html"><input type="submit" class="btn btn--radius-2 btn--blue" name="submit" value="Enviar"></a>
                                <!-- <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button> -->
                                
                            </div>
                        </div>
                        
                    </form>
                    <p><a href="../login/index.php"><input type="button" class="btn btn--radius-2 btn--blue" name="button" value="Volver"></a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->